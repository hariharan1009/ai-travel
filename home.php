<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DreamTrails - Home</title>


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rolling+Time:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">
  
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/fc64ebb6dd.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  
</head>
<body>
  <!-- Video Background -->
  <video class="video-bg" autoplay muted loop>
    <source src="Incredible India 4k - The Real India Revealed in 14 Minutes(4K_HD).mov" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Overlay for enhancing readability -->
  <div class="video-overlay"></div>

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

 <!-- Main Content -->
 <div class="main-content">
  <h1 class="sprayed-font welcome-text">Welcome to</h1>
  <h1 class="sprayed-font sf dream-text">DreamTrails</h1>

  <p>Embark on unforgettable journeys with DreamTrails. Explore breathtaking destinations, embrace unique cultures, and create memories that last a lifetime.</p>
  <a href="#enquire" class="enquire-btn">Enquire Now</a>
</div>


<!-- Packages Section -->
<section class="packages" id="packages">
  <h2>Our Trending Packages</h2>
  <div class="package-cards">

    <div class="package-card" onclick="location.href='dubai.php';" style="cursor: pointer;">
      <img src="images/222685.jpg" alt="Dubai City" class="package-image">
      <h3>Dubai City Tour</h3>
      <div class="icon-text">
        <i class="fas fa-users"></i>
        <span>2 Persons</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-clock"></i>
        <span>3 Nights & 4 Days</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-map-marker-alt"></i>
        <span>Dubai, United Arab Emirates</span>
      </div>
      <p class="price">₹50,000</p>
    </div>

    <div class="package-card" onclick="location.href='maldives.php';" style="cursor: pointer;">
      <img src="images/wp8742422-maldives-hd-sunset-wallpapers.jpg" alt="Maldives" class="package-image">
      <h3>Maldives Getaway</h3>
      <div class="icon-text">
        <i class="fas fa-users"></i>
        <span>4 Persons</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-clock"></i>
        <span>4 Nights & 4 Days</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-map-marker-alt"></i>
        <span>Maldives, Male</span>
      </div>
      <p class="price">₹70,000</p>
    </div>

    <div class="package-card" onclick="location.href='switzerland.php';" style="cursor: pointer;">
      <img src="images/290808.jpg" alt="Switzerland" class="package-image">
      <h3>Best of Switzerland</h3>
      <div class="icon-text">
        <i class="fas fa-users"></i>
        <span>2 Persons</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-clock"></i>
        <span>3 Nights & 4 Days</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-map-marker-alt"></i>
        <span>Switzerland, Zurich</span>
      </div>
      <p class="price">₹80,000</p>
    </div>

    <div class="package-card" onclick="location.href='#';" style="cursor: pointer;">
      <img src="images/5449522.jpg" alt="Manali" class="package-image">
      <h3>Manali Tour</h3>
      <div class="icon-text">
        <i class="fas fa-users"></i>
        <span>2 Persons</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-clock"></i>
        <span>3 Nights & 4 Days</span>
      </div>
      <div class="icon-text">
        <i class="fas fa-map-marker-alt"></i>
        <span>Manali, India</span>
      </div>
      <p class="price">₹35,000</p>
    </div>

  </div>
  <a href="#enquire" class="enquire-btn">Know More</a>
