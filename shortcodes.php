<?php
/**
 * Share link shortcode
 */
function dojoconjapan2017_share_link( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'sns'      => false,
		'hashtags' => '',
		'via'      => '',
	), $atts );

	$url   = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	$title = get_the_title();
	$html  = '';

	if ( $a['sns'] == 'fb' || $a['sns'] == 'facebook' ) {
		$html .= '<a class="share-link share-link-facebook" href="https://www.facebook.com/sharer.php?u=' . $url . '" target="_blank">';
		$html .= $content ? $content : __( 'Share on Facebook', 'dojocon-japan-2017' );
		$html .= '</a>';

	} elseif ( $a['sns'] == 'tw' || $a['sns'] == 'twitter' ) {
		$html .= '<a class="share-link share-link-twitter" href="https://twitter.com/share?url=' . $url . '&text=' . $title;
		$html .= $a['hashtags'] ? '&hashtags=' . $a['hashtags'] : '';
		$html .= $a['via'] ? '&via=' . $a['via'] : '';
		$html .= '" target="_blank">';
		$html .= $content ? $content : __( 'Share on Twitter', 'dojocon-japan-2017' );
		$html .= '</a>';

	} elseif ( $a['sns'] == 'ln' || $a['sns'] == 'line' ) {
		$html .= '<a class="share-link share-link-line" href="http://line.me/R/msg/text/?' . $url . '" target="_blank">';
		$html .= $content ? $content : __( 'Share on LINE', 'dojocon-japan-2017' );
		$html .= '</a>';
	}

	return $html;
}
add_shortcode( 'share_link', 'dojoconjapan2017_share_link');
