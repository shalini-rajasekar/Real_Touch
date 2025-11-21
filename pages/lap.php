<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Link to LAP Specific CSS -->
<link rel="stylesheet" href="../assets/css/lap.css">

<!-- ================= HERO SECTION ================= -->
<section class="lap-hero">
    <div class="lap-hero-bg">
        <div class="gradient-overlay"></div>
        <!-- Abstract Shapes -->
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>
    
    <div class="container lap-hero-content">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 hero-text fade-up">
                <span class="hero-badge"><i class="fa-solid fa-house-circle-check"></i> Unlock Your Property's Value</span>
                <h1>Get Instant Funds with <br><span>Loan Against Property</span></h1>
                <p>Leverage your residential or commercial property to get high-value loans at low interest rates. Quick approval, flexible tenure, and maximum funding.</p>
                
                <div class="hero-btns">
                    <a href="#contact" class="cta-btn primary-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="#eligibility" class="cta-btn secondary-btn">Check Eligibility</a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <h4>₹5 Cr+</h4>
                        <p>Max Loan Amount</p>
                    </div>
                    <div class="stat-item">
                        <h4>72 Hrs</h4>
                        <p>Quick Disbursal</p>
                    </div>
                    <div class="stat-item">
                        <h4>15 Yrs</h4>
                        <p>Flexible Tenure</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-12 hero-image fade-in-right">
                <div class="image-wrapper">
                    <img src="../assets/images/lap-hero.png" alt="Loan Against Property" onerror="this.src='https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                    <div class="floating-card card-1">
                        <i class="fa-solid fa-percent"></i>
                        <div>
                            <span>Interest Starting</span>
                            <strong>8.50% p.a.</strong>
                        </div>
                    </div>
                    <div class="floating-card card-2">
                        <i class="fa-solid fa-check-double"></i>
                        <div>
                            <span>Approval</span>
                            <strong>Hassle-free</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= BENEFITS SECTION ================= -->
<section class="lap-benefits section-padding">
    <div class="container">
        <div class="section-header text-center fade-up">
            <span class="sub-title">KEY ADVANTAGES</span>
            <h2>Why Choose Our LAP?</h2>
            <p>Maximize the potential of your property with our feature-rich loan solutions.</p>
        </div>

        <div class="benefits-grid">
            <!-- Card 1 -->
            <div class="benefit-card fade-up" data-delay="100">
                <div class="icon-box">
                    <i class="fa-solid fa-sack-dollar"></i>
                </div>
                <h3>High Loan Amount</h3>
                <p>Get up to 75% of your property’s market value as a loan to meet your big financial goals.</p>
            </div>

            <!-- Card 2 -->
            <div class="benefit-card fade-up" data-delay="200">
                <div class="icon-box">
                    <i class="fa-solid fa-percent"></i>
                </div>
                <h3>Low Interest Rates</h3>
                <p>Enjoy competitive interest rates starting from just 8.50% p.a. with flexible repayment options.</p>
            </div>

            <!-- Card 3 -->
            <div class="benefit-card fade-up" data-delay="300">
                <div class="icon-box">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <h3>Long Tenure</h3>
                <p>Repay comfortably over a tenure of up to 15 years, reducing your monthly EMI burden.</p>
            </div>

            <!-- Card 4 -->
            <div class="benefit-card fade-up" data-delay="400">
                <div class="icon-box">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h3>Quick Processing</h3>
                <p>Experience a seamless digital process with minimal documentation and fast disbursal.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= ELIGIBILITY SECTION ================= -->
