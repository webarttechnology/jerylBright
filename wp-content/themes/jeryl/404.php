<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
               
               <h2>404</h2>
          
            </div><!--pager-content end-->
         </div>
      </section><!--pager-section end-->

      <section class="about-page-content block">
         <div class="container">
            <div class="about-page-head wow slideInUp">
              
               <div class="row">
                 
                  <div class="col-lg-12">
                     <div class="abt-para">
                       <header class="page-header alignwide">
      <h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
   </header><!-- .page-header -->

   <div class="error-404 not-found default-max-width">
      <div class="page-content">
         <p><?php esc_html_e( 'OOPS!!!! It looks like nothing was found at this location' ); ?></p>
      
      </div><!-- .page-content -->
   </div><!-- .error-404 -->
                     </div>
                  </div>
               </div>
            </div><!--about-page-head end-->
            
         </div>
      </section><!--about-page-content end-->
 
<?php

get_footer();