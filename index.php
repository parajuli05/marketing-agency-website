<?php
$active = 'home';
$page_css = 'home.css';
include 'includes/header.php';
?>

<section class="hero">
  <div class="container center">
    <div class="pill">Trusted by 250+ Events & Hotels</div>
    <h1>Grow Bookings. Fill Seats. Elevate Experiences.</h1>
    <p>Premium marketing solutions for hospitality brands and business events that deliver measurable ROI.</p>

    <div class="hero-actions">
      <a class="btn btn-primary" href="contact.php">Book a Strategy Call →</a>
      <a class="btn btn-ghost" href="case-studies.php">View Our Work →</a>
    </div>

    <div class="trust-row"> 
      <p>TRUSTED BY INDUSTRY LEADERS</p>
      <div class="trust-logos">
        <div class="logo-chip">M</div>
        <div class="logo-chip">H</div>
        <div class="logo-chip">CC</div>
        <div class="logo-chip">TB</div>
        <div class="logo-chip">GE</div>
      </div>
    </div>
  </div>

  <div class="stats-strip">
    <div class="container">
      <h3>Our Track Record</h3>
      <div class="stats">
        <div class="stat"><b>12+</b><span>Events Promoted</span></div>
        <div class="stat"><b>58%</b><span>Avg. Booking Increase</span></div>
        <div class="stat"><b>5 lakhs+</b><span>Revenue Generated</span></div>
        <div class="stat"><b>98%</b><span>Client Satisfaction</span></div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section class="services-section">

<style>
.services-section {
  background: #f5f6fb;
  padding: 100px 20px;
}

.services-section .container {
  max-width: 1200px;
  margin: auto;
}

.services-section .center {
  text-align: center;
}

