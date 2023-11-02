<?php /* Template Name: general */ 

get_header();



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

     <!-- About us section -->
     <div class="about-inner-content">
      <div class="container">
         <div class="row  mb-5">
          <?php $pagethumb = get_the_post_thumbnail_url(get_the_ID());

             if($pagethumb!=''){
           ?>
            <div class="col-lg-6 col-md-6">
               <div class="image-box">
                  <img src="<?php echo $pagethumb;  ?>" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <?php the_content(); ?>
            </div>
          <?php }
          else{
            ?>
            <div class="col-lg-12 col-md-12">
               <?php the_content(); ?>
            </div>

          <?php }


           ?>

         </div>
       <?php endwhile; ?>

        

      
   </div>
</div>
   <?php 

get_footer();
