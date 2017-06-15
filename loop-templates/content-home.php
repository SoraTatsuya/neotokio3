<?php
/**
 * Partial template for content in index.php
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<!-- <div class="card mb-3">
		  <img class="card-img-top" src="<?php //echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="Card image cap">
		  <div class="card-block">
				<?php //the_title( sprintf( '<h4 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h4>' ); ?>
				<p class="card-text"><small class="text-muted"><?php //understrap_posted_on(); ?></small></p>
		    <p class="card-text"><?php //the_excerpt(); ?></p>

		  </div>
		</div> -->

		<div class="card card-inverse" id="home">
		  <img class="card-img" src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="Card image">
		  <div class="card-img-overlay">
		    <h4 class="card-title"><?php the_title( sprintf( '<h4 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h4>' ); ?></h4>
		    <p class="card-text"><small class="text-muted"><?php understrap_posted_on(); ?></small></p>
		  </div>
		</div>


	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
