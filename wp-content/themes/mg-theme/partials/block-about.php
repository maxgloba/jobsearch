<section class="about">
  <div class="container">
    <h2 class="title" data-anim="fadeInLeft"><?php the_field('about_title'); ?></h2>
    <div class="about__row">
      <img data-anim="fadeInRight" src="<?php the_field('about_image'); ?>" alt="">
      <div class="about__info">
        <?php the_field('about_text'); ?>
        <button class="btn scrollTo" data-scroll-to="contacts" data-anim="fadeInUp" data-anim-delay=".4">contact us</button>
      </div>
    </div>
  </div>
</section>