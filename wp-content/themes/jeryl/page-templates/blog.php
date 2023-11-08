<?php /* Template Name: blog */ 

get_header();

$page = get_page_by_path("site-common-values");
            if ($page) {
                $page_id =  $page->ID;
                //echo $page_id;
            } 
?>


<section class="pager-section">
   <?php if(get_field('inner_banner'))
   { ?>
         <div class="fixed-bg bg4" style="background-image: url(<?php echo get_field('inner_banner'); ?>);"></div>
         <?php 
   }
 else
 {
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

   <section class="blogs">
   <div class="blog-wrapper">
     <div class="container">
       <div class="row">
         <?php 
         $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

         $allblogposts = new WP_Query(array('post_type'=>'post','posts_per_page'=>6,'post_status'=>'publish','paged'=>$paged));
           while($allblogposts->have_posts()):$allblogposts->the_post();
           $trimmedcontent =  wp_trim_words(get_the_content(),11,'...');
          ?>
         <div class="col-md-4">
             <div class="item">
               <a href="<?php the_permalink(); ?>">
                 <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                 <h3>demo</h3>
                 <p><?php echo $trimmedcontent; ?></p>
                 <a href="<?php the_permalink(); ?>">see more</a>
               </a>
             </div>
         </div>
      <?php endwhile;wp_reset_query(); ?>
    
       </div>

       <?php wp_pagenavi( array( 'query' => $allblogposts ) ); ?>
     </div>
   </div>
 </section>

<?php 
get_footer();