</section>




  <!-- popular destination Section -->
  <section class="popular-destinations" id="popular-destinations">
    <h2>Popular Destinations</h2>
    <div class="destination-container">
      <button class="arrow left-arrow">&#8249;</button>
      <div class="destination-photos">
        <div class="destination">
          <img src="images/469415 (2).jpg" alt="Paris">
          <p class="destination-title">Paris</p>
          <p class="destination-description">The City of Lights awaits you with its romantic charm, iconic landmarks, and exquisite cuisine.</p>
        </div>
        <div class="destination">
          <img src="images/964973 (1).jpg" alt="Maldives">
          <p class="destination-title">Maldives</p>
          <p class="destination-description">Experience the turquoise waters and pristine beaches of this tropical paradise.</p>
        </div>
        <div class="destination">
          <img src="images/957952 (1).jpg" alt="Kyoto">
          <p class="destination-title">Kyoto</p>
          <p class="destination-description">Immerse yourself in Japan's cultural heart, known for its temples, gardens, and traditional tea houses.</p>
        </div>
        <div class="destination">
          <img src="images/973496 (1).jpg" alt="Rome">
          <p class="destination-title">Rome</p>
          <p class="destination-description">Discover the Eternal City, brimming with history, art, and architectural wonders.</p>
        </div>
        <div class="destination">
          <img src="images/london.webp" alt="London">
          <p class="destination-title">London</p>
          <p class="destination-description">A vibrant city with rich history, modern attractions, and world-class museums.</p>
        </div>
        <div class="destination">
          <img src="images/tokyo.png" alt="Tokyo">
          <p class="destination-title">Tokyo</p>
          <p class="destination-description">A bustling metropolis blending traditional culture with cutting-edge innovation.</p>
        </div>
        <div class="destination">
          <img src="images/newyorl (1).jpg" alt="New York">
          <p class="destination-title">New York</p>
          <p class="destination-description">The city that never sleeps, offering iconic sights and endless adventures.</p>
        </div>
        <div class="destination">
          <img src="images/cape.jpg" alt="Cape Town">
          <p class="destination-title">Cape Town</p>
          <p class="destination-description">A stunning coastal city known for its beaches, Table Mountain, and vibrant culture.</p>
        </div>
      </div>
      <button class="arrow right-arrow">&#8250;</button>
    </div>
  </section>
  
  
  
  
  <!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
  <h2>What Our Clients Say</h2>
  <div class="testimonial-cards">
    <!-- Testimonial 1 -->
    <div class="testimonial-card">
      <img src="images/emma.webp" alt="Testimonial 1" class="testimonial-image">
      <p>"DreamTrails made my dream vacation a reality! The team was incredibly supportive and professional throughout."</p>
      <h4>- Emma Watson</h4>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="testimonial-card">
      <img src="images/vijay.avif" alt="Testimonial 2" class="testimonial-image">
      <p>"An unforgettable experience! The attention to detail in planning and execution was commendable."</p>
      <h4>- Thalapathy Vijay</h4>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="testimonial-card">
      <img src="images/priyanka.jpg" alt="Testimonial 3" class="testimonial-image">
      <p>"Best travel agency ever! They tailored everything to my preferences and ensured a smooth journey."</p>
      <h4>- Priyanka Chopra</h4>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <!-- Testimonial 4 -->
    <div class="testimonial-card">
      <img src="images/will.webp" alt="Testimonial 4" class="testimonial-image">
      <p>"I’ve traveled with many agencies, but DreamTrails stood out with their personalized service and exceptional planning."</p>
      <h4>- Will Smith</h4>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <!-- Testimonial 5 -->
    <div class="testimonial-card">
      <img src="images/taylor.webp" alt="Testimonial 5" class="testimonial-image">
      <p>"DreamTrails made my honeymoon so magical! I’ll cherish the memories forever. Highly recommended!"</p>
      <h4>- Taylor Swift</h4>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <!-- Testimonial 6 -->
    <div class="testimonial-card">
      <img src="images/weeknd.jpg" alt="Testimonial 6" class="testimonial-image">
      <p>"A hassle-free and well-organized trip! DreamTrails is my go-to travel agency from now on."</p>
      <h4>- Weekend</h4>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>
  </div>
</section>


  

