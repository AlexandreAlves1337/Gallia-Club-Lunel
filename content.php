<?php
/**
 * The template for displaying content.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
$edge_settings = edge_get_theme_options(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
		<?php
		$edge_blog_post_image = $edge_settings['edge_blog_post_image'];
		if( has_post_thumbnail() && $edge_blog_post_image == 'on') { ?>
			<div class="post-image-content">
				<figure class="post-featured-image">
					<a href="<?php the_permalink();?>" title="<?php echo the_title_attribute('echo=0'); ?>">
					<?php the_post_thumbnail( 'une' ); ?><div class="title-image"><h2 class="entry-title"><?php the_title();?></h2><span class="posted-on">
				<?php the_time( get_option( 'date_format' ) ); ?></span></div>
					</a>
				</figure><!-- end.post-featured-image  -->
			</div> <!-- end.post-image-content -->
		<?php } ?>

		</article><!-- end .post -->