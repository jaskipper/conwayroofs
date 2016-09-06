

<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="grow">
        <span class="cslogoheader"></span>
        <a href="./" class="navbar-brand">Conway & Son Roofing<span class="hddiv"> | </span><span class="hdphone"><i><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
 (706) 235-7333</i></span></a>
      </div>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right',]);
      endif;
      ?>

    </nav>
  </div>
</header>
