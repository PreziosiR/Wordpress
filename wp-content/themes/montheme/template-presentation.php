<?php
/*
Template Name: presentation
*/ get_header(); ?>
<head>
  <link rel="stylesheet" href="../../wp-content/themes/montheme/css/style_presentation.css">
</head>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">


      <!-- Navigation & Intro -->
      <header>

          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
              <div class="container">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mr-auto smooth-scroll">
                          <li class="nav-item">
                              <a class="nav-link" href="#home">Home
                                  <span class="sr-only">(current)</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#about" data-offset="90">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#features" data-offset="90">Features</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#services" data-offset="90">Services</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#opinions" data-offset="30">Opinions</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#team" data-offset="90">Team</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#contact" data-offset="90">Contact</a>
                          </li>
                      </ul>
                      <!-- Social Icon  -->
                      <ul class="navbar-nav nav-flex-icons">
                          <li class="nav-item">
                              <a class="nav-link">
                                  <i class="fa fa-facebook light-green-text-2"></i>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link">
                                  <i class="fa fa-twitter light-green-text-2"></i>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link">
                                  <i class="fa fa-instagram light-green-text-2"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <!-- Video -->
          <section class="view intro-video">
              <video poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay muted loop>
                  <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4">
              </video>
              <div class="hm-gradient">
                  <div class="full-bg-img">
                      <div class="container flex-center">
                          <div class="row pt-5 mt-3">
                              <div class="col-md-12 white-text text-center smooth-scroll">
                                  <div class="wow fadeInDown" data-wow-delay="0.2s">
                                      <h3 class="display-3 font-bold white-text mb-2">Creative Agency</h3>
                                      <hr class="hr-light my-4">
                                      <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur, nihil voluptatem.
                                      </h4>
                                  </div>
                                  <a href="#about" data-offset="90" class="btn btn-rounded btn-outline-white wow fadeInUp" data-wow-delay="0.2s">
                                      <i class="fa fa-home"></i> Visit us</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

      </header>
      <!-- Navigation & Intro -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