<!-- blog Section -->
<section class="blog">
  <h2 class="section-title">Travel Stories & Inspiring Guides</h2>
  <div class="blog-container">
    <article class="blog-card">
      <div class="blog-image">
        <img src="images/youtube_thumbnail_high.jpg" alt="Blog Title 1">
      </div>
      <div class="blog-content">
        <h3>10 Hidden Gems to Explore in Asia</h3>
        <p>Unearth some of Asia’s lesser-known yet awe-inspiring travel destinations that will take your breath away.</p>
        <a href="#" class="read-more-btn">Read Story ➜</a>
      </div>
    </article>

    <article class="blog-card">
      <div class="blog-image">
        <img src="images/ra.jpg" alt="Blog Title 2">
      </div>
      <div class="blog-content">
        <h3>How to Plan the Perfect Honeymoon</h3>
        <p>Discover tips and destinations to make your honeymoon unforgettable with this detailed guide.</p>
        <a href="#" class="read-more-btn">Read Story ➜</a>
      </div>
    </article>

    <article class="blog-card">
      <div class="blog-image">
        <img src="images/solo.jpg" alt="Blog Title 3">
      </div>
      <div class="blog-content">
        <h3>Solo Travel: Finding Yourself in the Journey</h3>
        <p>Dive into the transformative experience of traveling solo and connecting with the world.</p>
        <a href="#" class="read-more-btn">Read Story ➜</a>
      </div>
    </article>
    
  </div>
  <a href="#enquire" class="enquire-btn">View more Blogs</a>
</section>
<section class="accreditations" id="accreditations">
  <h2>Our Accreditations</h2>
  <div class="accreditation-container">
    <!-- Left Scroll Button -->
    <button class="scroll-button left" onclick="scrollLeft()">&#8592;</button>

    <!-- Scrollable Accreditation Photos -->
<div class="accreditation-photos">
  <div class="accreditation">
    <img src="images/iata.png" alt="IATA Accredited">
    <p class="accreditation-title">IATA Certified</p>
    <p class="accreditation-description">Officially authorized by the International Air Transport Association to ensure safe and secure travel services.</p>
  </div>
  <div class="accreditation">
    <img src="images/asta.png" alt="ASTA Member">
    <p class="accreditation-title">ASTA Member</p>
    <p class="accreditation-description">Proud member of the American Society of Travel Advisors, maintaining the highest standards of professionalism.</p>
  </div>
  <div class="accreditation">
    <img src="images/clia.jpg" alt="CLIA Accredited">
    <p class="accreditation-title">CLIA Accredited</p>
    <p class="accreditation-description">Certified by the Cruise Lines International Association for exceptional cruise planning services.</p>
  </div>
  <div class="accreditation">
    <img src="images/TAAI.jpg" alt="TAAI Member">
    <p class="accreditation-title">TAAI Member</p>
    <p class="accreditation-description">Trusted member of the Travel Agents Association of India, ensuring reliability and customer satisfaction.</p>
  </div>
  <div class="accreditation">
    <img src="images/unwto.png" alt="UNWTO Partner">
    <p class="accreditation-title">UNWTO Partner</p>
    <p class="accreditation-description">Recognized by the United Nations World Tourism Organization for sustainable tourism practices.</p>
  </div>
  <div class="accreditation">
    <img src="images/visitbritain.png" alt="Visit Britain Partner">
    <p class="accreditation-title">Visit Britain</p>
    <p class="accreditation-description">Partnered with Visit Britain to promote enchanting travel experiences in the United Kingdom.</p>
  </div>
  <div class="accreditation">
    <img src="images/dubai-tourism.png" alt="Dubai Tourism Partner">
    <p class="accreditation-title">Dubai Tourism</p>
    <p class="accreditation-description">Certified by Dubai Tourism to showcase the dynamic culture and luxury of Dubai.</p>
  </div>
  <div class="accreditation">
    <img src="images/central-europe.png" alt="Discover Central Europe">
    <p class="accreditation-title">Discover Central Europe</p>
    <p class="accreditation-description">Partnered with Discover Central Europe to promote the charm and history of Europe.</p>
  </div>
  <div class="accreditation">
    <img src="images/jordan.png" alt="Jordan Partner">
    <p class="accreditation-title">Jordan</p>
    <p class="accreditation-description">Official partner for exploring the wonders and history of Jordan.</p>
  </div>
  <div class="accreditation">
    <img src="images/maldives.png" alt="Maldives Tourism">
    <p class="accreditation-title">Maldives Tourism</p>
    <p class="accreditation-description">Accredited to provide unparalleled travel experiences in the Maldives.</p>
  </div>
  <div class="accreditation">
    <img src="images/mauritius.png" alt="Mauritius Tourism">
    <p class="accreditation-title">Mauritius Tourism</p>
    <p class="accreditation-description">Certified to showcase the natural beauty and culture of Mauritius.</p>
  </div>
  <div class="accreditation">
    <img src="images/qatar.png" alt="Qatar Tourism">
    <p class="accreditation-title">Qatar Tourism</p>
    <p class="accreditation-description">Partnered with Qatar Tourism to highlight its rich heritage and modernity.</p>
  </div>
