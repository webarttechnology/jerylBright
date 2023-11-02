<?php /* Template Name: Contact */ 

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
            <?php endwhile; ?>
            </div><!--pager-content end-->
         </div>
      </section><!--pager-section end-->

 

   <?php 
get_footer(); ?>