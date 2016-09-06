<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="landing" class="parallax-window" data-parallax="scroll" data-speed="0.4" data-bleed="10" data-image-src="<?= get_template_directory_uri() . '/dist/images/smGAFTimberlineHD.jpg'; ?>">
      <div class="wrap container">
        <div id="conwaylogo" class="grow">
        </div>
      </div>
      <div class="bottomtab"><a href="#about"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></div>
    </div>
    <section id="about">
      <div class="wrap container skippersection">
        <h1>Welcome to Conway and Son Roofing!</h1>
        <hr class="center bgcolor"></hr>
        <p class="ababout">We are here for all of your roofing needs. Residential and Commercial Roofing, 24 Hour Emergency Service, Insurance Claims and more! We Stop Any Leak Any Where! Since 1969, Conway and Son has been and is the top Roofing company in Rome, NW Georgia and the Tri-State Area!</p>
        <div class="col-md-3 col-sm-3 col-xs-12 grow chorange" tabindex="0">
            <div class="roofers text-center">
            <span class="abicons icon-phone"></span>
            <p class="imgtitle">24/7 Emergency Available</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 grow chorange" tabindex="0">
            <div class="roofers text-center">
            <span class="abicons icon-tools"></span>
            <p class="imgtitle">Expert and Professional</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 grow chorange" tabindex="0">
            <div class="roofers text-center">
            <span class="abicons icon-medal"></span>
            <p class="imgtitle">Satisfaction Guarantee</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 grow chorange" tabindex="0">
            <div class="roofers text-center">
            <span class="abicons icon-signs"></span>
            <p class="imgtitle">Free Inspection</p>
        </div>
      </div>
    </section>
    <section id="services" class="cover">
      <div class="wrap container skippersection">
        <h1>Our Roofing Services</h1>
        <div class="row whatwedo">
          <div class="col-md-4 col-sm-12">
            <div class="wwdbox box1">
              <h2>Leaks and Repairs</h2>
              <div class="boximg">
                <img src="<?= get_template_directory_uri() . '/dist/images/roof-repair.jpg'; ?>" alt="Roof Repair"></img>
              </div>
              <ul>
                <li class="grow">Flat Roofs, Metal Roofs</li>
                <li class="grow">Shingles & Wood</li>
                <li class="grow">Chimney & Gutter Problems</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="wwdbox box2">
              <h2>Roof Installations</h2>
              <div class="boximg">
                <img src="<?= get_template_directory_uri() . '/dist/images/new-roof.jpg'; ?>" alt="Roof Repair"></img>
              </div>
              <ul>
                <li class="grow">Shingle, Metal & Flattops</li>
                <li class="grow">Reverse Pitch, Zero Slope</li>
                <li class="grow">We Fix Any Leak Any Where!</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div id="supplies" class="wwdbox box3">

              <h2>Roofing Supplies</h2>
              <div class="boximg">
                <img src="<?= get_template_directory_uri() . '/dist/images/roofing-materials.jpg'; ?>" alt="Roof Repair"></img>
              </div>
              <ul>
                <li class="grow">Shingles</li>
                <li class="grow">Panel's Etc.</li>
                <li class="grow">All Colors Available</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="conwayquote" class="parallax-window" data-parallax="scroll" data-bleed="10" data-speed="0.4" data-image-src="<?= get_template_directory_uri() . '/dist/images/missingshingles.jpg'; ?>">
      <div class="overlay">
        <p>"We Stop Any Leak Any Where!"</p>
      </div>
    </section>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
