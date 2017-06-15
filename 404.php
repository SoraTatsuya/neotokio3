<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();
?>
<div class="wrapper" id="404-wrapper">

	<div class="container" id="content">

		<div class="row">

			<div class="content-area" id="primary">



					<main class="site-main" id="main" role="main">

						<div class="container">

						<div class="error" id="error">
			        <div class="error-title">
			          <h1>404</h1>
			        </div>
			        <div class="error-message">
			          <p>Ooooops, the page you're looking for does not exist.</p><hr>
								<p>Maybe try it again below on the a search.</p>
								<?php get_search_form(); ?><hr>
			          <p class="text-muted">You may want to head back to the homepage. If you think something is broken, report us your problem.</p>
			          <a class="btn btn-outline-primary" href="<?php echo get_home_url(); ?>" role="button">Go to homepage</a>
			          <a class="btn btn-outline-primary" href="mailto:Datenbanken@coop.ch" role="button">Report a Problem</a>
			        </div>
			      </div>

						</div>


			    <div class="background-img" id="404">
			      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/error/404.jpg" alt="404">
			    </div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div> <!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer('content'); ?>
