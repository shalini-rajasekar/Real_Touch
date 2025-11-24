<?php include __DIR__ . '/../includes/header.php'; ?>

<link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/gallery.css">

<!-- ===== HERO SECTION ===== -->
<section class="gallery-hero">
  <div class="gallery-hero-content">
    <div class="gallery-hero-left">
      <h1>Photo Gallery</h1>
      <p>Explore our journey through images - from corporate milestones to community initiatives and memorable moments.</p>
    </div>
  </div>
</section>

<!-- ===== FILTER SECTION ===== -->
<section class="gallery-filters">
  <div class="gallery-filters-wrapper">
    <div class="gallery-filter-tabs">
      <button class="gallery-filter-btn gallery-filter-active" data-filter="all">All Photos</button>
      <button class="gallery-filter-btn" data-filter="events">Events</button>
      <button class="gallery-filter-btn" data-filter="office">Office Life</button>
      <button class="gallery-filter-btn" data-filter="csr">CSR Activities</button>
      <button class="gallery-filter-btn" data-filter="awards">Awards & Recognition</button>
      <button class="gallery-filter-btn" data-filter="team">Team Building</button>
    </div>
  </div>
</section>

<!-- ===== GALLERY GRID SECTION ===== -->
<section class="gallery-main">
  <div class="gallery-main-wrapper">
    <div class="gallery-grid">
      <!-- Event Photos -->
      <div class="gallery-item" data-category="events">
        <img src="<?php echo $basePath; ?>assets/images/gallery/event-1.jpg" alt="Annual Summit 2024">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Annual Summit 2024</h3>
            <p>Financial Excellence Conference</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="events">
        <img src="<?php echo $basePath; ?>assets/images/gallery/event-2.jpg" alt="Branch Opening">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>New Branch Opening</h3>
            <p>Trichy Branch Inauguration</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="events">
        <img src="<?php echo $basePath; ?>assets/images/gallery/event-3.jpg" alt="Customer Meet">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Customer Appreciation Meet</h3>
            <p>Celebrating Our Valued Customers</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <!-- Office Life Photos -->
      <div class="gallery-item" data-category="office">
        <img src="<?php echo $basePath; ?>assets/images/gallery/office-1.jpg" alt="Modern Office">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Our Modern Workspace</h3>
            <p>Chennai Head Office</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="office">
        <img src="<?php echo $basePath; ?>assets/images/gallery/office-2.jpg" alt="Team Workspace">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Collaborative Work Environment</h3>
            <p>Innovation Hub</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="office">
        <img src="<?php echo $basePath; ?>assets/images/gallery/office-3.jpg" alt="Meeting Room">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Executive Meeting Room</h3>
            <p>Strategy Sessions</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <!-- CSR Photos -->
      <div class="gallery-item" data-category="csr">
        <img src="<?php echo $basePath; ?>assets/images/gallery/csr-1.jpg" alt="Financial Literacy">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Financial Literacy Program</h3>
            <p>Empowering Communities</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="csr">
        <img src="<?php echo $basePath; ?>assets/images/gallery/csr-2.jpg" alt="School Visit">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>School Donation Drive</h3>
            <p>Supporting Education</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="csr">
        <img src="<?php echo $basePath; ?>assets/images/gallery/csr-3.jpg" alt="Tree Plantation">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Green Initiative</h3>
            <p>Tree Plantation Drive</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <!-- Awards Photos -->
      <div class="gallery-item" data-category="awards">
        <img src="<?php echo $basePath; ?>assets/images/gallery/award-1.jpg" alt="Best NBFC Award">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Best NBFC Award 2024</h3>
            <p>Industry Recognition</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="awards">
        <img src="<?php echo $basePath; ?>assets/images/gallery/award-2.jpg" alt="Excellence Award">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Excellence in Customer Service</h3>
            <p>National Award</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="awards">
        <img src="<?php echo $basePath; ?>assets/images/gallery/award-3.jpg" alt="Growth Award">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Fastest Growing Finance Company</h3>
            <p>Business Excellence</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <!-- Team Building Photos -->
      <div class="gallery-item" data-category="team">
        <img src="<?php echo $basePath; ?>assets/images/gallery/team-1.jpg" alt="Team Outing">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Annual Team Outing</h3>
            <p>Building Stronger Bonds</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="team">
        <img src="<?php echo $basePath; ?>assets/images/gallery/team-2.jpg" alt="Team Celebration">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Festival Celebration</h3>
            <p>Diwali at Office</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="gallery-item" data-category="team">
        <img src="<?php echo $basePath; ?>assets/images/gallery/team-3.jpg" alt="Sports Day">
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <h3>Corporate Sports Day</h3>
            <p>Fitness & Fun</p>
            <button class="gallery-view-btn" onclick="openLightbox(this)"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CSS LIGHTBOX (Hidden by default) ===== -->
<div class="gallery-lightbox" id="galleryLightbox">
  <button class="gallery-close-btn" onclick="closeLightbox()">&times;</button>
  <div class="gallery-lightbox-content">
    <img id="lightboxImage" src="" alt="">
    <div class="gallery-lightbox-caption" id="lightboxCaption"></div>
  </div>
</div>

<script>
// CSS-only filter functionality using data attributes and CSS
const filterBtns = document.querySelectorAll('.gallery-filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

filterBtns.forEach(btn => {
  btn.addEventListener('click', function() {
    // Remove active class from all buttons
    filterBtns.forEach(b => b.classList.remove('gallery-filter-active'));
    // Add active class to clicked button
    this.classList.add('gallery-filter-active');
    
    const filterValue = this.getAttribute('data-filter');
    
    galleryItems.forEach(item => {
      if (filterValue === 'all') {
        item.style.display = 'block';
      } else {
        if (item.getAttribute('data-category') === filterValue) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      }
    });
  });
});

// Lightbox functionality
function openLightbox(button) {
  const galleryItem = button.closest('.gallery-item');
  const img = galleryItem.querySelector('img');
  const title = galleryItem.querySelector('h3').textContent;
  const subtitle = galleryItem.querySelector('p').textContent;
  
  document.getElementById('lightboxImage').src = img.src;
  document.getElementById('lightboxCaption').innerHTML = `<strong>${title}</strong><br>${subtitle}`;
  document.getElementById('galleryLightbox').classList.add('gallery-lightbox-active');
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  document.getElementById('galleryLightbox').classList.remove('gallery-lightbox-active');
  document.body.style.overflow = 'auto';
}

// Close lightbox with Escape key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeLightbox();
  }
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>