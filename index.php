<?php
// © 2012-2013, [ Abstract Codify ] Abstractcodify.com All Rights Reserved.
$site_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
$site_url .= '://'. $_SERVER['HTTP_HOST'];
$site_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prettify Code</title>
	<link rel=stylesheet href="<?php echo $site_url ?>prettify.css">
	<script type="text/javascript" src="https://gist.github.com/abstractcodify/6945704/raw/8c24ffc610d6f5de6ffa9c992030800249612b9c/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="<?php echo $site_url ?>prettify.js"></script>
</head>
<body>

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


<script>
	
/**
 * Apply google prettyprint to all <pre> elements within the
 * documentation.
 */
jQuery(document).ready(function($)
{
    $('.content pre, table code').addClass('prettyprint');
    prettyPrint();
});

</script>
	
</body>
</html>