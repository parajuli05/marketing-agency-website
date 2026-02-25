<?php
require_once __DIR__ . '/config.php';
$active = $active ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo SITE_NAME; ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css" />
  <?php if (!empty($page_css)): ?>
    <link rel="stylesheet" href="assets/css/<?php echo htmlspecialchars($page_css); ?>" />
  <?php endif; ?>
</head>
<body>

<header class="site-header">
  <div class="container nav">
    <a class="brand" href="index.php" aria-label="Sewa Tech Home">
      <span class="brand-mark">ST</span>
      <span class="brand-name">Sewa Tech</span>
    </a>

    <button class="nav-toggle" type="button" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <nav class="nav-links" aria-label="Primary">
      <a class="nav-link <?php echo $active==='home'?'active':''; ?>" href="index.php">Home</a>
      <a class="nav-link <?php echo $active==='services'?'active':''; ?>" href="services.php">Services</a>
      <a class="nav-link <?php echo $active==='industries'?'active':''; ?>" href="industries.php">Industries</a>
      <a class="nav-link <?php echo $active==='case'?'active':''; ?>" href="case-studies.php">Case Studies</a>
      <a class="nav-link <?php echo $active==='about'?'active':''; ?>" href="about.php">About</a>
      <a class="nav-link <?php echo $active==='contact'?'active':''; ?>" href="contact.php">Contact</a>
      <a class="btn btn-primary" href="contact.php">Get Started</a>
    </nav>
  </div>
</header>
