<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

<div class="wrapper" id="wrapper-index">
	<div class="container">
		
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="header">
			<div class="img">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_mikuexpo.png" alt="logo">
			</div>
		</div>

		<div class="row">
			<div class="col-lg 12">

				<!-- Do the left sidebar check and opens the primary div -->
				<?php //get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

				<main class="site-main" id="main">

					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'loop-templates/content-home', get_post_format() );
							?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content-home', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->

				<!-- The pagination component -->
				<?php //understrap_pagination(); ?>

			</div>
		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

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
