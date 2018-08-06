<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo('name');  ?> V1</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
<div class="container be-container">
    
    <!-- Tha actual location of our primary menu -->
<!-- Investigate different menu displays navbar-fixed-top navbar-static-top or none -->
    <div id="nav">
    <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <!-- investigate different logo sizes -->
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo Image" >
          </a>
        <!--
            To get the burger menu to work ensure the onClick action toggles the class referenced by container_id 

        -->
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" 
                onclick="document.getElementById('be-nav-header').classList.toggle('collapse');"
                aria-controls="bs" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        


        <?php
        wp_nav_menu( array(
                // Named in function.php register_nav_menus()
                'theme_location'    => 'primary',    
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse collapse bs123456 bst',
                'container_id'      => 'be-nav-header',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        </div>
      </div><!-- /.container-fluid -->
      
    </nav>
    <div class="jumbotron">
        <!-- <div class="col-md-offset-4 col-md-4 col-md-offset-4"> -->

            <h1> 
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <h5> 
                <?php bloginfo('description'); echo ('Coded in header.php'); ?> 
            </h5>
        <!-- </div> -->
    </div>
    <hr>
</div><!-- #nav -->

 