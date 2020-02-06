<!DOCTYPE html5>
<html lang="en">
<head>
  	<meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title><?php the_title(); ?> - Trade System</title>
	<!-- Meta Tags -->
 	  <meta name="description" content="">
  	<meta name="author" content="">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

   <?php wp_head(); ?>
</head>
<body>

  <!-- Header Starts -->
  <header>
    <div class="container">
         <div class="header-top">
          <ul>
              <li><a href="<?php echo home_url('?lang=french') ?>"><b>Français</b></a></li>
              <li class="last"><a href="<?php echo home_url(); ?>">English</a></li>
          </ul>
        </div>
      </div>
    <nav class="navbar navbar-default navbar-custom">      
      <div class="container">       
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url('?lang=french'); ?>">
            <img src="<?php bloginfo('template_directory') ?>/inc/images/logo.png" alt="Trade System" class="img-responsive d-block d-width">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
          wp_nav_menu( 
            array(
             'theme_location'  => 'french-menu',
             'menu'            => 'main-menu',
             'container'       => 'ul',
             'menu_class'      => 'nav navbar-nav navbar-right',
           ) 
          ); 
          ?>
       
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Modal -->

  <!-- Header Ends -->