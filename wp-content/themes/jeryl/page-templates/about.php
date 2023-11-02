<?php /* Template Name: about */ 

get_header();

$page = get_page_by_path("site-common-values");
            if ($page) {
                $page_id =  $page->ID;
                //echo $page_id;
            } 
?>


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

      <section class="about-page-content block">
         <div class="container">
            <div class="about-page-head wow slideInUp">
               <h2 class="sm-title"><?php the_field('artist_bio_heading'); ?></h2>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="ms-abt-col">
                        <h4><?php the_field('artist_bio_subheading'); ?></h4>
                        <a href="mailto:<?php echo get_field('site_general_email',$page_id); ?>" title="" class="email-link">Send e-mail</a>
                     </div><!--ms-abt-col end-->
                  </div>
                  <div class="col-lg-8">
                     <div class="abt-para">
                        <?php the_field('artist_bio_text'); ?>
                     </div>
                  </div>
               </div>
            </div><!--about-page-head end-->
            <div class="about-lg-content">
               <div class="abt-lg-image">
                  <img src="<?php //the_field('above_music_producer_list_image'); ?>" alt="">
               </div> 
               <h2><?php the_field('music_producers_i_have_worked_with_heading'); ?> </h2>
               <?php $musicproducers = CFS()->get( 'music_producer_list' ); 

                  
               ?>
               <ul class="tg-links wow slideInUp">
                  <?php foreach($musicproducers as $eachmusicprodarray){ ?>
                  <li><?php echo $eachmusicprodarray['industry_name'];  ?></li>
               <?php } ?>
                  
               </ul>
            </div><!--about-lg-content end-->
         </div>
      </section><!--about-page-content end-->

<?php

get_footer();