</div>


    <!-- Right Scroll Button -->
    <button class="scroll-button right" onclick="scrollRight()">&#8594;</button>
  </div>
</section>


 <!-- Contact Section -->
 <section class="contact" id="contact">
  <div class="contact-container">
    <div class="contact-info">
      <h2>Contact Us</h2>
      <p><strong>Phone:</strong> +91 12345 67890</p>
      <p><strong>Email:</strong> travelagency@example.com</p>
      <p><strong>WhatsApp:</strong> +91 98765 43210</p>
    </div>
    <form action="/submit" method="POST" class="contact-form">
      <input type="text" id="name" name="name" placeholder="Name" required>
      <input type="text" id="city" name="city" placeholder="City of Residence" required>
      <input type="email" id="email" name="email" placeholder="Email" required>
      <input type="tel" id="phone" name="phone" placeholder="Phone" required>
      <input type="tel" id="whatsapp" name="whatsapp" placeholder="WhatsApp Number" required>
      <input type="text" id="destination" name="destination" placeholder="Travel Destination" required>
      <!-- Input field for date -->
      <input type="date" id="date" name="date" onfocus="this.type='date'" onblur="if(this.value==='') this.type='text'" placeholder="Date of Journey" required>
      <input type="number" id="people" name="people" placeholder="Number of People" required>
      <select id="vacation-type" name="vacation-type" required>
        <option value="" disabled selected>Select Vacation Type</option>
        <option value="honeymoon">Honeymoon</option>
        <option value="friendstrip">Friend's Trip</option>
        <option value="corporate">Corporate Trip</option>
        <option value="family">Family Trip</option>
      </select>
      <button type="submit">Send</button>
    </form>
  </div>
</section>




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

</body>
<script>
  // Shared function to calculate max scroll and apply transform
  const scrollCarousel = (container, direction, scrollAmount) => {
    const parent = container.parentElement;
    const maxScroll = container.scrollWidth - parent.offsetWidth;

    // Get current scroll position (convert transform X to a number)
    const currentTransform = getComputedStyle(container).transform;
    const currentScrollPosition = currentTransform === 'none' ? 0 : Math.abs(parseInt(currentTransform.split(',')[4]));

    // Calculate the new scroll position
    const newScrollPosition = Math.max(0, Math.min(currentScrollPosition + direction * scrollAmount, maxScroll));
    container.style.transform = translateX(-${newScrollPosition});
  };

  // Destination photos carousel
  const photosContainer = document.querySelector('.destination-photos');
  const leftArrow = document.querySelector('.left-arrow');
  const rightArrow = document.querySelector('.right-arrow');
  const scrollAmountDest = 330; // Adjust scroll distance as needed

  rightArrow.addEventListener('click', () => scrollCarousel(photosContainer, 1, scrollAmountDest));
  leftArrow.addEventListener('click', () => scrollCarousel(photosContainer, -1, scrollAmountDest));

  // Accreditation photos carousel
  const accreditationContainer = document.querySelector('.accreditation-photos');
  const leftAccreditation = document.querySelector('.accreditation-left-arrow');
  const rightAccreditation = document.querySelector('.accreditation-right-arrow');
  const scrollAmountAcc = 300; // Adjust scroll distance for accreditation section

  rightAccreditation.addEventListener('click', () => scrollCarousel(accreditationContainer, 1, scrollAmountAcc));
  leftAccreditation.addEventListener('click', () => scrollCarousel(accreditationContainer, -1, scrollAmountAcc));



</script>
</html>