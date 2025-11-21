<?php include __DIR__ . '/../includes/header.php'; ?>

<link rel="stylesheet" href="../assets/css/emi-calculator.css">

<!-- ===== HERO SECTION WITH CALCULATOR ===== -->
<section class="emi-hero">
  <div class="emi-hero-background">
    <div class="emi-animated-bg">
      <div class="emi-blob emi-blob-1"></div>
      <div class="emi-blob emi-blob-2"></div>
      <div class="emi-blob emi-blob-3"></div>
    </div>
  </div>
  
  <div class="emi-hero-container">
    <div class="emi-hero-header">
      <span class="emi-badge">
        <i class="fas fa-calculator"></i>
        Smart Financial Tool
      </span>
      <h1>EMI Calculator</h1>
      <p>Calculate your monthly loan installments instantly. Plan your finances better with our easy-to-use EMI calculator.</p>
    </div>
    
    <div class="emi-calculator-card">
      <div class="emi-calc-tabs">
        <button class="emi-tab-btn active" data-tab="home-loan" onclick="switchEMITab('home-loan')">
          <i class="fas fa-home"></i>
          <span>Home Loan</span>
        </button>
        <button class="emi-tab-btn" data-tab="personal-loan" onclick="switchEMITab('personal-loan')">
          <i class="fas fa-user"></i>
          <span>Personal Loan</span>
        </button>
        <button class="emi-tab-btn" data-tab="car-loan" onclick="switchEMITab('car-loan')">
          <i class="fas fa-car"></i>
          <span>Car Loan</span>
        </button>
        <button class="emi-tab-btn" data-tab="business-loan" onclick="switchEMITab('business-loan')">
          <i class="fas fa-briefcase"></i>
          <span>Business Loan</span>
        </button>
      </div>
      
      <div class="emi-calc-body">
        <div class="emi-calc-inputs">
          <div class="emi-input-group">
            <label for="loanAmount">
              <i class="fas fa-rupee-sign"></i>
              Loan Amount
            </label>
            <div class="emi-input-wrapper">
              <input type="range" id="loanAmountRange" min="100000" max="10000000" step="50000" value="2500000" oninput="updateEMIInput('loanAmount')">
              <input type="number" id="loanAmount" value="2500000" min="100000" max="10000000" step="50000" oninput="updateEMIRange('loanAmount')">
            </div>
            <span class="emi-input-label">₹<span id="loanAmountDisplay">25,00,000</span></span>
          </div>
          
          <div class="emi-input-group">
            <label for="interestRate">
              <i class="fas fa-percent"></i>
              Interest Rate (% p.a.)
            </label>
            <div class="emi-input-wrapper">
              <input type="range" id="interestRateRange" min="5" max="20" step="0.1" value="8.5" oninput="updateEMIInput('interestRate')">
              <input type="number" id="interestRate" value="8.5" min="5" max="20" step="0.1" oninput="updateEMIRange('interestRate')">
            </div>
            <span class="emi-input-label"><span id="interestRateDisplay">8.5</span>%</span>
          </div>
          
          <div class="emi-input-group">
            <label for="loanTenure">
              <i class="fas fa-calendar-alt"></i>
              Loan Tenure
            </label>
            <div class="emi-input-wrapper">
              <input type="range" id="loanTenureRange" min="12" max="360" step="12" value="240" oninput="updateEMIInput('loanTenure')">
              <input type="number" id="loanTenure" value="240" min="12" max="360" step="12" oninput="updateEMIRange('loanTenure')">
            </div>
            <span class="emi-input-label"><span id="loanTenureDisplay">20</span> Years</span>
          </div>
          
          <button class="emi-calculate-btn" onclick="calculateEMI()">
            <i class="fas fa-calculator"></i>
            Calculate EMI
          </button>
        </div>
        
        <div class="emi-calc-results" id="emiResults">
          <div class="emi-result-header">
            <h3>Your Monthly EMI</h3>
            <div class="emi-amount" id="monthlyEMI">₹21,477</div>
          </div>
          
          <div class="emi-breakdown">
            <div class="emi-breakdown-item">
              <span class="emi-breakdown-label">Principal Amount</span>
              <span class="emi-breakdown-value" id="principalAmount">₹25,00,000</span>
            </div>
            <div class="emi-breakdown-item">
              <span class="emi-breakdown-label">Total Interest</span>
              <span class="emi-breakdown-value" id="totalInterest">₹26,54,480</span>
            </div>
            <div class="emi-breakdown-item">
              <span class="emi-breakdown-label">Total Amount</span>
              <span class="emi-breakdown-value" id="totalAmount">₹51,54,480</span>
            </div>
          </div>
          
          <div class="emi-chart-container">
            <canvas id="emiChart"></canvas>
          </div>
          
          <div class="emi-result-legend">
            <div class="emi-legend-item">
              <span class="emi-legend-dot" style="background: #0067da;"></span>
              <span>Principal (48.5%)</span>
            </div>
            <div class="emi-legend-item">
              <span class="emi-legend-dot" style="background: #29b9ed;"></span>
              <span>Interest (51.5%)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== LOAN COMPARISON SECTION ===== -->
