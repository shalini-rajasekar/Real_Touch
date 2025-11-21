<?php include __DIR__ . '/../includes/header.php'; ?>

<link rel="stylesheet" href="../assets/css/secured-loan.css">

<!-- ================= Split Hero Section ================= -->
<section class="loan-hero-split">
  <div class="hero-left">
    <div class="hero-content-wrapper">
      <h1>Secured Business Loan</h1>
      <p class="subheadline">Unlock the capital trapped in your assets. Get high-value financing with competitive rates to fuel your business expansion.</p>
      <div class="hero-btns">
        <a href="<?php echo $base_url; ?>contact.php" class="btn-primary-custom">Apply Now</a>
        <a href="#" class="btn-secondary-custom">Brochure</a>
      </div>
    </div>
  </div>
  <div class="hero-right" style="background-image: url('<?php echo $base_url; ?>assets/images/banner/banner2.png');">
    <!-- Image Background -->
  </div>
</section>

<!-- ================= Overview with Floating Cards ================= -->
<section class="product-overview-modern">
  <div class="container">
    <div class="overview-modern-grid">
      <!-- Visual Side -->
      <div class="overview-visual">
        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Business Meeting" class="main-overview-img">
        
        <!-- Floating Cards -->
        <div class="floating-stat-card top-right">
          <div class="stat-icon-box"><i class="fas fa-rupee-sign"></i></div>
          <div class="stat-text">
            <h4>₹5 Cr</h4>
            <span>Max Loan Amount</span>
          </div>
        </div>
        
        <div class="floating-stat-card bottom-left">
          <div class="stat-icon-box"><i class="fas fa-clock"></i></div>
          <div class="stat-text">
            <h4>48 Hrs</h4>
            <span>Quick Approval</span>
          </div>
        </div>
      </div>

      <!-- Text Side -->
      <div class="overview-text">
        <span class="text-primary fw-bold text-uppercase">Overview</span>
        <h2 class="mb-4">Empower Your Business Vision</h2>
        <p class="mb-4">
          Don't let capital shortage stall your growth. Our Secured Business Loan leverages your residential or commercial property 
          to provide you with high-value funds at lower interest rates.
        </p>
        <p>
          Whether you need to purchase new machinery, expand your workforce, or manage inventory, our tailored solutions 
          ensure your cash flow remains healthy while you grow.
        </p>
        <ul class="list-unstyled mt-4">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Loans up to ₹5 Crores</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Flexible tenure up to 15 years</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Simplified documentation</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ================= Zig-Zag Benefits ================= -->
<section class="benefits-zigzag">
  <div class="container">
    <div class="text-center mb-5">
      <h2>Why Choose Us?</h2>
      <p class="text-muted">Designed for the modern entrepreneur.</p>
    </div>

    <!-- Row 1 -->
    <div class="zigzag-row">
      <div class="zigzag-content">
        <div class="zigzag-icon"><i class="fas fa-percent"></i></div>
        <h3>Lower Interest Rates</h3>
        <p>Since your loan is backed by collateral, we offer some of the most competitive interest rates in the market, significantly reducing your monthly outflow.</p>
      </div>
      <div class="zigzag-image">
        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Low Interest">
      </div>
    </div>

    <!-- Row 2 (Reverse) -->
    <div class="zigzag-row reverse">
      <div class="zigzag-content">
        <div class="zigzag-icon"><i class="fas fa-calendar-alt"></i></div>
        <h3>Flexible Repayment</h3>
        <p>We understand business cycles. Choose a repayment tenure from 1 to 15 years that aligns with your projected cash flow and profitability.</p>
      </div>
      <div class="zigzag-image">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Flexible Repayment">
      </div>
    </div>

    <!-- Row 3 -->
    <div class="zigzag-row">
      <div class="zigzag-content">
        <div class="zigzag-icon"><i class="fas fa-rocket"></i></div>
        <h3>Speed & Transparency</h3>
        <p>No hidden charges, no complex jargon. Our digital-first process ensures your loan is approved and disbursed faster than traditional banks.</p>
      </div>
      <div class="zigzag-image">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speed">
      </div>
    </div>

  </div>
</section>

<!-- ================= Vertical Timeline Process ================= -->
<section class="process-timeline-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2>Simple 4-Step Process</h2>
      <p>From application to disbursal in record time.</p>
    </div>

    <div class="timeline-container">
      <!-- Step 1 -->
      <div class="timeline-item">
        <div class="timeline-dot">1</div>
        <div class="timeline-content">
          <h4>Online Application</h4>
          <p>Fill out a short form with your business details and loan requirement.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="timeline-item">
        <div class="timeline-dot">2</div>
        <div class="timeline-content">
          <h4>Document Upload</h4>
          <p>Upload basic KYC, financial documents, and property papers securely.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="timeline-item">
        <div class="timeline-dot">3</div>
        <div class="timeline-content">
          <h4>Verification & Valuation</h4>
          <p>Our team visits for a quick verification and property valuation.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="timeline-item">
        <div class="timeline-dot">4</div>
        <div class="timeline-content">
          <h4>Disbursal</h4>
          <p>Sign the agreement and get funds credited to your account instantly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= Eligibility & Documents (Compact) ================= -->
<section class="eligibility-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <h3>Eligibility Criteria</h3>
        <ul class="list-group list-group-flush mt-3">
          <li class="list-group-item bg-transparent"><i class="fas fa-check text-success me-2"></i> Business Vintage > 3 Years</li>
          <li class="list-group-item bg-transparent"><i class="fas fa-check text-success me-2"></i> Annual Turnover > ₹50 Lakhs</li>
          <li class="list-group-item bg-transparent"><i class="fas fa-check text-success me-2"></i> Profit making for last 2 years</li>
          <li class="list-group-item bg-transparent"><i class="fas fa-check text-success me-2"></i> CIBIL Score > 700</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>Required Documents</h3>
        <div class="accordion mt-3" id="docsAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                KYC Documents
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#docsAccordion">
              <div class="accordion-body">PAN, Aadhar, Voter ID of all directors/partners.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                Financials
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#docsAccordion">
              <div class="accordion-body">Last 3 years ITR, Audited Balance Sheet, P&L.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= Interest Table ================= -->
<section class="interest-section">
  <div class="container">
    <h2 class="text-center mb-5">Indicative Repayment Schedule</h2>
    <div class="table-responsive">
      <table class="table table-dark table-hover text-center">
        <thead>
          <tr>
            <th>Loan Amount</th>
            <th>Tenure</th>
            <th>Interest Rate</th>
            <th>EMI</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>₹ 10 Lakhs</td><td>5 Years</td><td>9.5%</td><td>₹ 21,002</td></tr>
          <tr><td>₹ 25 Lakhs</td><td>7 Years</td><td>9.5%</td><td>₹ 40,935</td></tr>
          <tr><td>₹ 50 Lakhs</td><td>10 Years</td><td>9.0%</td><td>₹ 63,338</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ================= Contact CTA Footer ================= -->
<section class="cta-footer">
  <div class="container">
    <h2>Ready to Scale Up?</h2>
    <p class="mb-4">Get a customized loan offer for your business today.</p>
    <a href="<?php echo $base_url; ?>contact.php" class="btn btn-light btn-lg rounded-pill px-5 fw-bold">Apply Now</a>
  </div>
</section>



<?php include '../includes/footer.php'; ?>
