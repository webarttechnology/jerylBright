<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Jeryl
 * @since Twenty Twenty-One 1.0
 */


	   $page = get_page_by_path("site-common-values");
            if ($page) {
                $page_id =  $page->ID;
                
            } 
        //    if(!(is_front_page())){}

             ?>
<section class="contact-section">
			<div class="fixed-bg dark-bg4" style="background-image: url(<?php echo get_field('inner_page_background_image',$page_id); ?>);"></div>
            
			<div class="ct-content">
				<div class="contact-content">
					<div class="ct-head">
						<?php echo get_field('contact_footer_text',$page_id); ?>
					</div><!--ct-head end-->
			<?php 		$eachserv = CFS()->get('each_services',$page_id);   ?>
					<div class="row">
						<?php 
						$counterserv = 0;
						
						foreach($eachserv as $eachsingleserv){
						$counterserv++;
							if($counterserv < 2){
						?>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="wd-content">
								<h3><?php echo $eachsingleserv['service_name']; ?> </h3>
								<ul>
									<li><?php echo $eachsingleserv['service_in_charge']; ?></li>
			<li><a href="mailto:<?php echo $eachsingleserv['service_email_id']; ?>" title=""><?php echo $eachsingleserv['service_email_id']; ?></a></li>
								</ul>
							</div><!--wd-content end-->
						</div>
					<?php } 
						}
						
						
						?>
						
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="dp-text">
								<?php echo get_field('a_line_or_two_footer',$page_id); ?>
					<a href="mailto:<?php echo get_field('site_general_email',$page_id ); ?>" title="" class="mail-link"><?php echo get_field('site_general_email',$page_id ); ?></a>
							</div><!--dp-text end-->
						</div>
						<div class="col-lg-4 col-md-4 d-none">
							<div class="wd-content">
								<h3><?php echo get_field('address_heading',$page_id ); ?> </h3>
								<ul>
									<li><?php echo get_field('address',$page_id ); ?></li>
								</ul>
							</div><!--wd-content end-->
						</div>
					</div>
					  <?php  	$footersocialsecond = CFS()->get('footer_second_social_set',$page_id);  ?>
<!-- 					<ul class="lg-social wow slideInLeft" data-wow-duration="1000ms">

						<?php foreach($footersocialsecond as $eachfootersecondsocial){ ?>
<li><a href="<?php echo $eachfootersecondsocial['link']; ?>" title="" class="spotify-ic"><i class="<?php echo $eachfootersecondsocial['fontawsome_class']; ?>"></i></a></li>
						
					<?php } ?>

					</ul> -->
				</div>
			</div>
		</section>

<section class="block">
    <div class="fixed-bg black-bg"></div>
    <div class="container">
        <div class="subscribe-section text-center wow slideInUp" data-wow-duration="1000ms">
           <?php echo get_field('footer_newsletter_text',$page_id); ?>
        
            <?php echo do_shortcode('[mc4wp_form id=254]'); ?>
        </div><!--subscribe-section end-->
    </div>
</section>

<footer>
    <div class="container">
        <div class="row footer-content">
            <div class="col-lg-5 col-md-5 text-md-left text-center">
                <div class="copyright">
                    <p>© Jeryl Bright <?php echo date('Y'); ?></p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="ft-logo text-center">
                    <!--<img src="<?php
                    // echo get_field('footer_logo',$page_id); 
                    ?>" alt="">-->
                    
                   <img src=" <?php echo esc_url(get_template_directory_uri()); ?>/images/BRIGHT 2-min.png" alt="">
                    
                </div><!--ft-logo end-->
            </div>
            <div class="col-lg-5 col-md-5">
           <?php  	$footersocialfirst = CFS()->get('footer_first_social_set',$page_id);  ?>

                <ul class="social-links v2">
                	<?php foreach($footersocialfirst as $eachfootersocial){ ?>
             <li><a href="<?php echo $eachfootersocial['link']; ?>" title=""><i class="<?php echo $eachfootersocial['fontawsome_class']; ?>"></i></a></li>
                <?php } ?>
                    
                </ul><!--social-links end-->
            </div>
        </div>
    </div>
</footer><!--footer end-->



   </div><!--wrapper end-->


  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>

    $(".menu-btn").click(function(){
        $(".responsive-mobile-menu").toggleClass("active");
        $(".menu-btn").toggleClass("active");
     });


	jQuery( window ).on( "load", function() {
        jQuery("#swipebox-close").removeAttr("style");
    });
</script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-migrate-1.4.1.min.js"></script>

   <!-- Vendor -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/revolution/vendor.js"></script>

   <!-- Revolution Slider -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/revolution/js/extensions/revolution.extensions.all.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

   <!-- Custom scripts -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/revolution/main.js"></script>

   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.jplayer.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jplayer.playlist.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/popper.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/plugin/slick.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/plugin/jquery.swipebox.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.min.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/playlist.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- fancybox Javascript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.js" integrity="sha512-MBa5biLyZuJEdQR7TkouL0i1HAqpq8lh8suPgA//wpxGx4fU1SGz1hGSlZhYmm+b7HkoncCWpfVKN3NDcowZgQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
jQuery('.img_owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});


jQuery('.bnr_carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>
<script>
	$(window).scroll(function() {
if ($(this).scrollTop() > 54){
    $('.headersty').addClass("sticky");
  }
  else{
    $('.headersty').removeClass("sticky");
  }
});
</script>


<!-- <script>
	const btn = document.getElementById("swipebox-close");
	btn.style.style.backgroundColor = "#fff" ;
</script> -->


<?php wp_footer(); ?>
</body>

</html>