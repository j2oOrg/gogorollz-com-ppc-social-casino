<?php $brand = get_theme_file_uri('/assets/images/img.png'); ?>
<footer class="footer-bar-c6u3">
  <div class="shell-wrap-z4m2">
    <div class="footer-brand-u2m9">
      <img class="brand-logo-u8b4" src="<?php echo esc_url( $brand ); ?>" alt="Gogorollz logo">
      <span class="sr-only">Gogorollz</span>
    </div>

    <div class="footer-note-w0e3">
      <h5 class="section-title-m3y2" style="margin-bottom:0.35rem; font-size:1.1rem;">Responsible play</h5>
      <p class="section-sub-p0c6" style="margin:0;">
        Gogorollz is for light, social casino style fun for adults <strong>18+</strong>. No cash, no prizes—just entertainment.
        Take breaks, set your own pace, and keep it balanced.
      </p>
    </div>

    <ul class="footer-list-z1t5">
      <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
      <li><a href="<?php echo esc_url( home_url('/play') ); ?>">Play</a></li>
      <li><a href="<?php echo esc_url( home_url('/#contact') ); ?>">Contact</a></li>
      <li><a href="<?php echo esc_url( home_url('/disclaimer') ); ?>">Disclaimer</a></li>
      <li><a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a></li>
      <li><a href="<?php echo esc_url( home_url('/terms-and-conditions') ); ?>">Terms &amp; Conditions</a></li>
    </ul>

    <p class="footer-copy-l5u7">© <span data-year></span> Gogorollz</p>
  </div>
</footer>

<button id="hubScrollTop" class="scroll-top-d8n2" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
