<?php include __DIR__ . '/../includes/header.php'; ?>

<link rel="stylesheet" href="/Real_touch_Finance_19112025/assets/css/board-of-directors.css">

<!-- ===== HERO SECTION ===== -->
<section class="bod-hero">
  <div class="bod-hero-bg"></div>
  <div class="bod-hero-content animate-fade-in">
    <span class="bod-badge animate-slide-up">LEADERSHIP</span>
    <h1 class="animate-slide-up">Board of Directors</h1>
    <p class="animate-slide-up">Meet the visionary leaders steering Real Touch Finance towards excellence and sustainable growth</p>
  </div>
  <!-- <div class="bod-wave">
    <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z" fill="#fff"/>
    </svg>
  </div> -->
</section>

<!-- ===== INTRO SECTION ===== -->
<section class="bod-intro">
  <div class="bod-intro-wrapper">
    <div class="bod-intro-content animate-fade-in">
      <span class="bod-section-badge">GOVERNANCE</span>
      <h2>Excellence in Leadership</h2>
      <p>Our Board of Directors comprises distinguished professionals with extensive experience in finance, business management, and corporate governance. Their collective wisdom and strategic vision drive our mission to deliver exceptional financial services while maintaining the highest ethical standards.</p>
    </div>
  </div>
</section>

<!-- ===== DIRECTORS GRID ===== -->
<section class="bod-directors">
  <div class="bod-directors-wrapper">
    <div class="bod-directors-grid">
      
      <!-- Director 1 - Chairman -->
      <div class="bod-director-card animate-zoom-in" data-director="1">
        <div class="bod-card-inner">
          <div class="bod-card-front">
            <div class="bod-director-image">
              <img src="../assets/images/overview/men1.png" alt="Director">
              <div class="bod-image-overlay">
                <i class="fas fa-info-circle"></i>
                <span>Click for details</span>
              </div>
            </div>
            <div class="bod-director-info">
              <h3>Rajesh Kumar Sharma</h3>
              <span class="bod-role chairman">Chairman & Managing Director</span>
              <p class="bod-snippet">Visionary leader with 30+ years in banking</p>
              <button class="bod-view-btn" onclick="openDirectorModal(1)">
                View Full Profile <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Director 2 -->
      <div class="bod-director-card animate-zoom-in" data-director="2">
        <div class="bod-card-inner">
          <div class="bod-card-front">
            <div class="bod-director-image">
              <img src="../assets/images/overview/women1.png" alt="Director">
              <div class="bod-image-overlay">
                <i class="fas fa-info-circle"></i>
                <span>Click for details</span>
              </div>
            </div>
            <div class="bod-director-info">
              <h3>Priya Menon</h3>
              <span class="bod-role executive">Executive Director</span>
              <p class="bod-snippet">Expert in financial strategy & operations</p>
              <button class="bod-view-btn" onclick="openDirectorModal(2)">
                View Full Profile <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Director 3 -->
      <div class="bod-director-card animate-zoom-in" data-director="3">
        <div class="bod-card-inner">
          <div class="bod-card-front">
            <div class="bod-director-image">
              <img src="../assets/images/overview/men2.png" alt="Director">
              <div class="bod-image-overlay">
                <i class="fas fa-info-circle"></i>
                <span>Click for details</span>
              </div>
            </div>
            <div class="bod-director-info">
              <h3>Arun Patel</h3>
              <span class="bod-role independent">Independent Director</span>
              <p class="bod-snippet">Corporate governance & compliance specialist</p>
              <button class="bod-view-btn" onclick="openDirectorModal(3)">
                View Full Profile <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Director 4 -->
      <div class="bod-director-card animate-zoom-in" data-director="4">
        <div class="bod-card-inner">
          <div class="bod-card-front">
            <div class="bod-director-image">
              <img src="../assets/images/overview/women2.png" alt="Director">
              <div class="bod-image-overlay">
                <i class="fas fa-info-circle"></i>
                <span>Click for details</span>
              </div>
            </div>
            <div class="bod-director-info">
              <h3>Meera Iyer</h3>
              <span class="bod-role independent">Independent Director</span>
              <p class="bod-snippet">Technology & digital transformation leader</p>
              <button class="bod-view-btn" onclick="openDirectorModal(4)">
                View Full Profile <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Director 5 -->
      <div class="bod-director-card animate-zoom-in" data-director="5">
        <div class="bod-card-inner">
          <div class="bod-card-front">
            <div class="bod-director-image">
              <img src="../assets/images/overview/men1.png" alt="Director">
              <div class="bod-image-overlay">
                <i class="fas fa-info-circle"></i>
                <span>Click for details</span>
              </div>
            </div>
            <div class="bod-director-info">
              <h3>Vikram Reddy</h3>
              <span class="bod-role non-executive">Non-Executive Director</span>
              <p class="bod-snippet">Strategic planning & risk management expert</p>
              <button class="bod-view-btn" onclick="openDirectorModal(5)">
                View Full Profile <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Director 6 -->
      <div class="bod-director-card animate-zoom-in" data-director="6">
        <div class="bod-card-inner">
          <div class="bod-card-front">
            <div class="bod-director-image">
              <img src="../assets/images/overview/women1.png" alt="Director">
              <div class="bod-image-overlay">
                <i class="fas fa-info-circle"></i>
                <span>Click for details</span>
              </div>
            </div>
            <div class="bod-director-info">
              <h3>Anjali Deshmukh</h3>
              <span class="bod-role non-executive">Non-Executive Director</span>
              <p class="bod-snippet">Legal & regulatory affairs specialist</p>
              <button class="bod-view-btn" onclick="openDirectorModal(6)">
                View Full Profile <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== MODAL POPUP ===== -->
