<footer id="main-footer" class="main-footer">
  <div class="container">
    <div class="main-footer__logo">
      <a href="<?php echo home_url(); ?>"><?php the_field('logo', 'option'); ?></a>
      <?php the_field('slogan', 'option'); ?>
    </div>
    <div class="main-footer__right">
      <nav class="main-footer__nav">
        <button class="scrollTo" data-scroll-to="about">About us</button>
        <button class="scrollTo" data-scroll-to="services">Our services</button>
        <button class="scrollTo" data-scroll-to="projects">our projects</button>
        <button class="scrollTo" data-scroll-to="testimonials">testimonials</button>
        <button class="scrollTo" data-scroll-to="experts">experts</button>
        <button class="scrollTo" data-scroll-to="contacts">contact us</button>
        <button id="<?php echo $modal_index; ?>">Datenschutzerklärung</button>
        <button id="<?php echo $modal_index; ?>">Impressum</button>
        <button id="<?php echo $modal_index; ?>">Haftungsausschluss</button>
      </nav>
      <small>All rights reserved © LLC JobSearch 2023</small>
    </div>
  </div>
</footer>

<?php if(get_field('footer_modals')): $modal_index = 0; ?>
  <?php while(get_field('footer_modals')) : $modal_index++; ?>
    <div class="modal__content" id="modal_<?php echo $modal_index; ?>">
      <button class="modal__close">
        <svg width="84" height="85" viewBox="0 0 84 85" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M81.2187 15.2188C84.4739 11.9635 84.4739 6.67708 81.2187 3.42188C77.9635 0.166667 72.677 0.166667 69.4218 3.42188L41.9999 30.8698L14.552 3.44792C11.2968 0.192708 6.01034 0.192708 2.75513 3.44792C-0.500081 6.70312 -0.500081 11.9896 2.75513 15.2448L30.203 42.6667L2.78117 70.1146C-0.474039 73.3698 -0.474039 78.6562 2.78117 81.9115C6.03638 85.1667 11.3228 85.1667 14.578 81.9115L41.9999 54.4635L69.4478 81.8854C72.703 85.1406 77.9895 85.1406 81.2447 81.8854C84.4999 78.6302 84.4999 73.3438 81.2447 70.0885L53.7968 42.6667L81.2187 15.2188Z" fill="#FDC236"/></svg>
      </button>
      <div class="modal__info">
        <?php the_sub_field('text'); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>