<section class="emi-comparison">
  <div class="emi-container">
    <div class="emi-section-header">
      <span class="emi-tag">LOAN TYPES</span>
      <h2>Compare Different Loan Types</h2>
      <p>Understand the EMI differences across various loan products</p>
    </div>
    
    <div class="emi-comparison-grid">
      <div class="emi-loan-card">
        <div class="emi-loan-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
          <i class="fas fa-home"></i>
        </div>
        <h3>Home Loan</h3>
        <p class="emi-loan-rate">From 8.5% p.a.</p>
        <ul class="emi-loan-features">
          <li><i class="fas fa-check"></i> Tenure up to 30 years</li>
          <li><i class="fas fa-check"></i> Loan up to ₹10 Cr</li>
          <li><i class="fas fa-check"></i> Tax benefits available</li>
          <li><i class="fas fa-check"></i> Low processing fees</li>
        </ul>
        <button class="emi-loan-btn" onclick="switchEMITab('home-loan')">
          Calculate Now
        </button>
      </div>
      
      <div class="emi-loan-card">
        <div class="emi-loan-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
          <i class="fas fa-user"></i>
        </div>
        <h3>Personal Loan</h3>
        <p class="emi-loan-rate">From 10.5% p.a.</p>
        <ul class="emi-loan-features">
          <li><i class="fas fa-check"></i> Tenure up to 5 years</li>
          <li><i class="fas fa-check"></i> Loan up to ₹50 Lakhs</li>
          <li><i class="fas fa-check"></i> Instant approval</li>
          <li><i class="fas fa-check"></i> Minimal documentation</li>
        </ul>
        <button class="emi-loan-btn" onclick="switchEMITab('personal-loan')">
          Calculate Now
        </button>
      </div>
      
      <div class="emi-loan-card">
        <div class="emi-loan-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
          <i class="fas fa-car"></i>
        </div>
        <h3>Car Loan</h3>
        <p class="emi-loan-rate">From 9.0% p.a.</p>
        <ul class="emi-loan-features">
          <li><i class="fas fa-check"></i> Tenure up to 7 years</li>
          <li><i class="fas fa-check"></i> Loan up to ₹1 Cr</li>
          <li><i class="fas fa-check"></i> 90% on-road price</li>
          <li><i class="fas fa-check"></i> Quick disbursal</li>
        </ul>
        <button class="emi-loan-btn" onclick="switchEMITab('car-loan')">
          Calculate Now
        </button>
      </div>
      
      <div class="emi-loan-card">
        <div class="emi-loan-icon" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
          <i class="fas fa-briefcase"></i>
        </div>
        <h3>Business Loan</h3>
        <p class="emi-loan-rate">From 11.0% p.a.</p>
        <ul class="emi-loan-features">
          <li><i class="fas fa-check"></i> Tenure up to 10 years</li>
          <li><i class="fas fa-check"></i> Loan up to ₹5 Cr</li>
          <li><i class="fas fa-check"></i> Flexible repayment</li>
          <li><i class="fas fa-check"></i> Business expansion</li>
        </ul>
        <button class="emi-loan-btn" onclick="switchEMITab('business-loan')">
          Calculate Now
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ===== HOW EMI WORKS ===== -->
<section class="emi-how-works">
  <div class="emi-container">
    <div class="emi-section-header">
      <span class="emi-tag">UNDERSTANDING EMI</span>
      <h2>How EMI Calculation Works</h2>
      <p>Learn the simple math behind your monthly installments</p>
    </div>
    
    <div class="emi-works-content">
      <div class="emi-formula-card">
        <h3>EMI Formula</h3>
        <div class="emi-formula">
          <div class="emi-formula-text">
            EMI = [P × R × (1+R)^N] / [(1+R)^N-1]
          </div>
        </div>
        <div class="emi-formula-legend">
          <p><strong>P</strong> = Principal Loan Amount</p>
          <p><strong>R</strong> = Monthly Interest Rate (Annual Rate / 12 / 100)</p>
          <p><strong>N</strong> = Loan Tenure in Months</p>
        </div>
      </div>
      
      <div class="emi-works-steps">
        <div class="emi-step">
          <div class="emi-step-number">1</div>
          <div class="emi-step-content">
            <h4>Enter Loan Details</h4>
            <p>Input the loan amount, interest rate, and tenure you wish to calculate</p>
          </div>
        </div>
        
        <div class="emi-step">
          <div class="emi-step-number">2</div>
          <div class="emi-step-content">
            <h4>Calculate Monthly EMI</h4>
            <p>Our calculator applies the EMI formula to compute your monthly installment</p>
          </div>
        </div>
        
        <div class="emi-step">
          <div class="emi-step-number">3</div>
          <div class="emi-step-content">
            <h4>View Breakdown</h4>
            <p>See the split between principal and interest components clearly</p>
          </div>
        </div>
        
        <div class="emi-step">
          <div class="emi-step-number">4</div>
          <div class="emi-step-content">
            <h4>Plan Your Budget</h4>
            <p>Use this information to make informed financial decisions</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TIPS SECTION ===== -->
