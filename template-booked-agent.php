<?php /**
 *  Template Name: Booked Agent
 */
get_header(); ?>
<div class="container mt-5">
  <div class="row mt-5">
    <div class="col-md-12 mt-5">
      <?php echo do_shortcode('[booked-profile]'); ?>
    </div>
    <div class="col-md-12 mt-5">
      <?php echo do_shortcode('[booked-calendar]'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>