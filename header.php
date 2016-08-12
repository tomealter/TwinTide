<?php
/**
 * Theme: twintide
 * 
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package flat-bootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,500,300' rel='stylesheet' type='text/css'> 
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<header id="masthead" class="site-header" role="banner">
		
		<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand smoothscroll" href="http://twintide.com#landing"><img src="http://twintide.com/wp-content/uploads/2015/10/logo1.png" alt="twintide logo"</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://twintide.com#about" class="smoothscroll">ABOUT</a></li>
                <li><a href="http://twintide.com#music" class="smoothscroll">MUSIC</a></li>
                <li><a href="http://twintide.com#team" class="smoothscroll">TEAM</a></li>
                <li><a href="http://twintide.com#contact" class="smoothscroll">CONTACT</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
		


	</header><!-- #masthead -->

	<?php // Set up the content area (but don't put it in a container) ?>	
	<div id="content" class="site-content">
