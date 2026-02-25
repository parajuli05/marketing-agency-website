<?php
$active = 'contact';
$page_css = 'contact.css';
require_once 'includes/config.php';

$success = '';
$error = '';

function clean($s){ return trim(htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8')); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name    = clean($_POST['name'] ?? '');
  $email   = clean($_POST['email'] ?? '');
  $company = clean($_POST['company'] ?? '');
  $service = clean($_POST['service'] ?? '');
  $budget  = clean($_POST['budget'] ?? '');
  $goals   = clean($_POST['goals'] ?? '');

  if ($name==='' || $company==='' || $service==='' || $budget==='' || $goals==='') {
    $error = 'Please fill all required fields.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
  } else {
    $to = SITE_EMAIL_TO;
    $subject = 'New Contact Form Submission - ' . SITE_NAME;

    $body =
      "Name: $name\n".
      "Email: $email\n".
      "Company: $company\n".
      "Service: $service\n".
      "Budget: $budget\n\n".
      "Goals:\n$goals\n";

    $headers = "From: ".SITE_EMAIL_FROM."\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Note: mail() depends on server mail config. On localhost it often won't send.
    if (@mail($to, $subject, $body, $headers)) {
      $success = "Thanks! Your message has been sent. We'll reply within 24 hours.";
    } else {
      $error = "Could not send message on this server. If you're on localhost, deploy to hosting or use SMTP (PHPMailer).";
    }
  }
}

include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container center">
    <div class="pill">Contact Us</div>
    <h1>Let's Talk Growth</h1>
    <p>Ready to transform your marketing? Fill out the form below and we'll get back to you within 24 hours.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-wrap">

      <aside class="info card">
        <h3>Get in Touch</h3>

        <div class="info-item">
          <div class="ico">✉</div>
          <div>
            <b>Email</b>
            <span>contact@sewatech.com</span>
          </div>
        </div>

        <div class="info-item">
          <div class="ico">☎</div>
          <div>
            <b>Phone</b>
            <span>97********</span>
          </div>
        </div>

        <div class="info-item">
          <div class="ico">⌂</div>
          <div>
            <b>Office</b>
            <span>Kathmandu</span>
          </div>
        </div>

        <p class="small"><strong>Response Time:</strong><br>We typically respond within 24 hours during business days.</p>
        <p class="small"><strong>Business Hours:</strong><br>Monday – Friday: 9:00 AM – 6:00 PM </p>
      </aside>

      <div class="form">
        <h3>Send Us a Message</h3>
        <p>Tell us about your business and marketing goals. The more details you provide, the better we can help.</p>

        <?php if ($success): ?>
          <div class="alert success"><?php echo $success; ?></div>
        <?php endif; ?>
        <?php if ($error): ?>
          <div class="alert error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="contact.php" novalidate>
          <div class="form-row">
            <div>
              <label>Full Name *</label>
              <input name="name" type="text" placeholder="John Smith" required>
            </div>
            <div>
              <label>Email Address *</label>
              <input name="email" type="email" placeholder="john@company.com" required>
            </div>
          </div>

          <label>Company Name *</label>
          <input name="company" type="text" placeholder="Your Company" required>

          <label>Service Interest *</label>
          <select name="service" required>
            <option value="">Select a service</option>
            <option>Event Marketing</option>
            <option>Hospitality Marketing</option>
            <option>SEO Optimization</option>
            <option>Website Development</option>
            <option>Paid Advertising</option>
          </select>

          <label>Monthly Marketing Budget *</label>
          <select name="budget" required>
            <option value="">Select budget range</option>
            <option>1,000 - 5,000</option>
            <option>5,000 - 10,000</option>
            <option>10,000 - 25,000</option>
            <option>25,000+</option>
          </select>

          <label>Tell Us About Your Goals *</label>
          <textarea name="goals" placeholder="Tell us about your business, current challenges, and what you're hoping to achieve..." required></textarea>

          <div class="next">
            <h4>What happens next?</h4>
            <ol>
              <li>We’ll review your information and reach out within 24 hours</li>
              <li>Schedule a free 30-minute strategy call</li>
              <li>Receive a custom marketing plan tailored to your goals</li>
            </ol>
          </div>

          <button class="btn btn-primary full" type="submit">Send Message →</button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
