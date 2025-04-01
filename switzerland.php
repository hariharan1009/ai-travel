<?php include("session_check.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DreamTrails - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</head>
<body>
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
  <div class="package-container">
    <h1>Switzerland Getaway - 3 Nights & 4 Days</h1>
    <div class="heading-underline"></div>
    
    <div class="tour-details">
        <div class="detail">
            <i class="fas fa-clock"></i>
            <span>3 Nights 4 Days</span>
        </div>
        <div class="detail">
            <i class="fas fa-calendar-alt"></i>
            <span>Daily Tour</span>
        </div>
        <div class="detail">
            <i class="fas fa-users"></i>
            <span>2 Persons</span>
        </div>
        <div class="detail">
            <i class="fas fa-map-marker-alt"></i>
            <span>Switzerland, Zurich</span>
        </div>
        <div class="detail">
            <i class="fas fa-globe"></i>
            <span>English</span>
        </div>
    </div>
</div>



    <!-- Banner Image Below Heading -->
    
  
    <div class="package-details">
      <div class="left-section">
        
  
        <div class="mini-slideshow">
          <div class="slideshow-container">
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <div class="slides">
              <img src="images/s1.jpg" alt="Dubai Skyline">
              <img src="images/s2.jpg" alt="Desert Safari">
              <img src="images/s3.jpg" alt="Burj Khalifa">
              <img src="images/s4.jpg" alt="Palm Jumeirah">
              <img src="images/s5.jpg" alt="Dubai Marina">
              <img src="images/s6.jpg" alt="Dubai Fountain">
            </div>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
          </div>
          <!-- Thumbnails -->
          <div class="thumbnails">
            <img src="images/s1.jpg" onclick="currentSlide(0)">
            <img src="images/s2.jpg" onclick="currentSlide(1)">
            <img src="images/s3.jpg" onclick="currentSlide(2)">
            <img src="images/s4.jpg" onclick="currentSlide(3)">
            <img src="images/s5.jpg" onclick="currentSlide(4)">
            <img src="images/s6.jpg" onclick="currentSlide(5)">
          </div>
        </div>
        
        <div class="itinerary">
            <h2>Itinerary</h2>
            <p><strong>Day 1:</strong> Arrival in Zurich, transfer to hotel, explore the Old Town, and enjoy a welcome dinner.</p>
            <p><strong>Day 2:</strong> Day trip to Lucerne and Mount Titlis, including cable car rides and scenic views.</p>
            <p><strong>Day 3:</strong> Visit Interlaken and Lauterbrunnen, enjoy adventure activities or a relaxing lake cruise.</p>
            <p><strong>Day 4:</strong> Leisure time for shopping, Swiss chocolate tasting, check-out, and departure.</p>
            <h3>Total Price: ₹80,000 (For 2 Persons)</h3>
        </div>
        
        
      </div>
  
      <!-- Booking Form Remains on the Right -->
      <div class="booking-form">
        <h2>Book Your Trip</h2>
        <form>
          <input type="text" placeholder="Full Name" required>
          <input type="email" placeholder="Email" required>
          <input type="tel" placeholder="Contact Number" required>
          <input type="tel" placeholder="WhatsApp Number" required>
          <input type="text" placeholder="Preferred Destination" required>
          <input type="date" required>
          <input type="number" placeholder="Number of People" required>
          <select required>
            <option value="" disabled selected>Select Vacation Type</option>
            <option value="honeymoon">Honeymoon</option>
            <option value="friendstrip">Friend's Trip</option>
            <option value="corporate">Corporate Trip</option>
            <option value="family">Family Trip</option>
          </select>
          <button type="button" id="pay-btn">Proceed to Payment</button>
        </form>
      </div>
    </div>
  </div>
   <!-- Footer Section -->
<footer>
  <div class="footer-content">
    <!-- Office and Branches Section -->
    <div class="office-info">
      <h3>Our Offices</h3>
      <p><strong>Head Office:</strong> 456, Sector 21, Gurgaon, Haryana - 122018, India</p>
      <h3><strong>Other Branches:</strong></h3>
      <ul>
        <li>Mumbai, Maharashtra</li>
        <li>Bangalore, Karnataka</li>
        <li>Chennai, Tamil Nadu</li>
      </ul>
    </div>

    <!-- Social Media Section -->
    <div class="social-icons">
      <h3>Follow Us</h3>
      <a href="#"><i class="fa-brands fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
  </div>

  <!-- Copyright Section -->
  <p>&copy; 2024 DreamTrails. All rights reserved. | Privacy Policy | Terms of Service</p>
</footer>
<style>
/* Styling for the Banner Image */
.tour-title {
  font-size: 28px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 15px;
}

.tour-details {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
  text-align: center;
}

.detail {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 25px;
  color: #333;
}

.detail i {
  font-size: 18px;
  color: #007bff; /* Blue color for icons */
}

.banner-image {
  width: 100%;
  max-width: 1500px;
  height: 60vh; /* Ensures a responsive height */
  max-height: 900px;
  margin: 20px auto; /* Centers the container */
  position: relative;
  overflow: hidden;
  border-radius: 12px; /* Soft rounded corners */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow */
}

/* Ensures the image covers the area properly */
.banner-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center; /* Keeps the subject centered */
  border-radius: 12px; /* Ensures the rounded corners apply */
  transition: transform 0.3s ease-in-out;
}