<section class="lap-eligibility section-padding" id="eligibility">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 fade-right">
                <div class="eligibility-img">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Eligibility">
                    <div class="exp-badge">
                        <h3>99%</h3>
                        <p>Approval Rate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-left">
                <div class="eligibility-wrapper">
                    <div class="eligibility-header mb-4">
                        <span class="sub-title">WHO CAN APPLY</span>
                        <h2>Eligibility Criteria</h2>
                        <p>Simple and transparent eligibility requirements for both salaried and self-employed individuals.</p>
                    </div>

                    <div class="eligibility-tabs-modern">
                        <button class="tab-btn-modern active" data-tab="salaried">
                            <i class="fa-solid fa-user-tie"></i> Salaried
                        </button>
                        <button class="tab-btn-modern" data-tab="self-employed">
                            <i class="fa-solid fa-briefcase"></i> Self-Employed
                        </button>
                    </div>

                    <div class="tab-content active" id="salaried">
                        <div class="criteria-grid">
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-cake-candles"></i></div>
                                <div class="c-text">
                                    <strong>Age Range</strong>
                                    <span>23 to 60 years</span>
                                </div>
                            </div>
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-wallet"></i></div>
                                <div class="c-text">
                                    <strong>Min Income</strong>
                                    <span>₹25,000 / month</span>
                                </div>
                            </div>
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-briefcase"></i></div>
                                <div class="c-text">
                                    <strong>Experience</strong>
                                    <span>Min 3 years total</span>
                                </div>
                            </div>
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-building"></i></div>
                                <div class="c-text">
                                    <strong>Property Type</strong>
                                    <span>Residential / Commercial</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="self-employed">
                        <div class="criteria-grid">
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-cake-candles"></i></div>
                                <div class="c-text">
                                    <strong>Age Range</strong>
                                    <span>25 to 70 years</span>
                                </div>
                            </div>
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-chart-line"></i></div>
                                <div class="c-text">
                                    <strong>Business Vintage</strong>
                                    <span>Min 3 years continuity</span>
                                </div>
                            </div>
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-file-invoice"></i></div>
                                <div class="c-text">
                                    <strong>ITR Filing</strong>
                                    <span>Filed for last 2 years</span>
                                </div>
                            </div>
                            <div class="criteria-item">
                                <div class="c-icon"><i class="fa-solid fa-city"></i></div>
                                <div class="c-text">
                                    <strong>Property Type</strong>
                                    <span>Resi / Comm / Industrial</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="cta-btn primary-btn mt-4">Check Your Eligibility</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= DOCUMENTS REQUIRED ================= -->
<section class="lap-documents section-padding bg-light">
    <div class="container">
        <div class="section-header text-center fade-up">
            <span class="sub-title">PAPERWORK</span>
            <h2>Documents Required</h2>
            <p>Keep these documents handy for a smooth application process.</p>
        </div>

        <div class="docs-grid">
            <!-- KYC -->
            <div class="doc-card fade-up">
                <div class="doc-icon"><i class="fa-solid fa-id-card"></i></div>
                <h4>KYC Documents</h4>
                <ul>
                    <li>Aadhar Card / PAN Card</li>
                    <li>Voter ID / Passport</li>
                    <li>Current Address Proof</li>
                </ul>
            </div>

            <!-- Income -->
            <div class="doc-card fade-up" data-delay="100">
                <div class="doc-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                <h4>Income Proof</h4>
                <ul>
                    <li>Last 3 Months Salary Slips</li>
                    <li>Last 6 Months Bank Statement</li>
                    <li>Form 16 / ITR (2 Years)</li>
                </ul>
            </div>

            <!-- Property -->
            <div class="doc-card fade-up" data-delay="200">
                <div class="doc-icon"><i class="fa-solid fa-house-chimney"></i></div>
                <h4>Property Documents</h4>
                <ul>
                    <li>Title Deeds (Chain of Documents)</li>
                    <li>Latest Property Tax Receipt</li>
                    <li>Approved Building Plan</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ================= PROCESS STEPS ================= -->
