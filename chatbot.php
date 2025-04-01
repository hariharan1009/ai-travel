<?php include("session_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Recommendation Chatbot</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Header -->

  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images\logo.png" alt="DreamTrails Logo">
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="chatbot.php">Chat Assistant</a></li>
        <li><a href="#packages">Packages</a></li>
        <li><a href="#testimonials">testimonials</a></li>
        <li><a href="#contact">contact</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </header>
  <style>
    /* Base Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #121212;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Video Background Styles */
    .video-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      z-index: -1;
    }

    .video-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.4);
      z-index: -1;
    }

    /* Header Styles */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 20px;
      background: rgba(24, 19, 19, 0.8);
      backdrop-filter: blur(10px);
      z-index: 10;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
      height: 60px;
    }

    .logo {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .logo img {
      height: 80px;
      width: auto;
      display: block;
    }

    nav {
      margin-left: auto;
    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: #ffffff;
      font-size: 1rem;
      font-weight: 600;
      padding: 5px 15px;
      transition: all 0.3s ease;
      border-radius: 5px;
    }

    nav ul li a:hover {
      background: linear-gradient(135deg, #FFD700, #FF8C00);
      color: #121212;
      transform: translateY(-2px);
    }

    nav ul li a:active {
      transform: translateY(1px);
    }

    /* Main Content Container */
    .container {
      margin-top: 80px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #2c3e50;
      margin-bottom: 30px;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    /* Chat Container Styles */
    .chat-container {
      height: 70vh;
      overflow-y: auto;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      background-color: #ffffff;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Message Styles */
    .message {
      margin-bottom: 10px;
      padding: 12px 16px;
      border-radius: 18px;
      max-width: 80%;
      word-wrap: break-word;
      line-height: 1.5;
      font-size: 0.95rem;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .user-message {
      background: linear-gradient(135deg, #007bff, #0062cc);
      color: white;
      margin-left: auto;
      border-bottom-right-radius: 5px;
    }

    .bot-message {
      background-color: #f1f3f5;
      color: #333;
      margin-right: auto;
      border-bottom-left-radius: 5px;
    }

    /* Input Area Styles */
    .input-group {
      margin-top: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      border-radius: 20px 0 0 20px;
      padding: 12px 20px;
      border: 1px solid #ced4da;
      transition: all 0.3s;
    }

    .form-control:focus {
      border-color: #80bdff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn-primary {
      border-radius: 0 20px 20px 0;
      padding: 12px 20px;
      background: linear-gradient(135deg, #FF8C00, #FFD700);
      border: none;
      font-weight: 600;
      transition: all 0.3s;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #FFD700, #FF8C00);
      transform: translateY(-2px);
    }

    /* Typing Indicator */
    .typing-indicator {
      display: inline-block;
      padding: 10px 15px;
    }

    .typing-dot {
      display: inline-block;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #6c757d;
      margin: 0 2px;
      animation: typingAnimation 1.4s infinite ease-in-out;
    }

    .typing-dot:nth-child(1) {
      animation-delay: 0s;
    }

    .typing-dot:nth-child(2) {
      animation-delay: 0.2s;
    }

    .typing-dot:nth-child(3) {
      animation-delay: 0.4s;
    }

    @keyframes typingAnimation {

      0%,
      60%,
      100% {
        transform: translateY(0);
      }

      30% {
        transform: translateY(-5px);
      }
    }

    /* Travel Response Formatting */
    .travel-response {
      padding: 10px;
    }

    .travel-response h5 {
      color: #2c3e50;
      margin-top: 15px;
      margin-bottom: 8px;
      font-size: 1.1rem;
    }

    .travel-response ul {
      padding-left: 20px;
      margin-bottom: 10px;
    }

    .travel-response ul li {
      margin-bottom: 5px;
    }

    .travel-response p {
      margin-bottom: 10px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .logo img {
        height: 60px;
      }

      nav ul {
        display: none;
        flex-direction: column;
        background: rgba(24, 19, 19, 0.9);
        position: fixed;
        top: 60px;
        right: 0;
        width: 200px;
        box-shadow: -2px 2px 10px rgba(0, 0, 0, 0.5);
      }

      nav ul.active {
        display: flex;
      }

      .hamburger {
        display: flex;
        flex-direction: column;
        cursor: pointer;
        margin-left: auto;
      }

      .hamburger span {
        background: #FFD700;
        height: 3px;
        width: 25px;
        margin: 3px 0;
        transition: 0.3s;
      }

      .container {
        margin-top: 70px;
        padding: 15px;
      }

      .chat-container {
        height: 60vh;
      }

      .message {
        max-width: 90%;
      }
    }

    /* Scrollbar Styles */
    .chat-container::-webkit-scrollbar {
      width: 8px;
    }

    .chat-container::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }

    .chat-container::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }

    .chat-container::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
</head>

<body>
  <div class="container py-4">
    <h1 class="text-center mb-4">Travel Recommendation Chatbot</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="chat-container" id="chatContainer">
          <div class="message bot-message">
            Hello! I'm your travel assistant. Where would you like to go or what kind of trip are you planning?
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="userInput" placeholder="Type your travel request..." autocomplete="off">
          <button class="btn btn-primary" id="sendButton">Send</button>
        </div>
        <div class="text-center">
          <small class="text-muted">Try: "I want a beach vacation in Southeast Asia with a $2000 budget"</small>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const chatContainer = document.getElementById('chatContainer');
      const userInput = document.getElementById('userInput');
      const sendButton = document.getElementById('sendButton');

      function addMessage(text, isUser) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${isUser ? 'user-message' : 'bot-message'}`;
        messageDiv.innerHTML = text;
        chatContainer.appendChild(messageDiv);
        chatContainer.scrollTop = chatContainer.scrollHeight;
      }

      function showTypingIndicator() {
        const typingDiv = document.createElement('div');
        typingDiv.className = 'message bot-message typing-indicator';
        typingDiv.id = 'typingIndicator';
        typingDiv.innerHTML = `
                    <span class="typing-dot"></span>
                    <span class="typing-dot"></span>
                    <span class="typing-dot"></span>
                `;
        chatContainer.appendChild(typingDiv);
        chatContainer.scrollTop = chatContainer.scrollHeight;
      }

      function hideTypingIndicator() {
        const typingIndicator = document.getElementById('typingIndicator');
        if (typingIndicator) {
          typingIndicator.remove();
        }
      }

      function formatTravelResponse(response) {
        let html = '<div class="travel-response">';

        if (response.destinations && response.destinations.length > 0) {
          html += `<h5>Recommended Destinations:</h5><ul>`;
          response.destinations.forEach(dest => {
            html += `<li>${dest}</li>`;
          });
          html += `</ul>`;
        }

        if (response.activities && response.activities.length > 0) {
          html += `<h5>Suggested Activities:</h5><ul>`;
          response.activities.forEach(activity => {
            html += `<li>${activity}</li>`;
          });
          html += `</ul>`;
        }

        if (response.travel_tips) {
          html += `<h5>Travel Tips:</h5><p>${response.travel_tips}</p>`;
        }

        if (response.budget_estimate) {
          html += `<h5>Budget Estimate:</h5><p>${response.budget_estimate}</p>`;
        }

        html += '</div>';
        return html;
      }

      async function sendMessage() {
        const message = userInput.value.trim();
        if (!message) return;

        addMessage(message, true);
        userInput.value = '';
        showTypingIndicator();

        try {
          const response = await fetch('api.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              message: message
            })
          });

          const data = await response.json();
          hideTypingIndicator();

          if (data.error) {
            addMessage(`Error: ${data.error}`, false);
          } else if (data.response) {
            addMessage(formatTravelResponse(data.response), false);
          }
        } catch (error) {
          hideTypingIndicator();
          addMessage('Sorry, there was an error processing your request.', false);
          console.error('Error:', error);
        }
      }

      sendButton.addEventListener('click', sendMessage);
      userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          sendMessage();
        }
      });
    });
  </script>
</body>

</html>