<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minimal-portfolio
 */

get_header();
$minimal_portfolio_archive_blog_sidebar_sticky = minimal_portfolio_get_option( 'minimal_portfolio_archive_blog_sidebar_sticky' );
?>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main post-grid-layout">
			
					<?php if ( have_posts() ) : 
							/* Start the Loop */
							while ( have_posts() ) : the_post();
				
								get_template_part( 'template-parts/post/content' );
				
							endwhile;
			
							the_posts_pagination();
			
						else :
				
							get_template_part( 'template-parts/content', 'none' );
				
						endif;
					?>
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-lg-3<?php if( $minimal_portfolio_archive_blog_sidebar_sticky ): ?> sticky-sidebar<?php endif; ?>">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>