<section class="lap-process section-padding">
    <div class="container">
        <div class="section-header text-center fade-up">
            <span class="sub-title">SIMPLE WORKFLOW</span>
            <h2>How It Works</h2>
        </div>

        <div class="process-steps">
            <div class="step-item fade-up">
                <div class="step-number">01</div>
                <div class="step-icon"><i class="fa-solid fa-file-pen"></i></div>
                <h4>Application</h4>
                <p>Fill out the online form with basic details.</p>
            </div>
            <div class="step-line"></div>
            <div class="step-item fade-up" data-delay="100">
                <div class="step-number">02</div>
                <div class="step-icon"><i class="fa-solid fa-magnifying-glass-location"></i></div>
                <h4>Valuation</h4>
                <p>Our experts evaluate your property value.</p>
            </div>
            <div class="step-line"></div>
            <div class="step-item fade-up" data-delay="200">
                <div class="step-number">03</div>
                <div class="step-icon"><i class="fa-solid fa-file-signature"></i></div>
                <h4>Approval</h4>
                <p>Loan sanctioned after document verification.</p>
            </div>
            <div class="step-line"></div>
            <div class="step-item fade-up" data-delay="300">
                <div class="step-number">04</div>
                <div class="step-icon"><i class="fa-solid fa-money-bill-transfer"></i></div>
                <h4>Disbursal</h4>
                <p>Funds credited directly to your account.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= INTEREST RATES TABLE ================= -->
<section class="lap-rates section-padding bg-dark-blue">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-white fade-right">
                <span class="sub-title text-blue">TRANSPARENCY</span>
                <h2 class="text-white">Interest Rates & Charges</h2>
                <p class="text-light-gray">We believe in complete transparency. No hidden charges, no surprises. Here is a snapshot of our standard charges.</p>
                <a href="#contact" class="cta-btn primary-btn mt-3">Enquire Now</a>
            </div>
            <div class="col-lg-7 fade-left">
                <div class="rates-table-wrapper">
                    <table class="rates-table">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Charges / Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Interest Rate</td>
                                <td>8.50% - 12.00% p.a.</td>
                            </tr>
                            <tr>
                                <td>Processing Fee</td>
                                <td>Up to 1% of Loan Amount</td>
                            </tr>
                            <tr>
                                <td>Loan Tenure</td>
                                <td>Up to 15 Years</td>
                            </tr>
                            <tr>
                                <td>Pre-payment Charges</td>
                                <td>Nil (for Floating Rate)</td>
                            </tr>
                            <tr>
                                <td>LTV Ratio</td>
                                <td>Up to 75% of Property Value</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FAQ SECTION ================= -->
<section class="lap-faq section-padding">
    <div class="container">
        <div class="section-header text-center fade-up">
            <span class="sub-title">GOT QUESTIONS?</span>
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-wrapper max-w-800 mx-auto">
            <div class="faq-item active fade-up">
                <div class="faq-question">
                    <span>What properties are accepted for LAP?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We accept residential (self-occupied or rented), commercial (offices, shops), and industrial properties as collateral for the loan.</p>
                </div>
            </div>

            <div class="faq-item fade-up" data-delay="100">
                <div class="faq-question">
                    <span>How much loan can I get against my property?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>You can avail a loan of up to 75% of the market value of your property, depending on your eligibility and property evaluation.</p>
                </div>
            </div>

            <div class="faq-item fade-up" data-delay="200">
                <div class="faq-question">
                    <span>Can I prepay my loan?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can prepay your loan. For floating rate loans given to individuals, there are usually no foreclosure charges.</p>
                </div>
            </div>
            
             <div class="faq-item fade-up" data-delay="300">
                <div class="faq-question">
                    <span>What is the processing time?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Once all documents are submitted, we aim to disburse the loan within 72 hours, subject to verification and property valuation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= CTA BANNER ================= -->
<section class="lap-cta-banner">
    <div class="container">
        <div class="cta-box fade-up">
            <div class="cta-content">
                <h2>Ready to Unlock Your Property's Value?</h2>
                <p>Get the best deal on Loan Against Property with Real Touch Finance.</p>
            </div>
            <div class="cta-action">
                <a href="#contact" class="cta-btn white-btn">Get Started Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Simple Script for Tabs and Accordion -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tabs
    const tabBtns = document.querySelectorAll('.tab-btn-modern');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            btn.classList.add('active');
            document.getElementById(btn.dataset.tab).classList.add('active');
        });
    });

    // FAQ
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.querySelector('.faq-question').addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
