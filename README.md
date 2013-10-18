###Install

	<?php
	$site_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
	$site_url .= '://'. $_SERVER['HTTP_HOST'];
	$site_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
	?>


`<script type="text/javascript" src="<?php echo $site_url ?>prettify.js"></script>`

`<link rel=stylesheet href="<?php echo $site_url ?>prettify.css">`
	
###Prettify-Preview-Code
add code javascript 


	jQuery(document).ready(function($)
	{
	    $('.content pre, table code').addClass('prettyprint');
	    prettyPrint();
	});


Use code preview


	<section class="content">
	<pre>
	// © 2012-2013, [ Abstract Codify ] Abstractcodify.com All Rights Reserved.
	function http_check( $url = '' ) 
	{
		if ( strpos( $url , 'http://' ) !== false ) 
		{
			return $url; 
		}
		else
		{
			return '//'.$url ;
		}
	}
	</pre>
	</section>