<section class="emi-tips">
  <div class="emi-container">
    <div class="emi-section-header">
      <span class="emi-tag">SMART TIPS</span>
      <h2>Tips to Reduce Your EMI</h2>
      <p>Smart strategies to lower your monthly loan burden</p>
    </div>
    
    <div class="emi-tips-grid">
      <div class="emi-tip-card">
        <div class="emi-tip-icon">
          <i class="fas fa-arrow-down"></i>
        </div>
        <h4>Higher Down Payment</h4>
        <p>Pay more upfront to reduce the principal amount and consequently lower your monthly EMI burden.</p>
      </div>
      
      <div class="emi-tip-card">
        <div class="emi-tip-icon">
          <i class="fas fa-calendar-check"></i>
        </div>
        <h4>Longer Tenure</h4>
        <p>Opt for a longer repayment period to spread the cost, though total interest will be higher.</p>
      </div>
      
      <div class="emi-tip-card">
        <div class="emi-tip-icon">
          <i class="fas fa-percentage"></i>
        </div>
        <h4>Lower Interest Rate</h4>
        <p>Compare lenders and negotiate for better rates. Even 0.5% difference can save thousands.</p>
      </div>
      
      <div class="emi-tip-card">
        <div class="emi-tip-icon">
          <i class="fas fa-money-bill-wave"></i>
        </div>
        <h4>Prepayment</h4>
        <p>Make partial prepayments when possible to reduce principal and overall interest burden.</p>
      </div>
      
      <div class="emi-tip-card">
        <div class="emi-tip-icon">
          <i class="fas fa-star"></i>
        </div>
        <h4>Good Credit Score</h4>
        <p>Maintain a CIBIL score above 750 to qualify for better interest rates from lenders.</p>
      </div>
      
      <div class="emi-tip-card">
        <div class="emi-tip-icon">
          <i class="fas fa-balance-scale"></i>
        </div>
        <h4>Balance Transfer</h4>
        <p>Consider transferring to a lender offering lower interest rates to reduce EMI payments.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== FAQ SECTION ===== -->
