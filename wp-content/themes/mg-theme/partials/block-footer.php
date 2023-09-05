<footer id="main-footer" class="main-footer">
  <div class="container">
    <div class="main-footer__logo">
      <a href="<?php echo home_url(); ?>"><?php the_field('logo', 'option'); ?></a>
      <p><?php the_field('slogan', 'option'); ?></p>
    </div>
    <nav class="main-footer__nav">
      <button data-section="about">About us</button>
      <button data-section="services">Our services</button>
      <button data-section="projects">our projects</button>
      <button data-section="testimonials">testimonials</button>
      <button data-section="experts">experts</button>
      <button data-section="contacts">contact us</button>
		</nav>
    <span>All rights reserved © LLC JobSearch 2023</span>
  </div>
</footer>
