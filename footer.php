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
        <a href="#!"><img src="<?php echo img_path; ?>wsp-icon.svg" alt="whatsapp"></a>
        <a href="#!"><img src="<?php echo img_path; ?>ig-icon.svg" alt="Instagram"></a>
        <a href="#!"><img src="<?php echo img_path; ?>linkedin-icon.svg" alt="Linkedin"></a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
