<?php
  /*
    Plugin Name: Caroussel
    Description: Ce plugin affiche un caroussel via un shortcode placé dans le WYSIWYG
  */
  // On initialise le shortcode
  add_shortcode('caroussel', 'displayCaroussel');
  // On initialise la fonction qui est appelé via le shortcode_atts
  function displayCaroussel($atts){
    // On initialise un tableau vide
    $array = array();
    // On boucle sur nos attributs
    foreach($atts as $key => $value){
      $pos = strpos($key, 'img');
      if($pos === 0){
        $array[$key] = $value;
      }
    }
    $a = shortcode_atts($array, $atts);
    // On boucle sur notre array afin d'affiche le Caroussel
    $toto .= "<div id='carousel-example-3' class='carousel slide carousel-fade white-text' data-ride='carousel' data-interval='false'>";
    $toto .= "<ol class='carousel-indicators'>";
    for ($i = 1; $i <= count($array); $i++) {
      if($i === 1){
        $toto .= "<li data-target='#carousel-example-3' data-slide-to='$i - 0' class='active'></li>";
      } else {
        $toto .= "<li data-target='#carousel-example-3' data-slide-to='$i'></li>";
      }

    }
    $toto .= "</ol>";
    $toto .= "<div class='carousel-inner' role='listbox'>";
    $count = 0;
    foreach($array as $key => $value){
      $url = get_attachment_url_by_slug($value);
      if(empty($url)){
        $url = "http://192.168.33.10/wp-content/uploads/2018/01/344161-night-wallpaper-1920x1200-mobile.jpg";
      }
      if($count === 0){
        echo $url;
        $toto .= "<div class='carousel-item active view hm-black-light' style='background-image: url($url); background-repeat: no-repeat; background-size: cover;'>";
      } else {
        $toto .= "<div class='carousel-item view hm-black-light' style='background-image: url($url); background-repeat: no-repeat; background-size: cover;'>";
      }
      $count++;
      $toto .= "<div class='full-bg-img flex-center white-text'>";
      $toto .= "<ul class='animated fadeInUp col-md-12'>";
      $toto .= "<li>";
      $toto .= "<h1 class='h1-responsive flex-item font-bold'>Bienvenue sur notre site</h1>";
      $toto .= "<li><p class='flex-item'>Un site propulsé par Wordpress</p></li>";
      $toto .= "<li><a href='#' class='btn btn-primary waves-effect' rel='nofollow'>Decouvrir</a></li>";
      $toto .= "</ul>";
      $toto .= "</div>";
      $toto .= "</div>";
    }
    $toto .= "<a class='carousel-control-prev' href='#carousel-example-3' role='button' data-slide='prev'>";
    $toto .= "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
    $toto .= "<span class='sr-only'>Previous</span>";
    $toto .= "</a>";
    $toto .= "<a class='carousel-control-next' href='#carousel-example-3' role='button' data-slide='next'>";
    $toto .= "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
    $toto .= "<span class='sr-only'>Next</span>";
    $toto .= "</a>";
    $toto .= "</div>";
    return $toto;
  }

  function get_attachment_url_by_slug( $slug ) {
    $args = array(
      'post_type' => 'attachment',
      'name' => sanitize_title($slug),
      'posts_per_page' => 1,
      'post_status' => 'inherit',
    );
    $_header = get_posts( $args );
    $header = $_header ? array_pop($_header) : null;
    return $header->guid;
  }
