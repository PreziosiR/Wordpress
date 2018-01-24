<?php
  /*
    Plugin Name: Mon plugin
    Description: Ma description
  */

  add_shortcode('hello', 'displayHelloWorld');
  function displayHelloWorld($atts){
    $a = shortcode_atts(array(
      'size' => 500,    
    ), $atts);
    $size = $a['size'];
    return '<p style="font-size:' . $size . 'px">Hello world </p>';
  }
