<header class="main-header">
  <div class="container">
	<a class="main-header__logo" href="<?php echo home_url(); ?>"><?php the_field('logo-header', 'option'); ?></a>
  <button class="burger">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <nav class="main-header__nav">
    <button data-section="about">About us</button>
    <button data-section="services">Our services</button>
    <button data-section="projects">our projects</button>
    <button data-section="testimonials">testimonials</button>
    <button data-section="experts">experts</button>
    <button data-section="contacts">contact us</button>
  </nav>
	</div>
</header>