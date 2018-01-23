<?php
/*
Template Name: presentation
*/ get_header(); ?>
<head>
  <link rel="stylesheet" href="../../wp-content/themes/montheme/css/style_presentation.css">
</head>
<div id="primary" class="content-area">


  <!-- Intro -->
  <header>
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
                    <h4 class="subtext-header mt-2 mb-4">With guys that do things for your things.
                    </h4>
                  </div>
                  <a href="#main" data-offset="90" class="btn btn-rounded btn-outline-white wow fadeInUp">
                    <i class="fa fa-info-circle"></i> Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </header>
      <!-- Intro -->

      <main id="main" class="site-main presentation">

        <div class="row">
          <div class="col-md-6">

            <!--Card Primary-->
            <div class="card indigo text-center z-depth-2">
              <div class="card-body">
                <p class="white-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                  erat a ante.</p>
                </div>
              </div>
              <!--/.Card Primary-->
              <br>
              <!--Card Danger-->
              <div class="card pink lighten-2 text-center z-depth-2">
                <div class="card-body">
                  <p class="white-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante.</p>
                  </div>
                </div>
                <!--/.Card Danger-->
                <br>
                <!--Card Success-->
                <div class="card info-color text-center z-depth-2">
                  <div class="card-body">
                    <p class="white-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                      erat a ante.</p>
                    </div>
                  </div>
                  <!--/.Card Success-->

                </div>

                <div class="col-md-6">

                  <!--Card Warning-->
                  <div class="card red lighten-1 text-center z-depth-2">
                    <div class="card-body">
                      <p class="white-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                        erat a ante.</p>
                      </div>
                    </div>
                    <!--/.Card Warning-->
                    <br>
                    <!--Card Info-->
                    <div class="card success-color text-center z-depth-2">
                      <div class="card-body">
                        <p class="white-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                          erat a ante.</p>
                        </div>
                      </div>
                      <!--/.Card Info-->
                      <br>
                      <!--Card Default-->
                      <div class="card mdb-color lighten-2 text-center z-depth-2">
                        <div class="card-body">
                          <p class="white-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                          </div>
                        </div>
                        <!--/.Card Default-->

                      </div>
                    </div>

                  </main><!-- #main -->
                </div><!-- #primary -->

                <?php
                get_footer();
