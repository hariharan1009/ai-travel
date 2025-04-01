<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

require 'vendor/autoload.php';
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$groqApiKey = $_ENV['GROQ_API_KEY'] ?? 'your_fallback_key_here';

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON input']);
        exit;
    }
    
    $userMessage = $input['message'] ?? '';
    
    if (empty($userMessage)) {
        http_response_code(400);
        echo json_encode(['error' => 'Message is required']);
        exit;
    }

    try {
        $prompt = <<<PROMPT
        You are an expert travel assistant. Provide recommendations for Dubai in this EXACT JSON format:
        {
            "destinations": ["list", "of", "top", "places"],
            "activities": ["suggested", "activities"],
            "travel_tips": "useful tip for visitors",
            "budget_estimate": "average cost range"
        }
        
        User request: $userMessage
        PROMPT;

        $client = new \GuzzleHttp\Client(['timeout' => 30]);
        $response = $client->post('https://api.groq.com/openai/v1/chat/completions', [
            'headers' => [
                'Authorization' => "Bearer $groqApiKey",
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'messages' => [['role' => 'user', 'content' => $prompt]],
                'model' => 'llama3-70b-8192',
                'response_format' => ['type' => 'json_object'],
                'temperature' => 0.7,
                'max_tokens' => 1024
            ]
        ]);

        $responseData = json_decode($response->getBody(), true);
        
        if (!isset($responseData['choices'][0]['message']['content'])) {
            throw new Exception('Invalid API response structure');
        }
        
        $content = $responseData['choices'][0]['message']['content'];
        
        // Enhanced JSON cleaning
        $content = trim($content);
        $content = preg_replace('/^```json|```$/i', '', $content);
        $content = trim($content);
        
        // Debugging output
        error_log("Raw API content: " . $content);
        
        $travelData = json_decode($content, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("JSON parse error: " . json_last_error_msg());
            error_log("Problematic content: " . $content);
            throw new Exception('The API returned invalid JSON: ' . json_last_error_msg());
        }
        
        echo json_encode([
            'success' => true,
            'response' => $travelData,
            'raw' => $content // Remove this in production
        ]);
        
    } catch (Exception $e) {
        error_log('Error: ' . $e->getMessage());
        http_response_code(500);
        echo json_encode([
            'error' => 'Failed to process request',
            'details' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
?>