<section class="emi-faq">
  <div class="emi-container">
    <div class="emi-section-header">
      <span class="emi-tag">FAQ</span>
      <h2>Frequently Asked Questions</h2>
      <p>Common questions about EMI and loan calculations</p>
    </div>
    
    <div class="emi-faq-wrapper">
      <div class="emi-faq-item active" data-testid="faq-item-1">
        <button class="emi-faq-question" onclick="toggleEMIFAQ(this)">
          <span>What is EMI and how is it calculated?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="emi-faq-answer">
          <p>EMI (Equated Monthly Installment) is a fixed amount you pay every month towards your loan. It's calculated using the formula: [P × R × (1+R)^N] / [(1+R)^N-1], where P is principal, R is monthly interest rate, and N is tenure in months.</p>
        </div>
      </div>
      
      <div class="emi-faq-item" data-testid="faq-item-2">
        <button class="emi-faq-question" onclick="toggleEMIFAQ(this)">
          <span>Does EMI include both principal and interest?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="emi-faq-answer">
          <p>Yes, each EMI payment includes both principal repayment and interest charges. Initially, a larger portion goes towards interest, and as the loan progresses, more goes towards principal repayment.</p>
        </div>
      </div>
      
      <div class="emi-faq-item" data-testid="faq-item-3">
        <button class="emi-faq-question" onclick="toggleEMIFAQ(this)">
          <span>Can I reduce my EMI after loan approval?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="emi-faq-answer">
          <p>Yes, you can reduce EMI by making partial prepayments to reduce the principal, extending the loan tenure (subject to lender approval), or refinancing at a lower interest rate through balance transfer.</p>
        </div>
      </div>
      
      <div class="emi-faq-item" data-testid="faq-item-4">
        <button class="emi-faq-question" onclick="toggleEMIFAQ(this)">
          <span>What happens if I miss an EMI payment?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="emi-faq-answer">
          <p>Missing an EMI can lead to late payment charges, negative impact on your credit score, and potential legal action by the lender. It's important to communicate with your lender immediately if you're facing payment difficulties.</p>
        </div>
      </div>
      
      <div class="emi-faq-item" data-testid="faq-item-5">
        <button class="emi-faq-question" onclick="toggleEMIFAQ(this)">
          <span>Is it better to have shorter or longer tenure?</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="emi-faq-answer">
          <p>Shorter tenure means higher EMI but lower total interest. Longer tenure means lower EMI but higher total interest. Choose based on your monthly budget and financial goals. It's often better to opt for shorter tenure if you can afford it.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="emi-cta">
  <div class="emi-container">
    <div class="emi-cta-content">
      <h2>Ready to Apply for a Loan?</h2>
      <p>Now that you've calculated your EMI, take the next step and apply for your loan with us</p>
      <div class="emi-cta-buttons">
        <a href="#contact" class="emi-cta-btn emi-cta-primary">
          <i class="fas fa-file-alt"></i>
          Apply Now
        </a>
        <a href="#contact" class="emi-cta-btn emi-cta-secondary">
          <i class="fas fa-phone"></i>
          Contact Us
        </a>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Initialize with default calculation
window.onload = function() {
  calculateEMI();
};

function updateEMIInput(field) {
  const rangeValue = document.getElementById(field + 'Range').value;
  document.getElementById(field).value = rangeValue;
  
  if (field === 'loanAmount') {
    document.getElementById(field + 'Display').textContent = formatIndianNumber(rangeValue);
  } else if (field === 'interestRate') {
    document.getElementById(field + 'Display').textContent = rangeValue;
  } else if (field === 'loanTenure') {
    document.getElementById(field + 'Display').textContent = Math.floor(rangeValue / 12);
  }
  
  calculateEMI();
}

