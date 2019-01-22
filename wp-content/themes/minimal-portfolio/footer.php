<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minimal-portfolio
 */

?>
<?php 
	$minimal_portfolio_footer_facebook_link = minimal_portfolio_get_option( 'minimal_portfolio_footer_facebook_link' );
	$minimal_portfolio_footer_twitter_link = minimal_portfolio_get_option( 'minimal_portfolio_footer_twitter_link' );
	$minimal_portfolio_footer_google_plus_link = minimal_portfolio_get_option( 'minimal_portfolio_footer_google_plus_link' );
	$minimal_portfolio_footer_youtube_link = minimal_portfolio_get_option( 'minimal_portfolio_footer_youtube_link' );
	$minimal_portfolio_footer_instagram_link = minimal_portfolio_get_option( 'minimal_portfolio_footer_instagram_link' );
	$minimal_portfolio_backto_top_status = minimal_portfolio_get_option( 'minimal_portfolio_backto_top_status' );
	$minimal_portfolio_copyright_author = minimal_portfolio_get_option( 'minimal_portfolio_copyright_author' );
?>
	<footer id="colophon" class="site-footer">
	<?php 

            if ( is_active_sidebar( 'footer-1' ) ||
                 is_active_sidebar( 'footer-2' ) ||
                 is_active_sidebar( 'footer-3' ) ||
                 is_active_sidebar( 'footer-4' ) ) :
         
         get_template_part( 'template-parts/footer/widgets' );
         
         endif; ?>
		 <div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="site-info">
						<?php if( !empty( $minimal_portfolio_footer_facebook_link ) ||  !empty( $minimal_portfolio_footer_twitter_link ) || !empty( $minimal_portfolio_footer_google_plus_link ) || !empty( $minimal_portfolio_footer_youtube_link ) || !empty( $minimal_portfolio_footer_instagram_link ) ): ?>
							<li class="social-links">
								<ul class="links-wrap list-inline">
								<?php if( !empty( $minimal_portfolio_footer_facebook_link ) ): ?>
									<li class="facebook list-inline-item">
										<a href="<?php echo esc_url( $minimal_portfolio_footer_facebook_link ); ?>">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
								<?php endif; ?>
								<?php if( !empty( $minimal_portfolio_footer_twitter_link ) ): ?>
									<li class="twitter list-inline-item">
										<a href="<?php echo esc_url( $minimal_portfolio_footer_twitter_link ); ?>">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
								<?php endif; ?>
								<?php if( !empty( $minimal_portfolio_footer_google_plus_link ) ): ?>
									<li class="google_plus list-inline-item">
										<a href="<?php echo esc_url( $minimal_portfolio_footer_google_plus_link ); ?>">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								<?php endif; ?>	
								<?php if( !empty( $minimal_portfolio_footer_youtube_link ) ): ?>
									<li class="youtube list-inline-item">
										<a href="<?php echo esc_url( $minimal_portfolio_footer_youtube_link ); ?>">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
										</a>
									</li>
								<?php endif; ?>	
								<?php if( !empty( $minimal_portfolio_footer_instagram_link ) ): ?>
									<li class="instagram list-inline-item">
										<a href="<?php echo esc_url( $minimal_portfolio_footer_instagram_link ); ?>">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								<?php endif; ?>	
								</ul>
							</li>
							<?php endif; ?>
							<?php if( !empty( $minimal_portfolio_copyright_author ) ): ?>
							<li class="copyright">
								
								<?php if ( ! empty( $minimal_portfolio_copyright_author ) ) : ?>
    
            						<span><?php echo wp_kses_data( $minimal_portfolio_copyright_author ); ?></span> 
    
    							<?php endif; ?>
								<a href="<?php echo esc_url( __( 'http://abileweb.com/', 'minimal-portfolio' ) ); ?>"><?php printf( esc_html__( 'Designed by %s', 'minimal-portfolio' ), 'Abileweb' ); ?></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php if( $minimal_portfolio_backto_top_status ): ?>
	<a href="#page" class="back-to-top" id="back-to-top"><i class="icon-arrow-up"></i></a>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
