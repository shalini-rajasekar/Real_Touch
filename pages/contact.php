<?php include __DIR__ . '/../includes/header.php'; ?>

<link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/contact.css">

<!-- ===== HERO SECTION ===== -->
<section class="contact-hero">
  <div class="contact-hero-content">
    <div class="contact-hero-left">
      <h1>Get In Touch With Us</h1>
      <p>Have questions? We're here to help. Reach out to us through any of the channels below and our team will respond promptly.</p>
    </div>
  </div>
</section>

<!-- ===== CONTACT INFO CARDS ===== -->
<section class="contact-info">
  <div class="contact-info-wrapper">
    <div class="contact-info-grid">
      <div class="contact-info-card">
        <div class="contact-info-icon">
          <i class="fas fa-phone-alt"></i>
        </div>
        <h3>Call Us</h3>
        <p>Mon-Sat, 9:00 AM - 6:00 PM</p>
        <a href="tel:+919876543210" class="contact-info-link">+91 98765 43210</a>
        <a href="tel:+914412345678" class="contact-info-link">+91 44 1234 5678</a>
      </div>
      
      <div class="contact-info-card">
        <div class="contact-info-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <h3>Email Us</h3>
        <p>Get response within 24 hours</p>
        <a href="mailto:care@realtouchfinance.com" class="contact-info-link">care@realtouchfinance.com</a>
        <a href="mailto:support@realtouchfinance.com" class="contact-info-link">support@realtouchfinance.com</a>
      </div>
      
      <div class="contact-info-card">
        <div class="contact-info-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <h3>Visit Us</h3>
        <p>Head Office</p>
        <a href="#" class="contact-info-link">1st Street, Nandanam,<br>Chennai - 600035<br>Tamil Nadu, India</a>
      </div>
      
      <div class="contact-info-card">
        <div class="contact-info-icon">
          <i class="fas fa-clock"></i>
        </div>
        <h3>Working Hours</h3>
        <p>We're available</p>
        <div class="contact-info-link">Mon - Fri: 9:00 AM - 6:00 PM</div>
        <div class="contact-info-link">Saturday: 9:00 AM - 2:00 PM</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT FORM SECTION ===== -->
<section class="contact-form-section">
  <div class="contact-form-wrapper">
    <div class="contact-form-container">
      <div class="contact-form-left">
        <span class="contact-badge">SEND MESSAGE</span>
        <h2>Drop Us a Message</h2>
        <p>Fill out the form below and our team will get back to you within 24 hours.</p>
        
        <form class="contact-form" id="contactForm">
          <div class="contact-form-row">
            <div class="contact-form-group">
              <label for="fullName">Full Name *</label>
              <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
            </div>
            
            <div class="contact-form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
          </div>
          
          <div class="contact-form-row">
            <div class="contact-form-group">
              <label for="phone">Phone Number *</label>
              <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            
            <div class="contact-form-group">
              <label for="subject">Subject *</label>
              <select id="subject" name="subject" required>
                <option value="">Select a subject</option>
                <option value="loan-inquiry">Loan Inquiry</option>
                <option value="support">Customer Support</option>
                <option value="partnership">Partnership</option>
                <option value="careers">Careers</option>
                <option value="feedback">Feedback</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          
          <div class="contact-form-group">
            <label for="message">Your Message *</label>
            <textarea id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>
          </div>
          
          <button type="submit" class="contact-submit-btn">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>
      
      <div class="contact-form-right">
        <div class="contact-image-box">
          <img src="<?php echo $basePath; ?>assets/images/contact/contact-illustration.jpg" alt="Contact Us">
        </div>
        
        <div class="contact-social">
          <h3>Follow Us</h3>
          <p>Stay connected on social media</p>
          <div class="contact-social-links">
            <a href="https://www.facebook.com/people/Real-Touch-Finance-Limited/100083566868664/" class="contact-social-btn fb">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://x.com/customer_touch" class="contact-social-btn tw">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/company/27065606/admin/manage-admins/" class="contact-social-btn li">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/real_touch_finance_limited/" class="contact-social-btn ig">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== BRANCH LOCATIONS SECTION ===== -->
<section class="contact-branches">
  <div class="contact-branches-wrapper">
    <div class="contact-section-title">
      <span class="contact-badge">OUR LOCATIONS</span>
      <h2>Branch Offices</h2>
      <p>Visit any of our branches for personalized assistance</p>
    </div>
    
    <div class="contact-branches-grid">
      <div class="contact-branch-card">
        <div class="contact-branch-icon">
          <i class="fas fa-building"></i>
        </div>
        <h3>Chennai (Head Office)</h3>
        <p class="contact-branch-address">
          <i class="fas fa-map-marker-alt"></i>
          1st Street, Nandanam<br>
          Chennai - 600035
        </p>
        <p class="contact-branch-phone">
          <i class="fas fa-phone"></i>
          +91 98765 43210
        </p>
        <a href="#" class="contact-branch-btn">Get Directions</a>
      </div>
      
      <div class="contact-branch-card">
        <div class="contact-branch-icon">
          <i class="fas fa-building"></i>
        </div>
        <h3>Kanchipuram</h3>
        <p class="contact-branch-address">
          <i class="fas fa-map-marker-alt"></i>
          Market Street, Gandhi Nagar<br>
          Kanchipuram - 631501
        </p>
        <p class="contact-branch-phone">
          <i class="fas fa-phone"></i>
          +91 98765 43211
        </p>
        <a href="#" class="contact-branch-btn">Get Directions</a>
      </div>
      
      <div class="contact-branch-card">
        <div class="contact-branch-icon">
          <i class="fas fa-building"></i>
        </div>
        <h3>Thiruvallur</h3>
        <p class="contact-branch-address">
          <i class="fas fa-map-marker-alt"></i>
          Main Road, Bazaar Street<br>
          Thiruvallur - 602001
        </p>
        <p class="contact-branch-phone">
          <i class="fas fa-phone"></i>
          +91 98765 43212
        </p>
        <a href="#" class="contact-branch-btn">Get Directions</a>
      </div>
      
      <div class="contact-branch-card">
        <div class="contact-branch-icon">
          <i class="fas fa-building"></i>
        </div>
        <h3>Vandavasi</h3>
        <p class="contact-branch-address">
          <i class="fas fa-map-marker-alt"></i>
          Temple Street, Town Center<br>
          Vandavasi - 604408
        </p>
        <p class="contact-branch-phone">
          <i class="fas fa-phone"></i>
          +91 98765 43213
        </p>
        <a href="#" class="contact-branch-btn">Get Directions</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== MAP SECTION ===== -->
<section class="contact-map">
  <div class="contact-map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.8421045796273!2d80.24466931482192!3d13.043052990812906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267b5e2c79e5f%3A0x8f5e6d5a3c6d5d5e!2sNandanam%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1234567890123" 
      width="100%" 
      height="450" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<script>
// Form submission handler
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Get form data
  const formData = new FormData(this);
  const data = {};
  formData.forEach((value, key) => {
    data[key] = value;
  });
  
  // Show success message (you can replace this with actual form submission)
  alert('Thank you for contacting us! We will get back to you within 24 hours.');
  
  // Reset form
  this.reset();
  
  // In production, you would send this data to your backend:
  // fetch('/api/contact', {
  //   method: 'POST',
  //   headers: { 'Content-Type': 'application/json' },
  //   body: JSON.stringify(data)
  // });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>