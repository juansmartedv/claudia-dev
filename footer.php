<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ClaudiaSiciliano
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	AOS.init();
</script>
<footer class="footer">
  <div class="container py-4">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6 mx-auto flex-row footer-social">
        <a href="https://wa.me/<?php the_field('whatsapp_number','option')?>?text=<?php $msg = get_field('whatsapp_chat_text','option'); echo urlencode($msg); ?>"><img src="<?php echo img_path; ?>wsp-icon.svg" alt="whatsapp" target="_blank"></a>
        <a href="https://instagram.com/<?php the_field('instagram', 'option'); ?>"><img src="<?php echo img_path; ?>ig-icon.svg" alt="Instagram" target="_blank"></a>
        <a href="https://linkedin.com/in/<?php the_field('linkedin', 'option'); ?>"><img src="<?php echo img_path; ?>linkedin-icon.svg" alt="Linkedin" target="_blank"></a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