<div id="directorModal" class="bod-modal">
  <div class="bod-modal-overlay" onclick="closeDirectorModal()"></div>
  <div class="bod-modal-content">
    <button class="bod-modal-close" onclick="closeDirectorModal()">
      <i class="fas fa-times"></i>
    </button>
    <div class="bod-modal-body" id="modalBody">
      <!-- Content will be dynamically loaded -->
    </div>
  </div>
</div>

<!-- ===== JAVASCRIPT ===== -->
<script>
// Director data
const directorsData = {
  1: {
    name: 'Rajesh Kumar Sharma',
    role: 'Chairman & Managing Director',
    roleClass: 'chairman',
    image: '../assets/images/overview/men1.png',
    education: 'MBA (Finance) - IIM Ahmedabad, B.Com - Delhi University',
    experience: '30+ Years in Banking & Financial Services',
    expertise: ['Strategic Leadership', 'Corporate Finance', 'Mergers & Acquisitions', 'Risk Management'],
    background: 'Mr. Rajesh Kumar Sharma brings over three decades of rich experience in banking and financial services. He has held senior leadership positions at leading public and private sector banks. Under his visionary leadership, Real Touch Finance has grown exponentially while maintaining robust governance standards.',
    achievements: [
      'Led successful turnaround of two major financial institutions',
      'Pioneered digital transformation initiatives in NBFC sector',
      'Recognized as "Financial Leader of the Year" 2022',
      'Board member of multiple industry associations'
    ],
    committees: ['Executive Committee (Chairman)', 'Risk Management Committee', 'Nomination Committee']
  },
  2: {
    name: 'Priya Menon',
    role: 'Executive Director',
    roleClass: 'executive',
    image: '../assets/images/overview/women1.png',
    education: 'CA, MBA - XLRI Jamshedpur',
    experience: '25+ Years in Finance & Operations',
    expertise: ['Financial Planning', 'Operations Management', 'Treasury Operations', 'Regulatory Compliance'],
    background: 'Ms. Priya Menon is a seasoned finance professional with extensive experience in financial planning, operations, and regulatory compliance. She has been instrumental in streamlining operational processes and implementing best practices across the organization.',
    achievements: [
      'Implemented ISO 9001 quality management system',
      'Reduced operational costs by 20% through process optimization',
      'Successfully managed multiple RBI audits with zero non-compliance',
      'Led the implementation of advanced treasury management system'
    ],
    committees: ['Executive Committee', 'Audit Committee', 'IT Strategy Committee']
  },
  3: {
    name: 'Arun Patel',
    role: 'Independent Director',
    roleClass: 'independent',
    image: '../assets/images/overview/men2.png',
    education: 'CS, LLB - Mumbai University',
    experience: '28+ Years in Corporate Governance',
    expertise: ['Corporate Governance', 'Compliance', 'Legal Affairs', 'Board Advisory'],
    background: 'Mr. Arun Patel is a distinguished corporate governance expert and company secretary with vast experience in regulatory compliance and legal affairs. He serves on the boards of several leading corporations and brings invaluable expertise in governance matters.',
    achievements: [
      'Advisor to multiple Fortune 500 companies on governance matters',
      'Published author on corporate governance best practices',
      'Member of SEBI committee on investor protection',
      'Recipient of "Excellence in Governance" award 2023'
    ],
    committees: ['Audit Committee (Chairman)', 'Stakeholders Relationship Committee', 'Nomination Committee']
  },
  4: {
    name: 'Meera Iyer',
    role: 'Independent Director',
    roleClass: 'independent',
    image: '../assets/images/overview/women2.png',
    education: 'M.Tech (Computer Science) - IIT Bombay, MBA - Harvard Business School',
    experience: '22+ Years in Technology & Innovation',
    expertise: ['Digital Transformation', 'Fintech Innovation', 'Cybersecurity', 'IT Strategy'],
    background: 'Ms. Meera Iyer is a technology visionary with deep expertise in digital transformation and fintech innovation. She has led technology initiatives at leading tech companies and brings cutting-edge perspectives on leveraging technology for business growth.',
    achievements: [
      'Led digital transformation for Fortune 100 financial institutions',
      'Pioneer in AI and machine learning applications in finance',
      'Featured speaker at global fintech conferences',
      'Holds 5 patents in financial technology'
    ],
    committees: ['IT Strategy Committee (Chairperson)', 'Risk Management Committee', 'Innovation Advisory Board']
  },
  5: {
    name: 'Vikram Reddy',
    role: 'Non-Executive Director',
    roleClass: 'non-executive',
    image: '../assets/images/overview/men1.png',
    education: 'MBA (Finance) - ISB Hyderabad, B.E. (Mechanical) - NIT Trichy',
    experience: '26+ Years in Strategic Planning',
    expertise: ['Strategic Planning', 'Risk Management', 'Business Development', 'Portfolio Management'],
    background: 'Mr. Vikram Reddy brings rich experience in strategic planning and risk management from his tenure at leading financial institutions and consulting firms. His strategic insights have been crucial in navigating complex market conditions and identifying growth opportunities.',
    achievements: [
      'Developed award-winning risk management frameworks',
      'Managed investment portfolios worth over ₹10,000 crores',
      'Consultant to RBI on risk management guidelines',
      'Published numerous research papers on financial risk'
    ],
    committees: ['Risk Management Committee (Chairman)', 'Investment Committee', 'Asset-Liability Committee']
  },
  6: {
    name: 'Anjali Deshmukh',
    role: 'Non-Executive Director',
    roleClass: 'non-executive',
    image: '../assets/images/overview/women1.png',
    education: 'LLM - Oxford University, LLB - National Law School, Bangalore',
    experience: '24+ Years in Legal & Regulatory Affairs',
    expertise: ['Corporate Law', 'Regulatory Compliance', 'Contract Negotiation', 'Dispute Resolution'],
    background: 'Ms. Anjali Deshmukh is an eminent legal expert specializing in corporate law and regulatory affairs. She has advised numerous organizations on complex legal matters and has been instrumental in ensuring regulatory compliance and managing legal risks.',
    achievements: [
      'Successfully handled high-profile corporate legal matters',
      'Expert panel member for Ministry of Finance',
      'Contributed to drafting NBFC regulatory guidelines',
      'Recognized as one of India\'s top corporate lawyers'
    ],
    committees: ['Stakeholders Relationship Committee (Chairperson)', 'Audit Committee', 'Nomination Committee']
  }
};

