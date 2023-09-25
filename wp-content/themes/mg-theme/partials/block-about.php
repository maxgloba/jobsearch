<?php if( get_field('about_title') || have_rows('about_items') ): ?>
  <section class="about">
    <div class="container">
      <?php if( get_field('about_title') ): ?>
        <h2 class="title" data-anim="fadeInLeft"><?php the_field('about_title'); ?></h2>
      <?php endif; ?>
      <?php if( have_rows('about_items') ): the_row(); ?>
        <div class="about__row">
          <img data-anim="fadeInRight" src="<?php the_sub_field('image'); ?>" alt="">
          <div class="about__info">
            <?php the_sub_field('text'); ?>
            <button class="btn scrollTo" data-scroll-to="contacts" data-anim="fadeInUp" data-anim-delay=".4"><?php the_field('contacts_menu_anchor'); ?></button>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>