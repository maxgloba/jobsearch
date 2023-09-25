<section class="contacts">
  <div class="container">
    <h2 class="title" data-anim="fadeInRight"><?php the_field('contacts_title'); ?></h2>
    <div class="contacts__row">
      <div class="contacts__info" data-anim="fadeInLeft" data-anim-delay=".2">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 30 40" fill="none">
            <g clip-path="url(#clip0_522_514)">
              <path d="M29.5 15C29.5 16.6086 28.9581 18.5761 28.0485 20.7308C27.1424 22.8773 25.8885 25.1699 24.5031 27.4173C21.7327 31.9113 18.4602 36.1858 16.4615 38.6872C15.7008 39.6328 14.2996 39.6329 13.5388 38.6876C11.5401 36.1862 8.26744 31.9115 5.49691 27.4173C4.11149 25.1699 2.85762 22.8773 1.95148 20.7308C1.04186 18.5761 0.5 16.6086 0.5 15C0.5 6.99489 6.99489 0.5 15 0.5C23.0051 0.5 29.5 6.99489 29.5 15ZM18.8891 11.1109C17.8576 10.0795 16.4587 9.5 15 9.5C13.5413 9.5 12.1424 10.0795 11.1109 11.1109C10.0795 12.1424 9.5 13.5413 9.5 15C9.5 16.4587 10.0795 17.8576 11.1109 18.8891C12.1424 19.9205 13.5413 20.5 15 20.5C16.4587 20.5 17.8576 19.9205 18.8891 18.8891C19.9205 17.8576 20.5 16.4587 20.5 15C20.5 13.5413 19.9205 12.1424 18.8891 11.1109Z" fill="#FDC236" stroke="#242424"/>
            </g>
          </svg>
          <a class="contacts__decoration" target="_blank" href="https://www.google.com/maps/search/<?php the_field('contacts_address'); ?>"><?php the_field('contacts_address'); ?></a>
        </div>
        <?php if( have_rows('contacts_phones') ): $phone_index = 0; ?>
          <?php while( have_rows('contacts_phones') ): the_row(); $phone_index++; ?>
            <div>
              <?php the_sub_field('icon'); ?>
              <a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if( have_rows('contacts_smi') ): $social_index = 0; ?>
          <?php while( have_rows('contacts_smi') ): the_row(); $social_index++; ?>
            <div>
            <?php the_sub_field('icon'); ?>
            <a class="contacts__decoration" target="_blank" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link'); ?></a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?> 
      </div>
      <div class="form" data-anim="fadeInRight" data-anim-delay=".4">
        <?php echo do_shortcode( '[contact-form-7 id="0f5241b" title="Contacts Form"]' ); ?>
      </div>
    </div>
  </div>
</section>