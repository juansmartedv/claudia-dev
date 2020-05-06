<section class="services py-5">
  <div class="container">
    <div class="row align-items-start justify-content-center py-3">
      <?php if ( have_rows('services','option') ):?>
      <?php while( have_rows('services','option') ) : the_row(); ?>
      <div class="col-md-4">
        <div class="blurb" data-aos="zoom-in">
          <a href="#!"><img src="<?php 
            $imgService = get_sub_field('icon');
            if ( $imgService ) {
              echo $imgService;
            } else {
              echo img_path . 'conferencias-icon.svg';
            }
          ?>" alt="conferencias"></a>
          <a href="#!"><p><?php the_sub_field('service_name'); ?></p></a>
        </div>
      </div>
      <?php endwhile;
      endif; ?>

    </div>
  </div>
</section>