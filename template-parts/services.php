<section class="services py-5">
  <div class="container">
    <div class="row align-items-start justify-content-center py-3">
      <?php if ( have_rows('services','option') ):?>
      <?php while( have_rows('services','option') ) : the_row(); ?>
      <div class="col-md-4">
        <div class="blurb" data-aos="zoom-in">
          <a href="#!" data-toggle="modal" data-target="#<?php the_sub_field('service_name'); ?>"><img src="<?php 
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

<!-- Modal -->
<?php if ( have_rows('services','option') ):?>
<?php while( have_rows('services','option') ) : the_row(); ?>
<div class="modal fade" id="<?php the_sub_field('service_name'); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('service_name'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php the_sub_field('service_info'); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; 
endif; ?>
<!-- End modal -->
</section>