/* Adds a slight zoom effect on hover */
.banner-image:hover img {
  transform: scale(1.05);
}


/* Layout for Itinerary, Mini Slideshow, and Form */
.package-details {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 90%;
  margin: auto;
}

/* Left Section: Itinerary + Mini Slideshow */
.left-section {
  width: 55%;
}

/* Mini Slideshow Below Itinerary */
.mini-slideshow {
  width: 100%;
  max-width: 600px; /* Increased size */
  margin: 20px auto;
  text-align: center;
}

.slideshow-container {
  position: relative;
  width: 100%;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.slides img {
  width: 100%;
  height: 300px; /* Slightly increased */
  object-fit: cover;
  display: none;
  transition: opacity 0.5s ease-in-out;
}

.slides img.active {
  display: block;
  opacity: 1;
}

/* Arrows */
button.prev, button.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 5px;
}

button.prev { left: 10px; }
button.next { right: 10px; }

/* Thumbnails */
.thumbnails {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.thumbnails img {
  width: 60px;
  height: 40px;
  margin: 5px;
  cursor: pointer;
  border-radius: 5px;
  transition: transform 0.3s;
}

.thumbnails img:hover {
  transform: scale(1.1);
  border: 2px solid #007bff;
}

/* Booking Form */
.booking-form {
  width: 40%;
  max-width: 450px;
  background: blanchedalmond;
  padding: 25px;
  border-radius: 15px;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
  text-align: center;
  margin-left: 20px;
}

  .package-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  margin-top: 80px; /* Adjust as needed */
}

.package-container .heading-underline {
  width: 180px;
  height: 4px;
  background-color: #FFD700; /* Incorrect */
  margin: 10px auto 20px; /* Centering the underline */
}

.slideshow {
  width: 100%;
  max-width: 700px; /* Matches your uploaded image width */
  height: auto;
  aspect-ratio: 16 / 9; /* Maintains the correct aspect ratio */
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  margin-bottom: 20px;
}

.slides img {
  width: 100%;
  height: auto; /* Keeps aspect ratio */
  display: none;
}

  .package-container h1 {
  text-align: center;
  font-size: 28px;
  margin-top: 20px; /* Adds gap so header doesn't hide the heading */
}

.package-container .heading-underline {
  width: 180px;
  height: 4px;
  background-color:linear-gradient(135deg, #FFD700, #FF8C00); /* Gold color */
  margin: 10px auto 20px; /* Centering the underline */
}


.footer-content {
  margin-left: 20px; /* Moves the content inside the footer to the right */
}

  .package-details {
    display: flex;
    width: 80%;
    justify-content: space-between;
  }

  .itinerary {
  width: 90%;
  margin: 20px auto;
  padding: 20px;
  background: rgb(255, 255, 255); /* Yellow-Orange Gradient */
  border-radius: 10px;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
  color: rgb(3, 3, 3);
  text-align: center;
}

.itinerary h2 {
  font-size: 28px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #050505;
  text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.2);
}

