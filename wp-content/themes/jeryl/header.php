<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Jeryl
 * @since Twenty Twenty-One 1.0
 */

?>

   <!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="jellythemes">
   <link rel="icon" href="<?php echo get_site_url(); ?>/assets/images/favicon.png">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/jplayer.blue.monday.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swipebox.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/dark.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
   <!-- Style Css -->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/revolution/css/revolution.all.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/revolution/revolution3.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

   <!-- Lightbox Stylesheet -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
	
   <!-- Modernizr -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/revolution/vendor/modernizr.js"></script>
   <?php wp_head(); ?>
</head>
 <?php $page = get_page_by_path("site-common-values");
            if ($page) {
                $page_id =  $page->ID;
               
                }  ?>

<body class="black-version">

   <div class="preloader d-none">
      <div class="lds-ellipsis">
         <div></div>
         <div></div>
         <div></div>
         <div></div>
      </div>
   </div>

   <div id="jquery_jplayer_2" class="jp-jplayer"></div>

   <div class="wrapper">

      <header class="headersty">
         <div class="container-fluid">
            <div class="header-content ">
               <div class="logo">
       <a href="<?php echo get_site_url(); ?>" title="" class="white-logo">
           <!--<img src="<?php 
        //   echo get_field('logo',$page_id); 
           ?>" alt="">-->
           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/BRIGHT 2-min.png" alt="">
           
           </a>
               </div><!--logo end-->
				
		
             <?php
            wp_nav_menu(array(
            'menu' => 'main menu',
            'container' => 'nav'

           ));  

            ?>	


<?php $headersocial = CFS()->get('header_first_social_set',$page_id); ?>
			   <ul class="social-links hd-v">
                    <?php foreach($headersocial as $eachheadsocial){ ?>
					<li><a href="<?php echo $eachheadsocial['link']; ?>" title=""><i class="<?php echo $eachheadsocial['fontawsome_class']; ?>"></i></a></li>
               <?php } ?>
						
				</ul>
            <!--social-links end--> 	



               <div class="menu-btn">
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span>
               </div>
            </div><!--header-content end-->
         </div>
      </header><!--header end-->

    

      <!--responsive-menu end-->
		<?php
         wp_nav_menu(array(
         'menu' => 'main menu',
         'container_class' => 'responsive-mobile-menu'

         ));

        ?>
      