<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<?php wpstrap_breadcrumbs( 'page' ); ?>
		<?php if ( have_posts() ) : ?>	
			<?php while ( have_posts() ) : the_post(); ?>				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php wpstrap_single_header( 'page' ); ?>
					<div class="wysiwyg">
						<?php the_content(); ?>
					</div>
					<?php 
					if( wpstrap_opt( 'show_page_comments' ) == '1' ) { 
						comments_template();
					}
					?>
				</div>				
			<?php endwhile; ?>			
		<?php endif; ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>