.itinerary p {
  font-size: 18px;
  line-height: 1.6;
  background: rgba(255, 255, 255, 0.2); /* Transparent White Effect */
  padding: 12px;
  border-radius: 6px;
  margin-bottom: 10px;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
}

.itinerary p strong {
  color: #ffe600; /* Bright Yellow for Highlights */
}

.itinerary h3 {
  font-size: 22px;
  font-weight: bold;
  color: #fff;
  background: linear-gradient(135deg, #FFD700, #FF8C00);;
  display: inline-block;
  padding: 10px 15px;
  border-radius: 8px;
  margin-top: 15px;
}


  .booking-form {
    width: 40%;
    max-width: 450px;
    background: #fff;
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin: auto;
   /* transition: 0.3s ease-in-out;*/
}

/*.booking-form:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.3);
}*/

.booking-form h2 {
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #333;
}

.booking-form input, .booking-form select, .booking-form button {
    width: 100%;
    padding: 12px;
    margin-top: 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
    outline: none;
    transition: 0.3s ease-in-out;
}

/* Input Field Effects */
.booking-form input:focus, .booking-form select:focus {
    border-color: #ff6600;
    box-shadow: 0 0 10px rgba(255, 102, 0, 0.5);
}

/* Dropdown Styling */
.booking-form select {
    background-color: #fff;
    cursor: pointer;
}

/* Button Gradient Styling */
.booking-form button {
  display: inline-block;
  width: 100%;
  padding: 12px;
  background: linear-gradient(135deg, #FFD700, #FF8C00); /* Gold to Orange gradient */
  color: #121212; /* Dark text color */
  font-size: 1.2rem;
  font-weight: 600;
  text-align: center;
  border: none;
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.booking-form button:hover {
  background: linear-gradient(135deg, #FF8C00, #FFD700); /* Reverse gradient on hover */
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

.booking-form button:active {
  transform: translateY(1px);
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
}



  
</style>
<script>
  let slideIndex = 0;
const slides = document.querySelectorAll(".slides img");
const thumbnails = document.querySelectorAll(".thumbnails img");

function showSlides() {
  slides.forEach((slide, index) => {
    slide.classList.remove("active");
  });
  slides[slideIndex].classList.add("active");

  // Highlight active thumbnail
  thumbnails.forEach((thumb, index) => {
    thumb.style.opacity = index === slideIndex ? "1" : "0.5";
  });
}

function changeSlide(n) {
  slideIndex = (slideIndex + n + slides.length) % slides.length;
  showSlides();
}

function currentSlide(n) {
  slideIndex = n;
  showSlides();
}

setInterval(() => changeSlide(1), 3000); // Auto-slide every 3 sec

showSlides(); // Initialize slideshow
;
document.getElementById("pay-btn").addEventListener("click", function (e) {
    var options = {
      key: "rzp_test_VU7G23ElHpKfH3", // Replace with your Razorpay key
      amount: 8000000, // Amount in paise (₹50,000 * 100)
      currency: "INR",
      name: "DreamTrails",
      description: "Switzerland Getaway - 3 Nights & 4 Days",
      image: "images/Screenshot_2024-12-20_223329__1_-removebg-preview.png", // Your logo
      handler: function (response) {
        alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
        // You can redirect the user to a success page
        window.location.href = "payment-success.html";
      },
      prefill: {
        name: "dream trails", // Prefill with user's name
        email: "john@example.com",
        contact: "3546544564",
      },
      notes: {
        address: "DreamTrails Travel Agency",
      },
      theme: {
        color: "#007bff",
      },
    };

    var rzp = new Razorpay(options);
    rzp.open();
    e.preventDefault();
  });
</script>
</body>
</html>
