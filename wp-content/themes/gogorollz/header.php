<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Gogorollz — Free-to-play social casino experiences, zero payouts">
  <link rel="icon" href="<?php echo esc_url( home_url('/favicon.ico') ); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( home_url('/apple-touch-icon.png') ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="alert-strip-f2m7">
  <div class="shell-wrap-z4m2 alert-inner-v7x1">
    <span class="alert-pill-x6c4">18+</span>
    <span>Gogorollz is a free-to-play social casino style experience. No real-money gambling or prizes. 18+ only. Please play responsibly.</span>
  </div>
</div>

<?php
  $current = '';
  if (is_front_page()) {
      $current = 'home';
  } elseif (is_page('play')) {
      $current = 'play';
  } elseif (is_page('disclaimer')) {
      $current = 'disclaimer';
  } elseif (is_page('privacy-policy')) {
      $current = 'privacy';
  } elseif (is_page('terms-and-conditions')) {
      $current = 'terms';
  }
  $brand = get_theme_file_uri('/assets/images/img.png');
?>

<nav class="navbar navbar-expand-lg nav-rail-q5h8">
  <div class="shell-wrap-z4m2 d-flex align-items-center justify-content-between">
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
      <img class="brand-logo-u8b4" src="<?php echo esc_url( $brand ); ?>" alt="Gogorollz logo">
      <span class="sr-only">Gogorollz</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'gogorollz'); ?>">
      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'home' ? ' active' : ''; ?>" href="<?php echo esc_url( home_url('/#home') ); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'play' ? ' active' : ''; ?>" href="<?php echo esc_url( home_url('/play') ); ?>">Play</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7" href="<?php echo esc_url( home_url('/#contact') ); ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'disclaimer' ? ' active' : ''; ?>" href="<?php echo esc_url( home_url('/disclaimer') ); ?>">Disclaimer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'privacy' ? ' active' : ''; ?>" href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-u4e7<?php echo $current === 'terms' ? ' active' : ''; ?>" href="<?php echo esc_url( home_url('/terms-and-conditions') ); ?>">Terms</a>
        </li>
        <li class="nav-item ms-lg-2">
          <a class="btn-ghost-r4d0" href="<?php echo esc_url( home_url('/play') ); ?>">Start a session</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
