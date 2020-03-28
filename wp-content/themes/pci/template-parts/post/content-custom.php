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
	<div class="single-post-container-pci">
	<?php

	if ( is_single() ) {
		the_title( '<h1 class="entry-title entry-title-pci">', '</h1>' );	
	} elseif ( is_front_page() && is_home() ) {
		the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	} else {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<?php if ( '' !== get_the_post_thumbnail() ) : ?>					
		<?php the_post_thumbnail( 'twentyseventeen-featured-image', array('class' => 'post-cstm-img') ); ?><!-- .post-thumbnail -->
	<?php endif; ?>	

	<div class="entry-content entry-content-container-pci">
		<ul class="entry-content-meta-pci">
			<li>
			<?php 
				if ( 'post' === get_post_type() ) {
					if ( is_single() ) {
						$catList = get_the_category( get_the_ID() );
						$categories = [];
						foreach ($catList as $cat) {
							$categories[] = $cat->name;
						}	
						echo implode(', ', $categories);	
					}				
				};
				?>	
			</li>
			<li>
				<?php 
					$dates = explode(",", get_field('data', false, false));				
					foreach ($dates as $key => $date) {				
						echo "<span class=\"date-single\">" . $date . "</span><br />";
					}			
				?>
			</li>
		</ul>	
		<div class="entry-content-pci">
			<?php the_content(  ) ?>							
		</div>				
	</div>					
				
								
	</div><!-- .single-post-container-pci -->
	<?php
	if ( is_single() ) {
		//twentyseventeen_entry_footer();		
	}
	?>

</article><!-- #post-## -->
