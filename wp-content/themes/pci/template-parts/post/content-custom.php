<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage pci
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(['article-pci']); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header entry-header-pci">
		<?php

		if ( is_single() ) {
			the_title( '<h1 class="entry-title pci-post-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content entry-content-pci">		
		<div class="post-text">	
			<div class="entry-content-meta">							
				<?php 
					if ( 'post' === get_post_type() ) {
						echo '<div class="entry-meta">';
						if ( is_single() ) {
							twentyseventeen_posted_on();
						} else {
							echo twentyseventeen_time_link();
							twentyseventeen_edit_link();
						};
						echo '</div><!-- .entry-meta -->';
					};
				?>	
			</div>					
				</div>
			</div>					
				
			<?php the_content(  ) ?>		
			
			<div class="entry-content-footer"><!-- .entry-content-below -->
			<div class="footer">
				<h3 class="date-title"><i class="fa fa-2x fa-calendar"></i>Date</h3>
				<?php 
					$dates = explode(",", get_field('data', false, false));				
					foreach ($dates as $key => $date) {				
						echo "<span class=\"date-single\">" . $date . "</span>";
					}			
				?>
			</div>				
		</div><!-- .entry-content-footer --> 	
		</div>
	</div><!-- .entry-content -->
	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