function openDirectorModal(directorId) {
  const director = directorsData[directorId];
  const modal = document.getElementById('directorModal');
  const modalBody = document.getElementById('modalBody');
  
  // Build modal content
  let expertiseHTML = director.expertise.map(skill => `<span class="bod-skill-tag">${skill}</span>`).join('');
  let achievementsHTML = director.achievements.map(achievement => `<li><i class="fas fa-check-circle"></i>${achievement}</li>`).join('');
  let committeesHTML = director.committees.map(committee => `<li><i class="fas fa-users"></i>${committee}</li>`).join('');
  
  modalBody.innerHTML = `
    <div class="bod-modal-header">
      <div class="bod-modal-image">
        <img src="${director.image}" alt="${director.name}">
      </div>
      <div class="bod-modal-title">
        <h2>${director.name}</h2>
        <span class="bod-modal-role ${director.roleClass}">${director.role}</span>
      </div>
    </div>
    
    <div class="bod-modal-section">
      <h3><i class="fas fa-graduation-cap"></i> Education</h3>
      <p>${director.education}</p>
    </div>
    
    <div class="bod-modal-section">
      <h3><i class="fas fa-briefcase"></i> Experience</h3>
      <p>${director.experience}</p>
    </div>
    
    <div class="bod-modal-section">
      <h3><i class="fas fa-star"></i> Areas of Expertise</h3>
      <div class="bod-expertise-tags">
        ${expertiseHTML}
      </div>
    </div>
    
    <div class="bod-modal-section">
      <h3><i class="fas fa-user"></i> Professional Background</h3>
      <p>${director.background}</p>
    </div>
    
    <div class="bod-modal-section">
      <h3><i class="fas fa-trophy"></i> Key Achievements</h3>
      <ul class="bod-achievements-list">
        ${achievementsHTML}
      </ul>
    </div>
    
    <div class="bod-modal-section">
      <h3><i class="fas fa-sitemap"></i> Board Committees</h3>
      <ul class="bod-committees-list">
        ${committeesHTML}
      </ul>
    </div>
  `;
  
  // Show modal with animation
  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeDirectorModal() {
  const modal = document.getElementById('directorModal');
  modal.classList.remove('active');
  document.body.style.overflow = 'auto';
}

// Close modal on ESC key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeDirectorModal();
  }
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>