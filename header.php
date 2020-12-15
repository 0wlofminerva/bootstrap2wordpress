<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordprerss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- Owl of Minerva Bootstrap Static code links -->

<!-- Bootstrap css -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

<!-- custom css -->
<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css"> -->



<!-- Custom Fonts Arista -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/AristaPro-Fat.otf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/Arista/AristaProAlternate-Hairline.otf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/Arista/AristaProIcons-SemiBold.otf">

<!-- Custom Fonts Roboto -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-Black.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-BlackItalic.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-Bold.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-BoldItalic.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-Light.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-LightItalic.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-Medium.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-MediumItalic.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-Regular.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-RegularItalic.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-Thin.ttf">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/roboto/Roboto-ThinItalic.ttf">

<!-- Custom Font Awesome -->
<script src="https://kit.fontawesome.com/ea529ee051.js" crossorigin="anonymous"></script>

<!-- merged MDB -->
<!-- MDB icon -->
<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assgitets/css/mdb.min.css">
<!-- Your custom styles (optional) -->
<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css"> -->
  
  <?php wp_head(); ?>

  	<!--[if lt IE 9]>
		<script scr="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script scr="https://oss.maxcd.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

    <!-- HEADER
    =================================================== -->
    <header>

        
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

      

      <div class="container">

        

        <nav class="navbar navbar-light bg-light">
              
          <a class="navbar-brand aristafat uppercase" href="index.html">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brand/Navbar_Logotype_0.svg" width="30" height="30" class="d-inline-block" alt="" loading="lazy">
          Owl of Minerva
          </a>
        </nav>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>
		  
		<!-- If the menu (WP admin area) is not set, them the "menu_class" is applied to "container". 
		In other words, it overwrites the "container_class". 
		Ref: https://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug/ -->
		
		<?php
			wp_nav_menu( array(

				'theme_location'	=> 'primary',
				'container'			=> 'nav',
				'container_class'	=> 'navbar-collapse collapse',
				'menu_class'		=> 'nav navbar-nav navbar-right'
				
			) );
		?>

        <!-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent-7">

          

          <ul class="navbar-nav cinzel-bold uppercase">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="youtube.html">Youtube</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="agency.html">Agency</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patreon.html">Patreon</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            
          </ul>

          

        </div> -->

      </div>
      
    </nav>
    <!-- Navbar -->



    
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('wp-content/themes/bootstrap2wordpress/assets/img/bg/Header-Feature.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row pt-lg-5 mt-lg-5 align-items-center">

            <!--Grid column-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft transparent-bg"
              data-wow-delay="0.3s">
              <h1 class="display-4 font-weight-bold cinzeldecorative-black">Teoría del Arte</h1>
              <hr class="hr-light">
              <h6 class="mb-3 blockquote">"La lechuza de Minerva alza el vuelo al caer el crepúsculo"</h6>
              <p class="cite cinzeldecorative-black">Hegel</p>

              

              
                <a href="youtube.html" class="btn btn-outline-white cinzel-regular">Youtube</a>
              

              
                <a href="agency.html" class="btn btn-outline-white cinzel-regular">Agency</a>
              
              
            
            </div>
            <!--Grid column-->

            

            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->

    </header>
