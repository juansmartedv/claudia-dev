<section class="contact-me py-5">
  <div class="container">
    <!-- row -->
    <div class="row banner align-items-center" data-aos="fade-right">
      <div class="col-md-4 banner-pic" >
        <img src="<?php $imgBanner = get_field('image_banner','option');
          if ( $imgBanner ) {
            echo $imgBanner;
          } else {
            echo img_path . '396021-10151188804145188-847040187-22945951-1693049455-n.jpg';
          }
        
        ?>">
      </div>
      <div class="col-md-8">
        <div class="banner-content py-5">
          <?php the_field('banner_text','option'); ?>
        </div>
      </div>
    </div> <!-- endrow -->

    <!-- row -->
    <div class="row py-5">
      <div class="col-md-10 mx-auto">
        <div class="welcome mt-5">
          <img src="<?php echo img_path; ?>bienvenido.svg" alt="Bienvenido">
        </div>
        <div class="welcome-sub mt-5 w-50 mx-auto">
          <p>Contáctame para atender cualquier duda y asesorarte
          con cualquier servicio o paquete que buscas.</p>
        </div>
      </div>
    </div>
    <!-- endrow -->

    <div class="contact-form">
      <div class="row align-items-start">

        <div class="col-md-4" data-aos="fade-left">
          <div class="contact-info d-flex flex-column align-items-center mb-5">
            <img src="<?php echo img_path; ?>tlf-icon.svg" alt="phone">
            <p><?php the_field('phone_number','option'); ?></p>
          </div>

          <div class="contact-info d-flex flex-column align-items-center">
            <img src="<?php echo img_path; ?>mail-icon.svg" alt="mail">
            <p><?php the_field('mail','option'); ?></p>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in">
          <!-- contact form -->
          <?php echo do_shortcode('[contact-form-7 id="9" title="Contáctame"]'); ?>
          <!-- end contact-form -->
        </div>

        <div class="col-md-4">

        </div>

      </div>
    </div>

  </div>
</section>