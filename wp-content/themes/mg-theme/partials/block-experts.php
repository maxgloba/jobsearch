<section class="experts">
  <div class="container">
    <h2 class="title" data-anim="fadeInLeft"><?php the_field('experts_title'); ?></h2>
    <p data-anim="fadeInLeft" data-anim-delay=".2"><?php the_field('experts_paragraph'); ?></p>
    <div class="experts__row">
      <?php if( have_rows('experts_modals') ): $experts_index = 0; ?>
      <?php while( have_rows('experts_modals') ): the_row(); $experts_index++; ?>
        <div class="experts__item" data-modal="experts_<?php echo $experts_index; ?>" data-anim="fadeInUp" data-anim-delay=".2">
          <div class="experts__info">
            <img src="<?php the_sub_field('image'); ?>" alt="">
            <h6><?php the_sub_field('name'); ?></h6>
            <span><?php the_sub_field('position'); ?></span>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php if( have_rows('experts_modals') ): $experts_index = 0; ?>
<?php while( have_rows('experts_modals') ): the_row(); $experts_index++; ?>
  <section class="modal" id="experts_<?php echo $experts_index; ?>">
    <div class="modal__content">
      <button class="modal__close">
        <svg width="84" height="85" viewBox="0 0 84 85" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M81.2187 15.2188C84.4739 11.9635 84.4739 6.67708 81.2187 3.42188C77.9635 0.166667 72.677 0.166667 69.4218 3.42188L41.9999 30.8698L14.552 3.44792C11.2968 0.192708 6.01034 0.192708 2.75513 3.44792C-0.500081 6.70312 -0.500081 11.9896 2.75513 15.2448L30.203 42.6667L2.78117 70.1146C-0.474039 73.3698 -0.474039 78.6562 2.78117 81.9115C6.03638 85.1667 11.3228 85.1667 14.578 81.9115L41.9999 54.4635L69.4478 81.8854C72.703 85.1406 77.9895 85.1406 81.2447 81.8854C84.4999 78.6302 84.4999 73.3438 81.2447 70.0885L53.7968 42.6667L81.2187 15.2188Z" fill="#FDC236"/></svg>
      </button>
      <div class="modal__info">
      <img class="modal__img" src="<?php the_sub_field('image'); ?>" alt="">
      <div class="experts__text">
        <h3><?php the_sub_field('name'); ?></h3>
        <h5><?php the_sub_field('position'); ?></h5>
        <p><?php the_sub_field('first_paragraph'); ?></p>
        <p><?php the_sub_field('second_paragraph'); ?></p>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php endif; ?>