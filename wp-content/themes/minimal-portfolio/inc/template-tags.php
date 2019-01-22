<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package minimal-portfolio
 */

//post author
if( ! function_exists( 'minimal_portfolio_post_author' ) ):
	
	function minimal_portfolio_post_author(){
		
		$author_wrap = sprintf( '<a href="%s"><div class="avatar-wrap"><i class="icon-user"></i></div><span class="author-name">'.esc_html( get_the_author() ).'</span></a>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) );
		
		echo wp_kses_post( $author_wrap );
	}
	
endif;

//post date
if( ! function_exists( 'minimal_portfolio_post_date' ) ):
	
	function minimal_portfolio_post_date(){
		$archive_year  = get_the_time('Y'); 
		$archive_month = get_the_time('m'); 
		$archive_day   = get_the_time('d'); 
		$time_link = get_day_link( $archive_year, $archive_month, $archive_day);
		
		$date_wrap = sprintf('<a href="%1$s" class="post-date">%2$s</a>', esc_url( $time_link ), esc_html( get_the_date() ) );
		
		echo wp_kses_post( $date_wrap );
	}

endif;

//post commnet 
if( ! function_exists( 'minimal_portfolio_post_comment' ) ):

	function minimal_portfolio_post_comment(){
	
		$cmt_link = get_comments_link( get_the_ID() );
		$num_comments = get_comments_number();
		if ( $num_comments == 0 ) {
			$comments = __( '0 Comments', 'minimal-portfolio' );
		} elseif ( $num_comments > 1 ) {
			$comments = $num_comments . __( ' Comments', 'minimal-portfolio' );
		} else {
			$comments = __('1 Comment', 'minimal-portfolio' );
		}
		echo "<a href='".esc_url( $cmt_link )."'>".esc_html( $comments )."</a>";
	}
	
endif;

//post categories
if( ! function_exists( 'minimal_portfolio_post_categories' ) ):
	function minimal_portfolio_post_categories(){
		$categories = get_the_category( get_the_ID() );
		$separator = ', ';
		if ( ! empty( $categories ) ) {
			$output = '<i class="fa fa-folder-o" aria-hidden="true"></i>';
			foreach( $categories as $category ) {
				/* translators: %s: category name */
        		$output .= '<a href="' .esc_url( get_category_link( $category->term_id ) ). '" alt="' .esc_attr( $category->name ). '">'. esc_html( $category->name ) .'</a>'.$separator;
				
    		}
			echo wp_kses_post( trim( $output, $separator ) );
		}
	}
endif;

//post tags
if( ! function_exists( 'minimal_portfolio_post_tags' ) ):
	
	function minimal_portfolio_post_tags(){
	
		$tags  = get_the_tag_list( sprintf( '<span>%s:</span>', __( 'Tags', 'minimal-portfolio' ) ), '' );
		
		echo  wp_kses_post( $tags );
	
	}

endif; 