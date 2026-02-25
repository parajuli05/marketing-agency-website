<?php
$active = 'industries';
$page_css = 'industries.css';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container center">
    <div class="pill">Industries</div>
    <h1>Industries We Serve</h1>
    <p>Deep expertise in hospitality and events. We understand your challenges and know how to solve them.</p>
  </div>
</section>

<section class="section">
  <div class="container">

    <div class="industry-stack">

      <div class="industry blue card">
        <h3>Business Events</h3>
        <small>Conferences, expos, summits, and corporate events</small>

        <div class="subrow">
          <div class="mini-card">
            <h4>Common Challenges</h4>
            <p>Low attendance, poor ticket sales, weak brand awareness</p>
          </div>
          <div class="mini-card">
            <h4>Our Solutions</h4>
            <p>Multi-channel campaigns, influencer partnerships, targeted ads</p>
          </div>
        </div>

        <a href="services.php#event">Explore Our Services →</a>
      </div>

      <div class="industry purple card">
        <h3>Hospitality & Hotels</h3>
        <small>Hotels, resorts, boutique accommodations</small>

        <div class="subrow">
          <div class="mini-card">
            <h4>Common Challenges</h4>
            <p>Seasonal bookings, high competition, low direct bookings</p>
          </div>
          <div class="mini-card">
            <h4>Our Solutions</h4>
            <p>SEO dominance, OTA optimization, loyalty programs</p>
          </div>
        </div>

        <a href="services.php#hospitality">Explore Our Services →</a>
      </div>

      <div class="industry orange card">
        <h3>Restaurants & Tourism</h3>
        <small>Restaurant groups, tourism brands, destination marketing</small>

        <div class="subrow">
          <div class="mini-card">
            <h4>Common Challenges</h4>
            <p>Limited visibility, inconsistent reservations</p>
          </div>
          <div class="mini-card">
            <h4>Our Solutions</h4>
            <p>Local SEO, social media presence, content marketing</p>
          </div>
        </div>

        <a href="services.php#seo">Explore Our Services →</a>
      </div>

    </div>

    <div class="section-sm center" style="margin-top:36px">
      <h2 class="h2">Why Industry Leaders Choose Us</h2>
      <p class="sub">We're not generalists. We specialize in hospitality and events, and it shows in our results.</p>

      <div class="why-grid">
        <div class="why card">
          <div style="width:44px;height:44px;border-radius:14px;background:rgba(37,99,235,.12);display:grid;place-items:center;margin:0 auto;font-weight:900;color:var(--blue)">👥</div>
          <h4>Industry Expertise</h4>
          <p>7+ years exclusively serving hospitality and event clients.</p>
        </div>
        <div class="why card" style="background:rgba(124,58,237,.06)">
          <div style="width:44px;height:44px;border-radius:14px;background:rgba(124,58,237,.14);display:grid;place-items:center;margin:0 auto;font-weight:900;color:var(--purple)">↗</div>
          <h4>Proven Results</h4>
          <p>Average 380% ROI across campaigns. Real, measurable growth.</p>
        </div>
        <div class="why card" style="background:rgba(249,115,22,.06)">
          <div style="width:44px;height:44px;border-radius:14px;background:rgba(249,115,22,.14);display:grid;place-items:center;margin:0 auto;font-weight:900;color:#f97316">📊</div>
          <h4>Data-Driven Strategy</h4>
          <p>Every decision backed by analytics, testing, and optimization.</p>
        </div>
      </div>
    </div>

  </div>

  <div class="cta-wide">
    <div class="container">
      <h2>Let's Grow Your Business</h2>
      <p>Book a free strategy call to discuss your specific challenges and goals.</p>
      <a class="btn btn-ghost" href="contact.php" style="border-color:rgba(255,255,255,.55); color:#fff; background:transparent">Schedule Your Call →</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
