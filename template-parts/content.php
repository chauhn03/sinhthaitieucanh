<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sinhthaitieucanh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>   
    <h1>Content</h1>
	  <div class="post-feature-image-contaner">
        <?php if ( has_post_thumbnail() ): ?> 
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'thumbnail' ); // Medium resolution (default 300px x 300px max) ?>         
                    </a>                
         <?php endif; ?>
    </div>
    <div class="entry-summary-container">
        	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
<!--
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php sinhthaitieucanh_posted_on(); ?>
		</div> .entry-meta 
		<?php endif; ?>
                -->
                
	</header><!-- .entry-header -->

	<div class="entry-summary">                
		<?php echo get_excerpt(); ?>
                ... <a href="<?php the_permalink(); ?>">xem thêm</a>
	</div><!-- .entry-summary -->
    </div>
<!--
	<footer class="entry-footer">
		<?php  sinhthaitieucanh_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-## -->
