<section class="packages py-5" style="background-image: url('<?php echo img_path; ?>406726-10151188804640188-847040187-22945952-225945673-n.jpg'); background-position: 150% 0;">
  <div class="container">
    <div class="row py-3">
      <div class="col-md-6 mx-auto">
        <img src="<?php echo img_path; ?>paquetes.svg" alt="paquetes" class="mb-3">
        <div class="slider-package" data-aos="fade-up">
        <!--Slider-->

        <?php if ( have_rows('slider','option') ) : ?>
        <?php while( have_rows('slider','option') ) : the_row(); ?>
          <div class="slider-element"> 
            <div class="slide-package py-2">
              <img src=" <?php $sliderImg = get_sub_field('slider_image');
                if ( $sliderImg ) {
                  echo $sliderImg;
                } else {
                  echo img_path . 'paquetes-icon.svg';
                }
              ?> " alt="package-icon">
              <div class="slide-title"><p><?php the_sub_field('slider_title'); ?></p></div>
              <div class="slide-content"><?php the_sub_field('slider_info'); ?></div>
            </div>
          </div>
        <?php endwhile;
        endif; ?>

        </div>
        <!--EndSlider-->
        <div class="packages-cta mt-5">
          <a href="<?php echo get_home_url() ?>/reservation" class="bubbly-button my-3">Reserva ahora</a>
        </div>
      </div>
    </div>
  </div>
</section>