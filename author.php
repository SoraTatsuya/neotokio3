<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">

				<?php
				$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug',
					$author_name ) : get_userdata( intval( $author ) );
				?>

				<div class="author">
					<h1><?php echo esc_html( $curauth->nickname ); ?></h1> <span class="label-team">Author</span><hr>
						<div class="author-img">
							<img src="<?php echo get_avatar_url( $curauth->ID, array("size"=>300) ); ?>" alt="" class="img-team-fluid-round" />
						</div>
						<h3 class="author-title">Social Media</h3>
							<div class="social">
								<ul>
										<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-github"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-vimeo-square"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-twitch"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-wordpress"></i></a></li>
										<li><a href="#"><i class="fa fa-lg fa-soundcloud"></i></a></li>
								</ul>
							</div>
					<div class="author-desc">
						<h3 class="author-title">Profile</h3>
						<h5>Website</h5> <a href="<?php if ( ! empty(the_author_meta('user_url'))) { echo the_author_meta('user_url'); } ?>"><?php if ( ! empty(the_author_meta('user_url'))) { echo the_author_meta('user_url'); } ?></a>
						<h5>Description</h5>
						<p class="team-description">
							<?php
							if ( ! empty(the_author_meta('description'))) {
								echo the_author_meta('description');
							} else {
								echo 'Sorry, no description available.';
							}
							?>
						</p>
					</div>
				</div>
				<div class="author-posts">
					<h3 class="author-title">Posts by <?php if ( ! empty(esc_html( $curauth->nickname ))) { echo esc_html( $curauth->nickname ); } ?>:</h2>
						<?php $i = 1; ?>
						<!-- The Loop -->
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php if ($i == 3) { $i = 1; } ?>
								<?php if ($i == 1) { ?>
									<div class="card-group">
								<?php } ?>
									<div class="card">
								    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="Card image cap">
								    <div class="card-block">
								      <h4 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
								      <p class="card-text"><?php the_excerpt(); ?></p>
								    </div>
								    <div class="card-footer">
								      <small class="text-muted">Posted on <?php echo get_the_date() ?></small>
								    </div>
								  </div>
								<?php if($i == 3) {?>
								</div>
								<?php } ?>
								<?php $i++; ?>
							<?php endwhile; ?>

						<?php else : ?>

							<?php get_template_part( 'loop-templates/content', 'none' ); ?>

						<?php endif; ?>

						<!-- End Loop -->

					</ul>
				</div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
