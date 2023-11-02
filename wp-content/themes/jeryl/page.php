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



get_header(); ?>


    <section class="pager-section">
   <?php if(get_field('inner_banner')){ ?>
         <div class="fixed-bg bg4" style="background-image: url(<?php echo get_field('inner_banner'); ?>);"></div>
         <?php }
         else{
            ?>
            <div class="fixed-bg bg4"></div>
            <?php 
         }

          ?>
         <div class="container">
            <div class="pager-content text-center">
                <?php while(have_posts()):the_post(); ?>
               <h2><?php the_title(); ?></h2>
          
            </div><!--pager-content end-->
         </div>
      </section><!--pager-section end-->

      <section class="about-page-content block">
         <div class="container">
            <div class="about-page-head wow slideInUp">
              
               <div class="row">
                 
                  <div class="col-lg-12">
                     <div class="abt-para">
                        <?php the_content(); ?>
                     </div>
                  </div>
               </div>
            </div><!--about-page-head end-->
            
         </div>
      </section><!--about-page-content end-->
  <?php endwhile; ?>
<?php

get_footer();