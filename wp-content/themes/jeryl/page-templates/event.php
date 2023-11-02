<?php /* Template Name: event */ 

get_header();
?>


<section class="pager-section">
         <?php if(get_field('inner_banner')){ ?>
          <div class="fixed-bg bg7" style="background-image: url(<?php echo get_field('inner_banner'); ?>);"></div>
         <?php }
         else{
            ?>
            <div class="fixed-bg bg7"></div>
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

      <section class="block">
         <div class="fixed-bg black-bg"></div>
         <div class="container">
            <div class="section-title text-center wow slideInUp">
               <h2>New Event Tour <?php echo date('Y'); ?></h2>
               <span><?php the_field('event_listing_subheading'); ?>  </span>
            </div><!--section-title ned-->
            <div class="shows-list mb-0 wow slideInUp" data-wow-animation="1000ms">

                 <?php $allEvents = CFS()->get( 'all_events' ); 
               foreach($allEvents as $eachevent){ ?>
                  
               ?>

               <div class="shows-row">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="shows-head">
                           <div class="show-date">
                              <h4><?php echo $eachevent['event_day'];  ?></h4>
                              <h5><?php echo $eachevent['event_month'];  ?></h5>
                           </div>
                           <div class="show-thumb">
                              <img src="<?php echo $eachevent['event_image'];  ?>" alt="">
                           </div>
                           <div class="show-info">
                              <?php echo $eachevent['event_headings']; ?>
                           </div>
                        </div><!--shows-head end-->
                     </div>
                     <div class="col-lg-3">
                        <ul class="show-time">
                           <li>
                              <div class="sw-icon">
                                 <i class="fa fa-map-marker-alt"></i>
                              </div>
                              
                               <?php echo $eachevent['event_location']; ?>
                           </li>
                           <li>
                              <div class="sw-icon">
                                 <i class="far fa-clock"></i>
                              </div>
                              <span> <?php echo $eachevent['event_time']; ?></span>
                           </li>
                        </ul>
                     </div>
                     <div class="col-lg-2">
                        <a href="<?php echo $eachevent['event_action_link']; ?>" title="" class="theme-btn"><?php echo $eachevent['event_action_label']; ?></a>
                     </div>
                  </div>
               </div>
            <?php } ?>
            

            </div><!--shows-list end-->
         </div>
      </section>

<?php

get_footer();
