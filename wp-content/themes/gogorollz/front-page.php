<?php
/**
 * Front page template mirroring the existing static landing page.
 */
get_header();
$hero_image = get_theme_file_uri('/assets/images/herobackground01.webp');
?>

<section id="home" class="hero-block-h6v4">
  <div class="shell-wrap-z4m2 hero-grid-w3c8 text-center">
    <p class="eyebrow-t8k9">Entertainment only — zero deposits, zero payouts</p>
    <h1 class="title-hero-b9k1">Instant, free social casino experiences crafted for campaigns.</h1>
    <p class="hero-subtext-e8y4">
      Gogorollz keeps things lightweight and mobile-first so your traffic tests, creative reviews,
      and audience previews stay smooth — always 18+, no cash flows or prizes involved.
    </p>
    <div class="hero-cta-v9f1">
      <a href="<?php echo esc_url( home_url('/play') ); ?>" class="btn-main-m2p9">Play now</a>
      <a href="#about" class="btn-ghost-r4d0">See how it works</a>
    </div>
    <div class="hero-cta-v9f1">
      <span class="chip-w9e3 accent"><i class="fa-solid fa-bolt"></i>Instant load</span>
      <span class="chip-w9e3"><i class="fa-solid fa-shield"></i>No cash or prizes</span>
      <span class="chip-w9e3"><i class="fa-solid fa-mobile-screen"></i>Built for mobile</span>
    </div>
  </div>
</section>

<section id="about" class="panel-stack-j9t6">
  <div class="shell-wrap-z4m2">
    <div class="panel-grid-v4u0">
      <div class="panel-art-y4m1">
        <img src="<?php echo esc_url( $hero_image ); ?>" alt="Gogorollz hero collage">
      </div>
      <div class="panel-copy-s2e1">
        <h2 class="section-title-m3y2">Why Gogorollz exists</h2>
        <p>
          We built <strong>Gogorollz</strong> to be a dependable shell for social casino style experiences:
          fast loads, premium polish, and clear “entertainment only” framing.
        </p>
        <p>
          Use it for campaign flights, creative QA, or partner previews. No downloads, no wallets —
          just a focused lane to show how your experience feels.
        </p>
        <a href="#features" class="btn-main-m2p9">Explore the toolkit</a>
      </div>
    </div>
  </div>
</section>

<section id="features" class="feature-band-r8k0">
  <div class="shell-wrap-z4m2 text-center">
    <h2 class="section-title-m3y2 mb-1">Built to ship fast</h2>
    <p class="section-sub-p0c6">Polished shells that keep your campaigns clear and lightweight.</p>
    <div class="feature-grid-e2k4">
      <div class="feature-card-f0n5">
        <i class="fa-solid fa-wand-magic-sparkles icon-blaze-y7p4"></i>
        <h4>Intentional visuals</h4>
        <p>Gradient glow, clean hierarchy, and focused messaging to spotlight the experience without clutter.</p>
      </div>
      <div class="feature-card-f0n5">
        <i class="fa-solid fa-gauge-high icon-blaze-y7p4"></i>
        <h4>Instant launch</h4>
        <p>Lightweight HTML5 shells keep load times short and battery use lean across phones and desktops.</p>
      </div>
      <div class="feature-card-f0n5">
        <i class="fa-solid fa-shield-halved icon-blaze-y7p4"></i>
        <h4>Responsible by design</h4>
        <p>18+ framing, plain-language disclaimers, and zero payment flows keep expectations clear.</p>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact-slab-u5c7">
  <div class="shell-wrap-z4m2">
    <h2 class="section-title-m3y2 text-center mb-1">Get in touch</h2>
    <p class="section-sub-p0c6 text-center">Tell us what you’re launching, and we’ll tailor the Gogorollz shell for your campaign.</p>
    <div class="contact-grid-o7n3">
      <div class="contact-card-p8v4">
        <h4>Project details</h4>
        <p><strong>Email:</strong> <a href="mailto:hello@gogorollz.com" class="link-accent-m8q5">hello@gogorollz.com</a></p>
        <p><strong>Use case:</strong> Campaign tests, previews, or partner handoffs</p>
        <p><strong>Rhythm:</strong> Monday–Friday, 9:00 AM – 5:00 PM (PST)</p>
        <p><strong>Response:</strong> Typically within one business day</p>
      </div>
      <form id="hubForm" class="contact-form-h4k0" novalidate>
        <input type="text" id="hubName" placeholder="Your name or team" required minlength="2" maxlength="60">
        <input type="email" id="hubEmail" placeholder="you@example.com" required>
        <textarea id="hubMessage" rows="5" placeholder="Share goals, timelines, or links to creatives" required></textarea>
        <button type="submit" class="btn-main-m2p9">Send message</button>
        <p id="hubStatus" class="form-status-h1m6" aria-live="polite"></p>
      </form>
    </div>
  </div>
</section>

<section id="reviews" class="quote-band-c9x8">
  <div class="shell-wrap-z4m2">
    <h2 class="section-title-m3y2 mb-1 text-center">What partners say</h2>
    <p class="section-sub-p0c6 text-center">Feedback on the Gogorollz shell.</p>
    <div class="quote-grid-f5z2">
      <div class="quote-card-d3q1">
        <p class="quote-text-n2a6">“We swapped links mid-call and it loaded instantly—perfect for reviewing creatives live.”</p>
        <h5 class="quote-author-e4v7">— Mira K.</h5>
      </div>
      <div class="quote-card-d3q1">
        <p class="quote-text-n2a6">“The responsible-play framing is crystal clear and keeps compliance happy.”</p>
        <h5 class="quote-author-e4v7">— Devon L.</h5>
      </div>
      <div class="quote-card-d3q1">
        <p class="quote-text-n2a6">“On mobile it just works—no extra noise, just the experience we need to show.”</p>
        <h5 class="quote-author-e4v7">— Priya R.</h5>
      </div>
      <div class="quote-card-d3q1">
        <p class="quote-text-n2a6">“Feels premium without slowing down our test traffic—exactly what we needed.”</p>
        <h5 class="quote-author-e4v7">— Carlos J.</h5>
      </div>
    </div>
  </div>
</section>

<section id="disclaimer-block" class="notice-slab-n7b6" aria-labelledby="disclaimer-title">
  <div class="shell-wrap-z4m2">
    <div class="notice-box-a9r0 mx-auto">
      <h2 id="disclaimer-title" class="section-title-m3y2">
        <i class="fas fa-circle-exclamation me-2"></i> Responsible play notice
      </h2>
      <p class="section-sub-p0c6">
        <strong>Gogorollz</strong> hosts free-to-play, social casino style browser experiences.
        There are <strong>no monetary features, deposits, or prizes</strong> anywhere on this site.
        Access is intended for users aged <strong>18+</strong>. Please take breaks and play responsibly.
      </p>
      <a href="<?php echo esc_url( home_url('/disclaimer') ); ?>" class="notice-btn-j5r4">Review the full disclaimer</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
