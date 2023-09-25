<section class="testimonials">
  <div class="container">
    <h2 class="title title-white" data-anim="fadeInLeft"><?php the_field('testimonials_title'); ?></h2>
    <div class="testimonials__row">
    <?php if( have_rows('testimonials_items') ): $testimonials_index = 0; ?>
    <?php while( have_rows('testimonials_items') ): the_row(); $testimonials_index++; ?>
      <div class="testimonials__item" data-anim="fadeInUp" data-anim-delay=".2">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43" viewBox="0 0 60 43" fill="none">
          <path opacity="0.5" d="M0 16.0714C0 7.19196 7.19196 0 16.0714 0H17.1429C19.5134 0 21.4286 1.91518 21.4286 4.28571C21.4286 6.65625 19.5134 8.57143 17.1429 8.57143H16.0714C11.933 8.57143 8.57143 11.933 8.57143 16.0714V17.1429H17.1429C21.8705 17.1429 25.7143 20.9866 25.7143 25.7143V34.2857C25.7143 39.0134 21.8705 42.8571 17.1429 42.8571H8.57143C3.84375 42.8571 0 39.0134 0 34.2857V30V25.7143V16.0714ZM34.2857 16.0714C34.2857 7.19196 41.4777 0 50.3571 0H51.4286C53.7991 0 55.7143 1.91518 55.7143 4.28571C55.7143 6.65625 53.7991 8.57143 51.4286 8.57143H50.3571C46.2188 8.57143 42.8571 11.933 42.8571 16.0714V17.1429H51.4286C56.1562 17.1429 60 20.9866 60 25.7143V34.2857C60 39.0134 56.1562 42.8571 51.4286 42.8571H42.8571C38.1295 42.8571 34.2857 39.0134 34.2857 34.2857V30V25.7143V16.0714Z" fill="#FDC236"/>
        </svg>
        <p><?php the_sub_field('text'); ?></p>
        <h6><?php the_sub_field('name'); ?></h6>
        <span><?php the_sub_field('subtext'); ?></span>
        <img src="<?php the_sub_field('image'); ?>" alt="">
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>