<?php

	function ct_paging_nav($wp_query) {
		// Don't print empty markup if there's only one page.
		if ( $GLOBALS[$wp_query]->max_num_pages < 2 ) {
			return;
		}
	 
		$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );
	 
		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}
	 
		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
	 
		$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
	 
		// Set up paginated links.
		$links = paginate_links( array(
			'base'     => $pagenum_link,
			'format'   => $format,
			'total'    => $GLOBALS[$wp_query]->max_num_pages,
			'current'  => $paged,
			'mid_size' => 2,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => __( '&lsaquo; &lsaquo; &lsaquo;  Prev', 'adsagency' ),
			'next_text' => __( 'Next  &rsaquo; &rsaquo; &rsaquo;', 'adsagency' ),
		) );
		$total = $GLOBALS[$wp_query]->max_num_pages;
		if ( $links ) :
	 
		?>
		
		<ul class="pagination">
			<li><a href=""><?php echo "Pages ".$paged." of ".$total."" ?></a></li>
			<li><?php echo $links; ?></li>
		</ul>
		
		<?php
		endif;
		return $wp_query;
	}

?>