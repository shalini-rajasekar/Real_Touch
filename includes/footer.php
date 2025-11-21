<footer class="site-footer">
  <div class="footer-container">

    <!-- 1. Brand & Quick Links -->
    <div class="footer-col brand-col">
      <a href="<?php echo $basePath; ?>index.php" class="footer-logo">
        <img src="<?php echo $basePath; ?>assets/images/site_logo.png" alt="YourLogo"class="logo_site" width="140">
      </a>
      <p class="footer-tagline">Empowering Businesses to Grow with Confidence</p>

      <div class="footer-social">
        <a href="https://www.facebook.com/people/Real-Touch-Finance-Limited/100083566868664/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/customer_touch" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/company/27065606/admin/manage-admins/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/real_touch_finance_limited/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- 2. Services -->
    <div class="footer-col">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Business Valuation</a></li>
        <li><a href="#">Insurance Consulting</a></li>
        <li><a href="#">Budgeting & Forecasting</a></li>
        <li><a href="<?php echo $basePath; ?>pages/emi-calculator.php">Loan EMI Calculator</a></li>
        <li><a href="#">Data Migration Insurance</a></li>
      </ul>
    </div>

    <!-- 3. Company -->
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="<?php echo $basePath; ?>about.php">About Us</a></li>
        <li><a href="<?php echo $basePath; ?>career.php">Careers</a></li>
        <li><a href="<?php echo $basePath; ?>pages/investor-info.php">Investor Info</a></li>
        <li><a href="<?php echo $basePath; ?>news-events.php">News & Events</a></li>
        <li><a href="<?php echo $basePath; ?>contact.php">Contact Us</a></li>
      </ul>
    </div>

    <!-- 4. Branches (mini-map style) -->
    <div class="footer-col branch-col">
      <h4>Our Branches</h4>
      <ul class="branch-list">
        <li><span class="dot red"></span> Chennai</li>
        <li><span class="dot yellow"></span> Kanchipuram</li>
        <li><span class="dot blue"></span> Thiruvallur</li>
        <li><span class="dot green"></span> Vandavasi</li>
      </ul>
    </div>

    <!-- 5. Newsletter -->
    <div class="footer-col newsletter-col">
      <h4>Stay Updated</h4>
      <p>Get the latest finance tips straight to your inbox.</p>
      <form class="newsletter-form" onsubmit="event.preventDefault();">
        <input type="email" placeholder="Your email address" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <div class="footer-container">
      <p>&copy; <span id="year"></span> Real Touch Finance. All Rights Reserved. Powered by MBW</p>
      <div class="footer-legal">
        <a href="#">Privacy Policy</a> |
        <a href="#">Terms of Service</a> |
        <a href="#">Cookie Policy</a>
      </div>
    </div>
  </div>


  <div class="social-floating-bar">
    <a href="https://www.facebook.com/people/Real-Touch-Finance-Limited/100083566868664/" class="s-icon fb"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/real_touch_finance_limited/" class="s-icon ig"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://www.linkedin.com/company/27065606/admin/manage-admins/" class="s-icon li"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#" class="s-icon yt"><i class="fa-brands fa-youtube"></i></a>
    <a href="#" class="s-icon wa"><i class="fa-brands fa-whatsapp"></i></a>
</div>

</footer>

<!-- Scripts -->
<script src="<?php echo $basePath; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $basePath; ?>assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Font Awesome (for social icons) -->
<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

<script>
  // Auto-update year
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>