#Prettify-Preview-Code
=====================
add code javascript 

<code>
jQuery(document).ready(function($)
{
    $('.content pre, table code').addClass('prettyprint');
    prettyPrint();
});
</code>


#Use code preview

<code>
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
</code>
