/*
Plugin Name: hello world
Plugin URI: http://github.com/helloworld
Description: Saves me time.
Version: 1.0
Author: Jordi
Author URI: http://github.com/helloworld
*/

<?php

function tutorial_hw_end($content) {

	$end_of_tut = <<<EOT

<p>wtf is that eot</p>

EOT;


$match = preg_match_all('/<div class=[\'*]?tutorial_image[\'*]?\s*<img src=[\'*]?.+\.(jpg|jpeg|png)[\'*]?(\s.+)?[(\s\/>)|(>)]\s*<\/div>/i', $content, $matches);

}
/*

if($match == 0)
{
	$theContent = preg_replace(/<img src=[\'*]?.+\.(jpg|jpeg|png)[\'*]?[(\s\/>)|(>)](\s.+)?/', '', $content);
}

*/
add_filter('the_content', 'tutorial_hw_end');


?>


<div class="tutorial_image">
	<img src="myImage.jpg" alt="" />
</div>