<?php
/*
  Plugin Name: Hello World
  Description: Do Hello World
*/
add_shortcode('hello', 'displayHelloWorld');
function displayHelloWorld($atts)
{
  $a = shortcode_atts(array(
    'size' => 10,
  ), $atts);
  $size = $a['size'];
  return '<p style="font-size:' . $size . 'px">Hello World</p>';
}
