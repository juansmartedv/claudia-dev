<section id="about-me" class="about-me py-5" style="background: url('<?php echo img_path; ?>bg-1.svg')">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="<?php echo img_path; ?>sobremi.svg" alt="Sobre mi" class="pic">
        <?php the_field('bio', 'option'); ?>
      </div>
      <div class="col-md-6 pic" data-aos="fade-left">
        <img src="<?php 
        $imgBio = get_field('bio_pic', 'option');
        if ( $imgBio ){
          echo $imgBio;
        } else {
          echo img_path . '397225-10151188806455188-847040187-22945958-1602290701-n.jpg';
        }
        ?>" alt="bio-pic">
      </div>
    </div>
  </div>
</section>