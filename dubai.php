<?php 
include("session_check.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DreamTrails - Dubai Tour Package</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <style>
/* General Styles */
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f9fa;
  color: #333;
}

/* Header Styling */
header {
  width: 100%;
  background: rgba(24, 19, 19, 0.8);
  color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 30px;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  z-index: 1000;
}

.logo img {
  height: 60px;
  transition: transform 0.3s;
}

.logo img:hover {
  transform: scale(1.05);
}

nav ul {
  list-style: none;
  display: flex;
  padding: 0;
  margin: 0;
}

nav ul li {
  margin: 0 15px;
  position: relative;
}

nav ul li a {
  text-decoration: none;
  color: white;
  font-weight: 600;
  font-size: 16px;
  transition: all 0.3s;
  padding: 8px 0;
}

nav ul li a:hover {
  color: #ffd700;
}

nav ul li a::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #ffd700;
  transition: width 0.3s;
}

nav ul li a:hover::after {
  width: 100%;
}

/* Main Content Container */
.package-container {
  max-width: 1200px;
  margin: 100px auto 40px;
  padding: 30px;
  background: white;
  border-radius: 12px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
}

/* Tour Title */
.package-container h1 {
  text-align: center;
  color: #003366;
  font-size: 2.8rem;
  margin-bottom: 15px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.heading-underline {
  width: 120px;
  height: 4px;
  background: linear-gradient(90deg, #ffd700, #ff8c00);
  margin: 0 auto 30px;
  border-radius: 2px;
}

/* Tour Details */
.tour-details {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
  margin-bottom: 40px;
}

.detail {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 18px;
  color: #444;
  background: #f8f9fa;
  padding: 12px 20px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.detail i {
  font-size: 20px;
  color: #007bff;
}

/* Banner Image */
.banner-image {
  width: 100%;
  height: 60vh;
  max-height: 600px;
  margin: 30px auto;
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.banner-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  transition: transform 0.5s ease;
}

.banner-image:hover img {
  transform: scale(1.03);
}

/* Package Details Layout */
.package-details {
  display: flex;
  gap: 40px;
  margin-top: 40px;
  flex-wrap: wrap;
}

.left-section {
  flex: 1;
  min-width: 300px;
}

/* Slideshow */
.mini-slideshow {
  width: 100%;
  margin: 30px 0;
}

.slideshow-container {
  position: relative;
  width: 100%;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.slides img {
  width: 100%;
  height: 350px;
  object-fit: cover;
  display: none;
  transition: opacity 0.5s ease;
}

.slides img.active {
  display: block;
}

/* Navigation Arrows */
button.prev, button.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.6);
  color: white;
  border: none;
  padding: 12px 15px;
  cursor: pointer;
  border-radius: 50%;
  font-size: 18px;
  transition: all 0.3s;
  z-index: 10;
}

button.prev { left: 15px; }
button.next { right: 15px; }

button.prev:hover, button.next:hover {
  background: rgba(0, 0, 0, 0.9);
  transform: translateY(-50%) scale(1.1);
}

/* Thumbnails */
.thumbnails {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 15px;
}

.thumbnails img {
  width: 80px;
  height: 60px;
  object-fit: cover;
  cursor: pointer;
  border-radius: 6px;
  transition: all 0.3s;
  border: 2px solid transparent;
}

.thumbnails img:hover {
  transform: scale(1.1);
  border-color: #0056b3;
}

.thumbnails img.active-thumb {
  border-color: #ff8c00;
  transform: scale(1.1);
}

/* Itinerary */
.itinerary {
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.itinerary h2 {
  font-size: 28px;
  font-weight: 700;
  color: #003366;
  margin-bottom: 20px;
  text-align: center;
  position: relative;
  padding-bottom: 10px;
}

.itinerary h2::after {
  content: '';
  position: absolute;
  width: 80px;
  height: 3px;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  background: linear-gradient(90deg, #ffd700, #ff8c00);
}

.itinerary p {
  font-size: 16px;
  line-height: 1.7;
  margin-bottom: 15px;
  padding: 12px;
  background: white;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.itinerary p strong {
  color: #0056b3;
}

.itinerary h3 {
  font-size: 22px;
  font-weight: 600;
  color: white;
  background: linear-gradient(135deg, #0056b3, #003366);
  display: inline-block;
  padding: 12px 25px;
  border-radius: 8px;
  margin-top: 20px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Booking Form */
.booking-form {
  width: 100%;
  max-width: 450px;
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  position: sticky;
  top: 120px;
}

.booking-form h2 {
  font-size: 24px;
  margin-bottom: 25px;
  font-weight: 700;
  color: #003366;
  text-align: center;
  position: relative;
  padding-bottom: 10px;
}

.booking-form h2::after {
  content: '';
  position: absolute;
  width: 60px;
  height: 3px;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  background: linear-gradient(90deg, #ffd700, #ff8c00);
}

.booking-form input,
.booking-form select {
  width: 100%;
  padding: 14px;
  margin-bottom: 18px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 16px;
  transition: all 0.3s;
}

.booking-form input:focus,
.booking-form select:focus {
  border-color: #0056b3;
  box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
  outline: none;
}

.booking-form button {
  width: 100%;
  padding: 15px;
  background: linear-gradient(135deg, #ff8c00, #ffd700);
  color: #003366;
  font-size: 18px;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s;
  margin-top: 10px;
  box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3);
}

.booking-form button:hover {
  background: linear-gradient(135deg, #ffd700, #ff8c00);
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(255, 140, 0, 0.4);
}

.booking-form button:active {
  transform: translateY(1px);
}

/* Footer */
footer {
  background: linear-gradient(135deg, #003366, #001a33);
  color: white;
  padding: 40px 0 20px;
  margin-top: 60px;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 30px;
  padding: 0 30px;
}

.office-info {
  flex: 1;
  min-width: 300px;
}

.office-info h3 {
  color: #ffd700;
  font-size: 20px;
  margin-bottom: 15px;
  position: relative;
  padding-bottom: 10px;
}

.office-info h3::after {
  content: '';
  position: absolute;
  width: 50px;
  height: 2px;
  bottom: 0;
  left: 0;
  background: #ff8c00;
}

.office-info p {
  margin-bottom: 10px;
  line-height: 1.6;
}

.office-info ul {
  list-style: none;
  padding: 0;
}

.office-info ul li {
  margin-bottom: 8px;
  position: relative;
  padding-left: 20px;
}

.office-info ul li::before {
  content: '•';
  color: #ff8c00;
  position: absolute;
  left: 0;
}

.social-icons {
  flex: 1;
  min-width: 200px;
}

.social-icons h3 {
  color: #ffd700;
  font-size: 20px;
  margin-bottom: 20px;
  position: relative;
  padding-bottom: 10px;
}

.social-icons h3::after {
  content: '';
  position: absolute;
  width: 50px;
  height: 2px;
  bottom: 0;
  left: 0;
  background: #ff8c00;
}

.social-icons a {
  color: white;
  font-size: 24px;
  margin-right: 15px;
  transition: all 0.3s;
  display: inline-block;
}

.social-icons a:hover {
  color: #ffd700;
  transform: translateY(-3px);
}

.copyright {
  text-align: center;
  margin-top: 40px;
  padding-top: 20px;
  border-top: 1px solid rgba(24, 19, 19, 0.8);
  font-size: 14px;
}

/* Responsive Design */
@media (max-width: 992px) {
  .package-details {
    flex-direction: column;
  }
  
  .booking-form {
    max-width: 100%;
    position: static;
    margin-top: 40px;
  }
}

@media (max-width: 768px) {
  header {
    flex-direction: column;
    padding: 15px;
  }
  
  nav ul {
    margin-top: 15px;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  nav ul li {
    margin: 5px 10px;
  }
  
  .package-container {
    margin-top: 140px;
    padding: 20px;
  }
  
  .package-container h1 {
    font-size: 2rem;
  }
  
  .detail {
    font-size: 16px;
    padding: 10px 15px;
  }
  
  .banner-image {
    height: 40vh;
  }
}

@media (max-width: 576px) {
  .slides img {
    height: 250px;
  }
  
  .thumbnails img {
    width: 60px;
    height: 45px;
  }
  
  .itinerary {
    padding: 20px;
  }
  
  .booking-form {
    padding: 20px;
  }
}
</style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/Screenshot_2024-12-20_223329__1_-removebg-preview.png" alt="DreamTrails Logo">
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#packages">Packages</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#plan">Plan Your Trip</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <div class="package-container">
    <h1>Dubai City Tour - 3 Nights & 4 Days</h1>
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
        <span>2 Adults</span>
      </div>
      <div class="detail">
        <i class="fas fa-globe"></i>
        <span>English</span>
      </div>
    </div>

    <div class="package-details">
      <div class="left-section">
        <!-- Slideshow Container -->
        <div class="slideshow-container">
          <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img src="images/wallpaperflare.com_wallpaper.jpg" alt="Dubai Skyline" style="width:100%">
            <div class="text">Dubai Skyline</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="images/City-Dubai-Arabic-dream-Burj-Khalifa-United-Arab-Emirates-Desktop-Wallpaper-Hd-2560x1440 (1).jpg" alt="Desert Safari" style="width:100%">
            <div class="text">Desert Safari</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="images/dubai3.webp" alt="Burj Khalifa" style="width:100%">
            <div class="text">Burj Khalifa</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="images/d4.jpg" alt="Palm Jumeirah" style="width:100%">
            <div class="text">Palm Jumeirah</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="images/d5.jpg" alt="Dubai Marina" style="width:100%">
            <div class="text">Dubai Marina</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <img src="images/d6.jpg" alt="Dubai Fountain" style="width:100%">
            <div class="text">Dubai Fountain</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- The dots/circles -->
        <div class="dots-container">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
        </div>

        <div class="itinerary">
          <h2>Itinerary</h2>
          <p><strong>Day 1:</strong> Arrival in Dubai, check-in at hotel, evening Dhow Cruise with dinner.</p>
          <p><strong>Day 2:</strong> Dubai city tour including Burj Khalifa, Dubai Mall, and Jumeirah Beach.</p>
          <p><strong>Day 3:</strong> Desert Safari with dune bashing, BBQ dinner, and entertainment.</p>
          <p><strong>Day 4:</strong> Free time for shopping, check-out, and departure.</p>
          <h3>Total Price: ₹50,000 (For 2 Persons)</h3>
        </div>
      </div>

      <!-- Booking Form -->
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

      <div class="social-icons">
        <h3>Follow Us</h3>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
      </div>
    </div>

    <p>&copy; 2024 DreamTrails. All rights reserved. | Privacy Policy | Terms of Service</p>
  </footer>

  <script>
    // Slideshow functionality
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }

    // Auto slide change every 5 seconds
    let slideInterval = setInterval(() => plusSlides(1), 5000);

    // Pause on hover
    const slideshowContainer = document.querySelector('.slideshow-container');
    slideshowContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
    slideshowContainer.addEventListener('mouseleave', () => {
      slideInterval = setInterval(() => plusSlides(1), 5000);
    });

    // Razorpay payment integration
    document.getElementById("pay-btn").addEventListener("click", function (e) {
      var options = {
        key: "rzp_test_VU7G23ElHpKfH3", // Replace with your Razorpay key
        amount: 5000000, // ₹50,000 in paise
        currency: "INR",
        name: "DreamTrails",
        description: "Dubai City Tour - 3 Nights & 4 Days",
        image: "images/Screenshot_2024-12-20_223329__1_-removebg-preview.png",
        handler: function (response) {
          alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
          // You can redirect the user to a success page
          window.location.href = "payment-success.html";
        },
        prefill: {
          name: document.querySelector('.booking-form input[type="text"]').value,
          email: document.querySelector('.booking-form input[type="email"]').value,
          contact: document.querySelector('.booking-form input[type="tel"]').value
        },
        notes: {
          address: "DreamTrails Travel Agency",
        },
        theme: {
          color: "#4CAF50",
        },
      };

      var rzp = new Razorpay(options);
      rzp.open();
      e.preventDefault();
    });
  </script>
</body>
</html>