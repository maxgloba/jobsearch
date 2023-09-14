<footer id="main-footer" class="main-footer">
  <div class="container">
    <div class="main-footer__logo">
      <a href="<?php echo home_url(); ?>"><?php the_field('logo', 'option'); ?></a>
      <p><?php the_field('slogan', 'option'); ?></p>
    </div>
    <nav class="main-footer__nav">
      <button class="scrollTo" data-scroll-to="about">About us</button>
      <button class="scrollTo" data-scroll-to="services">Our services</button>
      <button class="scrollTo" data-scroll-to="projects">our projects</button>
      <button class="scrollTo" data-scroll-to="testimonials">testimonials</button>
      <button class="scrollTo" data-scroll-to="experts">experts</button>
      <button class="scrollTo" data-scroll-to="contacts">contact us</button>
		</nav>
    <span>All rights reserved © LLC JobSearch 2023</span>
  </div>
</footer>
