<section class="cta py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
       <?php the_field('cta_texto', 'option'); ?>

        <div class="call-to-action">
          <a href="<?php echo home_url();?>/reservation" style="color: white !important"><?php the_field('call_to_action', 'option'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>