function updateEMIRange(field) {
  const inputValue = document.getElementById(field).value;
  document.getElementById(field + 'Range').value = inputValue;
  
  if (field === 'loanAmount') {
    document.getElementById(field + 'Display').textContent = formatIndianNumber(inputValue);
  } else if (field === 'interestRate') {
    document.getElementById(field + 'Display').textContent = inputValue;
  } else if (field === 'loanTenure') {
    document.getElementById(field + 'Display').textContent = Math.floor(inputValue / 12);
  }
  
  calculateEMI();
}

function formatIndianNumber(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

let emiChartInstance = null;

function calculateEMI() {
  const principal = parseFloat(document.getElementById('loanAmount').value);
  const annualRate = parseFloat(document.getElementById('interestRate').value);
  const tenureMonths = parseFloat(document.getElementById('loanTenure').value);
  
  const monthlyRate = annualRate / 12 / 100;
  
  const emi = principal * monthlyRate * Math.pow(1 + monthlyRate, tenureMonths) / 
              (Math.pow(1 + monthlyRate, tenureMonths) - 1);
  
  const totalAmount = emi * tenureMonths;
  const totalInterest = totalAmount - principal;
  
  document.getElementById('monthlyEMI').textContent = '₹' + formatIndianNumber(Math.round(emi));
  document.getElementById('principalAmount').textContent = '₹' + formatIndianNumber(principal);
  document.getElementById('totalInterest').textContent = '₹' + formatIndianNumber(Math.round(totalInterest));
  document.getElementById('totalAmount').textContent = '₹' + formatIndianNumber(Math.round(totalAmount));
  
  // Update chart
  const ctx = document.getElementById('emiChart');
  
  if (emiChartInstance) {
    emiChartInstance.destroy();
  }
  
  emiChartInstance = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Principal', 'Interest'],
      datasets: [{
        data: [principal, totalInterest],
        backgroundColor: ['#0067da', '#29b9ed'],
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.label + ': ₹' + formatIndianNumber(Math.round(context.parsed));
            }
          }
        }
      }
    }
  });
}

function switchEMITab(tab) {
  // Update tab buttons
  document.querySelectorAll('.emi-tab-btn').forEach(btn => {
    btn.classList.remove('active');
  });
  document.querySelector(`[data-tab="${tab}"]`).classList.add('active');
  
  // Update calculator values based on loan type
  const presets = {
    'home-loan': { amount: 2500000, rate: 8.5, tenure: 240 },
    'personal-loan': { amount: 500000, rate: 10.5, tenure: 60 },
    'car-loan': { amount: 800000, rate: 9.0, tenure: 84 },
    'business-loan': { amount: 1500000, rate: 11.0, tenure: 120 }
  };
  
  const preset = presets[tab];
  
  document.getElementById('loanAmount').value = preset.amount;
  document.getElementById('loanAmountRange').value = preset.amount;
  document.getElementById('loanAmountDisplay').textContent = formatIndianNumber(preset.amount);
  
  document.getElementById('interestRate').value = preset.rate;
  document.getElementById('interestRateRange').value = preset.rate;
  document.getElementById('interestRateDisplay').textContent = preset.rate;
  
  document.getElementById('loanTenure').value = preset.tenure;
  document.getElementById('loanTenureRange').value = preset.tenure;
  document.getElementById('loanTenureDisplay').textContent = Math.floor(preset.tenure / 12);
  
  calculateEMI();
  
  // Scroll to calculator
  document.querySelector('.emi-calculator-card').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function toggleEMIFAQ(button) {
  const faqItem = button.parentElement;
  const answer = faqItem.querySelector('.emi-faq-answer');
  const isActive = faqItem.classList.contains('active');
  
  document.querySelectorAll('.emi-faq-item').forEach(item => {
    item.classList.remove('active');
    item.querySelector('.emi-faq-answer').style.maxHeight = '0';
  });
  
  if (!isActive) {
    faqItem.classList.add('active');
    answer.style.maxHeight = answer.scrollHeight + 'px';
  }
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>