.services-section .pill {
  display: inline-block;
  background: linear-gradient(90deg,#2563eb,#9333ea);
  color: #fff;
  padding: 6px 18px;
  border-radius: 30px;
  font-size: 13px;
  font-weight: 600;
}

.services-section h2 {
  font-size: 48px;
  margin: 15px 0;
}

.services-section .sub {
  color: #555;
  font-size: 18px;
  margin-bottom: 60px;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
}

.service-card {
  background: #fff;
  padding: 35px;
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
}

.service-icon {
  width: 50px;
  height: 50px;
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 20px;
  margin-bottom: 20px;
}

/* Gradient icon colors */
.icon1 { background: linear-gradient(135deg,#3b82f6,#06b6d4); }
.icon2 { background: linear-gradient(135deg,#2563eb,#10b981); }
.icon3 { background: linear-gradient(135deg,#2563eb,#06b6d4); }
.icon4 { background: linear-gradient(135deg,#2563eb,#10b981); }

.service-card h3 {
  margin-bottom: 10px;
  font-size: 22px;
}

.service-card p {
  color: #555;
  line-height: 1.6;
  font-size: 15px;
}

.service-link {
  display: inline-block;
  margin-top: 20px;
  color: #2563eb;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

.service-link:hover {
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 992px) {
  .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<div class="container">

  <div class="center">
    <div class="pill">Our Services</div>
    <h2>Comprehensive Marketing Solutions</h2>
    <p class="sub">
      Designed to drive measurable results for hospitality and event businesses.
    </p>
  </div>

  <div class="services-grid">

    <div class="service-card">
      <div class="service-icon icon1">1</div>
      <h3>Event Marketing & Ticketing</h3>
      <p>
        Drive attendance and ticket sales with targeted campaigns for conferences, expos, and corporate events.
      </p>
     <a href="services.php" class="service-link">Learn More →</a>
    </div>

    <div class="service-card">
      <div class="service-icon icon2">2</div>
      <h3>Hospitality Brand Marketing</h3>
      <p>
        Increase bookings and brand visibility for hotels, resorts, and tourism destinations.
      </p>
      <a href="services.php" class="service-link">Learn More →</a>
    </div>

    <div class="service-card">
      <div class="service-icon icon3">3</div>
      <h3>SEO Optimization</h3>
      <p>
        Dominate search rankings with technical, local, and content SEO strategies.
      </p>
   <a href="services.php" class="service-link">Learn More →</a>
    </div>

    <div class="service-card">
      <div class="service-icon icon4">4</div>
      <h3>Website Design & Development</h3>
      <p>
        Conversion-optimized websites built for performance and user experience.
      </p>
     <a href="services.php" class="service-link">Learn More →</a>
    </div>

  </div>

</div>
</section>

<!-- INDUSTRIES SECTION -->
<section class="industries-section">

<style>
.industries-section {
  background: #f5f6fb;
  padding: 100px 20px;
}

.industries-section .container {
  max-width: 1200px;
  margin: auto;
}

.industries-section .center {
  text-align: center;
}

.industries-section .pill {
  display: inline-block;
  background: linear-gradient(90deg,#7c3aed,#ec4899);
  color: #fff;
  padding: 6px 18px;
  border-radius: 30px;
  font-size: 13px;
  font-weight: 600;
}

.industries-section h2 {
  font-size: 48px;
  margin: 15px 0;
}

.industries-section .sub {
  color: #555;
  font-size: 18px;
  margin-bottom: 60px;
}

.industries-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.industry-card {
  background: #fff;
  padding: 35px;
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}

.industry-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
}

.industry-icon {
  width: 50px;
  height: 50px;
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 20px;
  margin-bottom: 20px;
}

/* Gradient icon colors */
.icon1 { background: linear-gradient(135deg,#3b82f6,#06b6d4); }
.icon2 { background: linear-gradient(135deg,#a855f7,#ec4899); }
.icon3 { background: linear-gradient(135deg,#f97316,#ef4444); }

.industry-card h3 {
  margin-bottom: 15px;
  font-size: 22px;
}

.industry-card p {
  color: #555;
  line-height: 1.6;
  font-size: 15px;
}

.industry-card strong {
  display: block;
  margin-top: 15px;
  font-size: 13px;
  color: #111;
}

/* Responsive */
@media (max-width: 992px) {
  .industries-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .industries-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<div class="container">

  <div class="center">
    <div class="pill">Industries</div>
    <h2>Industries We Serve</h2>
    <p class="sub">
      Specialized expertise in high-growth sectors that demand results.
    </p>
  </div>

  <div class="industries-grid">

    <div class="industry-card">
      <div class="industry-icon icon1">1</div>
      <h3>Business Events</h3>
      <p>Conferences, expos, summits, and corporate events</p>
      <strong>CHALLENGES:</strong>
      <p>Low attendance, poor ticket sales, weak brand awareness</p>
      <strong>OUR SOLUTION:</strong>
      <p>Multi-channel campaigns, influencer partnerships, targeted ads</p>
    </div>

    <div class="industry-card">
      <div class="industry-icon icon2">2</div>
      <h3>Hospitality & Hotels</h3>
      <p>Hotels, resorts, boutique accommodations</p>
      <strong>CHALLENGES:</strong>
      <p>Seasonal bookings, high competition, low direct bookings</p>
      <strong>OUR SOLUTION:</strong>
      <p>SEO dominance, OTA optimization, loyalty programs</p>
    </div>

    <div class="industry-card">
      <div class="industry-icon icon3">3</div>
      <h3>Restaurants & Tourism</h3>
      <p>Restaurant groups, tourism brands, destination marketing</p>
      <strong>CHALLENGES:</strong>
      <p>Limited visibility, inconsistent reservations</p>
      <strong>OUR SOLUTION:</strong>
      <p>Local SEO, social media presence, content marketing</p>
    </div>

  </div>

</div>
</section>


<section class="section feature-cards">
  <div class="container center">
    <div class="pill">Our Services</div>
    <h2 class="h2" style="margin-top:14px">Comprehensive Marketing Solutions</h2>
    <p class="sub">Designed to drive measurable results for hospitality and event businesses.</p>

    <div class="grid" style="margin-top:28px">
      <div class="card feature">
        <div class="icon">↗</div>
        <h3>Event Marketing</h3>
        <p>Multi-channel campaigns that boost attendance and ticket sales.</p>
      </div>
      <div class="card feature">
        <div class="icon">★</div>
        <h3>Hospitality Growth</h3>
        <p>Direct booking strategies that reduce OTA dependency.</p>
      </div>
      <div class="card feature">
        <div class="icon">⚙</div>
        <h3>SEO & Web</h3>
        <p>SEO optimization + conversion-focused websites built for performance.</p>
      </div>
    </div>
  </div>
</section>


<!-- OUR PROCESS SECTION -->
<section class="process-section">

<style>
.process-section {
  background: #f5f6fb;
  padding: 100px 20px;
}

.process-section .container {
  max-width: 1200px;
  margin: auto;
}

.process-section .center {
  text-align: center;
}

.process-section h2 {
  font-size: 48px;
  margin-bottom: 15px;
}

.process-section .sub {
  color: #555;
  font-size: 18px;
  margin-bottom: 60px;
}

.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
}

.process-card {
  background: #ffffff;
  padding: 35px;
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}

.process-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
}

.process-number {
  width: 50px;
  height: 50px;
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 700;
  font-size: 18px;
  margin-bottom: 20px;
}

/* Gradient colors */
.num1 { background: linear-gradient(135deg,#3b82f6,#06b6d4); }
.num2 { background: linear-gradient(135deg,#a855f7,#ec4899); }
.num3 { background: linear-gradient(135deg,#f97316,#ef4444); }
.num4 { background: linear-gradient(135deg,#10b981,#14b8a6); }

.process-card h3 {
  margin-bottom: 15px;
  font-size: 20px;
}

.process-card p {
  color: #555;
  line-height: 1.6;
  font-size: 15px;
}

/* Responsive */
@media (max-width: 992px) {
  .process-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .process-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<div class="container">

  <div class="center">
    <h2>Our Process</h2>
    <p class="sub">
      A proven methodology that delivers consistent results.
    </p>
  </div>

  <div class="process-grid">

    <div class="process-card">
      <div class="process-number num1">1</div>
      <h3>Discovery & Strategy</h3>
      <p>
        We analyze your goals, audience, and competition to create 
        a data-driven marketing strategy.
      </p>
    </div>

    <div class="process-card">
      <div class="process-number num2">2</div>
      <h3>Campaign Development</h3>
      <p>
        Our team designs and builds conversion-optimized campaigns 
        tailored to your industry.
      </p>
    </div>

    <div class="process-card">
      <div class="process-number num3">3</div>
      <h3>Launch & Optimize</h3>
      <p>
        We launch your campaigns and continuously optimize based 
        on real-time performance data.
      </p>
    </div>

    <div class="process-card">
      <div class="process-number num4">4</div>
      <h3>Scale & Grow</h3>
      <p>
        As results improve, we scale winning strategies to maximize 
        your ROI and market presence.
      </p>
    </div>

  </div>

</div>
</section>

<!-- CASE STUDIES SECTION -->
<section class="case-section">

  <style>
    .case-section {
      background: #f5f6fb;
      padding: 100px 20px;
    }

    .case-section .container {
      max-width: 1200px;
      margin: auto;
    }

    .case-section .center {
      text-align: center;
    }

    .case-section .pill {
      display: inline-block;
      background: linear-gradient(90deg,#2563eb,#9333ea);
      color: #fff;
      padding: 6px 18px;
      border-radius: 30px;
      font-size: 13px;
      font-weight: 600;
    }

    .case-section h2 {
      font-size: 40px;
      margin: 15px 0;
    }

    .case-section .sub {
      color: #666;
      max-width: 600px;
      margin: 0 auto 60px;
    }

    .case-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .case-card {
      background: #fff;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 40px rgba(0,0,0,0.05);
      transition: 0.3s ease;
    }

    .case-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    }

    .case-img {
      position: relative;
    }

    .case-img img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      display: block;
    }

    .case-tag {
      position: absolute;
      top: 15px;
      left: 15px;
      background: #fff;
      padding: 6px 14px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 600;
      color: #2563eb;
    }

    .case-body {
      padding: 25px;
    }

    .case-body h3 {
      margin-bottom: 10px;
    }

    .case-body p {
      color: #555;
      font-size: 14px;
    }

    .case-divider {
      height: 1px;
      background: #eee;
      margin: 20px 0;
    }

    .case-stats {
      display: flex;
      justify-content: space-between;
      text-align: center;
    }

    .case-stats strong {
      display: block;
      font-size: 18px;
      margin-bottom: 5px;
    }

    .case-stats span {
      font-size: 12px;
      color: #777;
    }

    .case-btn {
      display: inline-block;
      margin-top: 50px;
      background: linear-gradient(90deg,#2563eb,#9333ea);
      color: #fff;
      padding: 12px 28px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .case-btn:hover {
      opacity: 0.9;
    }

    @media (max-width: 992px) {
      .case-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .case-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <div class="container">

    <div class="center">
      <div class="pill">Success Stories</div>
      <h2>Real Results from Real Clients</h2>
      <p class="sub">
        See how we've transformed businesses across hospitality and events.
      </p>
    </div>

    <div class="case-grid">

      <div class="case-card">
        <div class="case-img">
          <span class="case-tag">Business Events</span>
          <img src="#" alt="">
        </div>
        <div class="case-body">
          <h3>Tech Summit 2024</h3>
          <p>Annual tech conference needed to increase attendance and expand sponsor revenue.</p>
          <div class="case-divider"></div>
          <div class="case-stats">
            <div><strong>+52%</strong><span>Attendance</span></div>
            <div><strong>20%</strong><span>ROI</span></div>
          </div>
        </div>
      </div>

      <div class="case-card">
        <div class="case-img">
          <span class="case-tag">Hospitality</span>
          <img src="#" alt="">
        </div>
        <div class="case-body">
          <h3>Bhaktapur Resort</h3>
          <p>Luxury resort struggling with low occupancy and OTA dependency.</p>
          <div class="case-divider"></div>
          <div class="case-stats">
           <div><strong>+52%</strong><span>Attendance</span></div>
            <div><strong>20%</strong><span>ROI</span></div>
          </div>
        </div>
      </div>

      <div class="case-card">
        <div class="case-img">
          <span class="case-tag">Hospitality</span>
          <img src="#" alt="">
        </div>
        <div class="case-body">
          <h3>AFC Restaurant Group</h3>
          <p>Restaurant group improved visibility and increased weekday reservations.</p>
          <div class="case-divider"></div>
          <div class="case-stats">
            <div><strong>+52%</strong><span>Attendance</span></div>
            <div><strong>20%</strong><span>ROI</span></div>
          </div>
        </div>
      </div>

    </div>

    <div class="center">
      <a href="case-studies.php" class="case-btn">View All Case Studies →</a>
    </div>

  </div>
</section>
<!-- TESTIMONIALS SECTION -->
<section class="testimonial-section">

<style>
.testimonial-section {
  background: #f5f6fb;
  padding: 100px 20px;
}

.testimonial-section .container {
  max-width: 1200px;
  margin: auto;
}

.testimonial-section h2 {
  text-align: center;
  font-size: 48px;
  margin-bottom: 60px;
}

.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.testimonial-card {
  background: #fff;
  padding: 35px;
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}

.testimonial-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
}

.stars {
  color: #fbbf24;
  font-size: 18px;
  margin-bottom: 15px;
}

.testimonial-text {
  color: #444;
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 25px;
}

.client-name {
  font-weight: 600;
  margin-bottom: 5px;
}

.client-role {
  font-size: 14px;
  color: #777;
}

.client-company {
  display: block;
  font-size: 14px;
  color: #2563eb;
  text-decoration: none;
  margin-top: 3px;
}

.client-company:hover {
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 992px) {
  .testimonial-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .testimonial-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<div class="container">

  <h2>What Our Clients Say</h2>

  <div class="testimonial-grid">

    <div class="testimonial-card">
      <div class="stars">★★★★★</div>
      <div class="testimonial-text">
        "Sewa Tech transformed our event marketing strategy. 
        We saw a 52% increase in attendance and the ROI was exceptional."
      </div>
      <div class="client-name">Prabhas</div>
      <div class="client-role">Director of Marketing</div>
      <a href="#" class="client-company">Summit Events Group</a>
    </div>

    <div class="testimonial-card">
      <div class="stars">★★★★★</div>
      <div class="testimonial-text">
        "Their hospitality marketing expertise is unmatched. 
        Direct bookings increased by 68% within six months."
      </div>
      <div class="client-name">Hari</div>
      <div class="client-role">General Manager</div>
      <a href="#" class="client-company">Bhaktapur Resort</a>
    </div>

    <div class="testimonial-card">
      <div class="stars">★★★★★</div>
      <div class="testimonial-text">
        "Sewa Tech's local SEO strategies put us on the map. 
        We're now ranking in top 3 for all our target keywords."
      </div>
      <div class="client-name">Shyam</div>
      <div class="client-role">CEO</div>
      <a href="#" class="client-company">AFC Restaurant Group</a>
    </div>

  </div>

</div>
</section>

<section class="section-sm">
  <div class="container">
    <div class="card" style="padding:26px; text-align:center">
      <h2 class="h2">Get Your Free Marketing Audit</h2>
      <p class="sub">Discover untapped opportunities to grow your bookings and revenue. No commitment required.</p>
      <div class="hero-actions" style="margin-top:18px">
        <a class="btn btn-primary" href="contact.php">Get Free Audit →</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
