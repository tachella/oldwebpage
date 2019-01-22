<?php
/**
 * The main template file of frontpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minimal-portfolio
 */

get_header(); 
$minimal_portfolio_portfolio_content_title = minimal_portfolio_get_option( 'minimal_portfolio_portfolio_content_title' );
?>
<?php if( get_header_image() ) : ?>
	<div class="header-banner"> 
		<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	</div>
<?php endif; ?>
<?php if( !empty( $minimal_portfolio_portfolio_content_title ) ): ?> 
	<div class="portfolio-title-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6"><div class="title-wrap"><?php echo wp_kses_post( $minimal_portfolio_portfolio_content_title ); ?></div></div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
<?php endif; ?>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php if ( have_posts() ) :
			
								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/page/content' );
					
								endwhile;
								
							else :
			
								get_template_part( 'template-parts/content', 'none' );
			
						endif; ?>
					</main>
				</div>
			</div>
		</div>
	</div>
</div>
					
<?php get_footer(); ?>