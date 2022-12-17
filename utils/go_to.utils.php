<?php 

function go_to( $link ) {
	header( "Location: ". url_base() . $link );
}

?>