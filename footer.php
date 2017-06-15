<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-home-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="home-footer" id="colophon">

					<div class="home-info">
						<p>Copyright <span class="fa fa-copyright"></span> 2017 <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a> All Rights Reserved.<br>
						<small><em>Designed by <a href="#">SoraTatsuya</a></em></small></p>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
