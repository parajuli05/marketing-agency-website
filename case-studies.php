<?php
$active = 'case';
$page_css = 'case-studies.css';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="bar"></div>
  <div class="container center">
    <div class="pill" style="background:linear-gradient(90deg,#16a34a,var(--blue))">Success Stories</div>
    <h1>Case Studies</h1>
    <p>Real results. Real ROI. See how we've transformed businesses across hospitality and events.</p>
  </div>
</section>

<section class="section">
  <div class="container">

    <div class="case card">
      <div class="media">
        <img src="assets/images/case-1.jpg" alt="Tech summit meeting"/>
      </div>
      <div class="content">
        <span class="tag">Business Events</span>
        <h2>Tech Summit 2024</h2>
        <h4>The Challenge</h4>
        <p>Annual tech conference needed to increase attendance by 40% and expand sponsor revenue.</p>
        <h4>Our Solution</h4>
        <p>Implemented multi-channel campaign including LinkedIn ads, email sequences, and influencer partnerships.</p>

        <div class="results">
          <div style="display:flex; gap:8px; align-items:center; font-weight:800; margin-bottom:10px">
            <span style="color:#16a34a">↗</span> Results
          </div>
          <div class="row">
            <div><strong>+52%</strong><span>Attendance</span></div>
            <div><strong>20%</strong><span>ROI</span></div>
          </div>
        </div>
      </div>
    </div>

    <div class="case card">
      <div class="content">
        <span class="tag purple">Hospitality</span>
        <h2>Bhaktapur Resort</h2>
        <h4>The Challenge</h4>
        <p>Luxury resort struggling with low occupancy during off-season and high OTA dependency.</p>
        <h4>Our Solution</h4>
        <p>Comprehensive SEO overhaul, direct booking incentives, and targeted Meta campaigns.</p>

        <div class="results">
          <div style="display:flex; gap:8px; align-items:center; font-weight:800; margin-bottom:10px">
            <span style="color:#16a34a">↗</span> Results
          </div>
          <div class="row">
            <div><strong>+52%</strong><span>Attendance</span></div>
            <div><strong>20%</strong><span>ROI</span></div>
          </div>
        </div>
      </div>
      <div class="media">
        <img src="assets/images/case-2.jpg" alt="Resort pool"/>
      </div>
    </div>

    <div class="case card">
      <div class="media">
        <img src="assets/images/case-3.jpg" alt="Restaurant interior"/>
      </div>
      <div class="content">
        <span class="tag orange">Hospitality</span>
        <h2>AFC Restaurant Group</h2>
        <h4>The Challenge</h4>
        <p>Restaurant group needed to improve local visibility and increase weekday reservations.</p>
        <h4>Our Solution</h4>
        <p>Local SEO optimization, Google Business Profile management, and social media content strategy.</p>

        <div class="results">
          <div style="display:flex; gap:8px; align-items:center; font-weight:800; margin-bottom:10px">
            <span style="color:#16a34a">↗</span> Results
          </div>
          <div class="row">
            <div><strong>+52%</strong><span>Attendance</span></div>
            <div><strong>20%</strong><span>ROI</span></div>
          </div>
        </div>
      </div>
    </div>

  </div>

 

  <div class="soft-cta">
    <div class="container">
      <h2 class="h2">Ready to Write Your Success Story?</h2>
      <p class="sub">Let's discuss how we can deliver similar results for your business.</p>
      <div class="hero-actions" style="margin-top:16px">
        <a class="btn btn-primary" href="contact.php">Book a Strategy Call →</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
