<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
global $post;
$serviceid = $post->ID;

while(have_posts()):the_post();
  $innerbanner = get_field('inner_banner');
 

 if($innerbanner!='')
  { ?>
     <div class="common-banner" style="background-image: url(<?php echo $innerbanner;   ?>);">
     <?php 
  } 
   else
    {
      ?>
        <div class="common-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/images/common-banner.jpg);">
   <?php  
    }


     ?>
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-7">
               <h2><?php the_title(); ?></h2>
               <ul class="breadcramp">
                  <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                  <li><i class="fas fa-angle-right"></i></li>
                  <li><?php the_title(); ?></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
 <?php endwhile; ?>

  <div class="blog-inner-content">
      <div class="container">
         <div class="service-sec">
            <div class="container">

               <div class="row mb-3">
                  <div class="col-lg-4 col-md-4 my-4">
                     <div class="service-sec-inner">
                        <h2>SERVICES</h2>
                        <div class="sidebar-left">
                           <ul>
                     <?php    $allservices = new WP_Query(array('post_type'=>'our_services','posts_per_page'=>-1,'post_status'=>'publish' ));
                                     while($allservices->have_posts()):$allservices->the_post();
                           if($serviceid==get_the_ID()){
                      ?>
                              <li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>

                           <?php  }
                           else{
                              ?>
                               <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
                         <?php   }
                            ?>
                            
                           <?php endwhile; wp_reset_query(); ?>
                           </ul>
                        </div>
                     </div>

                     <aside class="widget-contact">
                        <div class="cmt-col-bgcolor">
                           <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                              <div class="cmt-col-wrapper-bg-layer-inner"></div>
                           </div>
                           <div class="layer-content">
                              <p class="mb-10">Our Appoinment Service Call Us</p>
                              <h4><i class="fas fa-phone-alt"></i>
                                 <?php echo ot_get_option('phone'); ?></h4>
                           </div>
                        </div>
                     </aside>
                  </div>
                  <div class="col-lg-8 col-md-8 my-4">
                     <div class="service-right">
                        <?php while(have_posts()):the_post(); ?>
                        <div class="image-box mb-4">
                           <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid w-100">
                        </div>
                        <h2><?php the_title(); ?></h2>

                        <div class="para-text">
                           <?php the_content(); ?>
                           
                        </div>
                     </div>
                  <?php endwhile; ?>

                  </div>
               </div>

            </div>
         </div>

      </div>
   </div>
      <?php 

get_footer();
