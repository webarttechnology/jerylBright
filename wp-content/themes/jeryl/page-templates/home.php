<?php /* Template Name: Home */ 

get_header();

$page = get_page_by_path("event");
            if ($page) {
                $event_page_id =  $page->ID; /* this is not used now */
                
            } 

             $commonpage = get_page_by_path("site-common-values");
            if ($commonpage) {
                $commonpage_id =  $commonpage->ID;
                
            } 


?>

     <!-- Banner Section -->

   <section id="slider" class="slider slide-overlay-black">
         <!-- START REVOLUTION -->
         <div class="rev_slider_wrapper">
            <div id="slider2" class="rev_slider" data-version="5.0">
               <ul>
                  <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                     data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                     data-masterspeed="300" data-thumb="<?php the_field('data_thumb_image'); ?>"
                     data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                     data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                     data-param9="" data-param10="" data-description="">
                     <!-- MAIN IMAGE -->
                     <!--<img src="<?php 
                    //  the_field('banner_background_image');
                     ?>" alt="a" title="main-slider-backround-1"-->
                     <!--   width="1920" height="1200" data-bgposition="center center" data-duration="13000"-->
                     <!--   data-ease="Power0.easeInOut" data-scalestart="100" data-scaleend="110"-->
                     <!--   data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"-->
                     <!--   data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="7" class="rev-slidebg"-->
                     <!--   data-no-retina>-->
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/JB FINAL0151_bw_lighterversion-min.png" alt="a" title="main-slider-backround-1"
                        width="1920" height="1200" data-bgposition="center center" data-duration="13000"
                        data-ease="Power0.easeInOut" data-scalestart="100" data-scaleend="110"
                        data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                        data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="7" class="rev-slidebg"
                        data-no-retina>
                     <!-- LAYERS -->
                     <!-- LAYER NR. 1-->
                     <div class="tp-caption   tp-resizeme" id="slide-6-layer-1"
                        data-x="['middle','middle','middle','middle']" data-hoffset="['-89','-7','15','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-110','-73','-111','-131']" data-fontsize="['60','60','95','55']"
                        data-lineheight="['120','105','100','60']" data-letterspacing="['-9','-8','-7','-4']"
                        data-width="['804','627','517','297']" data-height="none" data-whitespace="normal"
                        data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"x:350px;opacity:0;","to":"o:1;","ease":"Power1.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; font-size: 108px; line-height: 108px; font-weight: 700; font-family: 'Barlow', sans-serif; color: #ffffff;letter-spacing: 0;">
					  <h4><?php the_field('banner_text_upper'); ?></h4>	 
                      <h1>
						  <?php the_field('banner_text'); ?>
						 </h1> 
						 <?php
						 //the_field('banner_text');
						 ?>
						 <br>
						
                     </div>
                    
                  </li>

               </ul>
		
            </div>
	   
            <!-- END REVOLUTION SLIDER -->
         </div>
         <!-- END OF SLIDER WRAPPER -->

      <!-- Hero Section End -->
</section>

   
 <div class="ifrm mt-md-3 mt-5" id="Iframe">
   <div class="ifrmchild">
      <iframe
   data-lnk-widget
   src="https://bizcuit-records.lnk.to/jUsOlbj4/widget?view=clickthrough">
</iframe>
</div>
</div>



      <section class="block forlogoembed">
         <div class="fixed-bg dark-bg2 overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
				   <div class="imgbgy">
				   <img src="<?php the_field('home_logo_image'); ?>" alt="">
				   </div>
				   </div>
             
            </div>
         </div>
      </section>

    

      <section class="block dark-background artistbiohome">
         <div class="container-fluid p-0">
<div class="about-section row">
					<div class="col-lg-6">
						<div class="about-text wow slideInLeft" data-wow-duration="1000ms">
							<?php the_field('artist_bio');?>
							<ul class="social-links">
                        <?php $homesocials = CFS()->get('home_social_section');
                            foreach($homesocials as $eachhomesocial){
                         ?>
								<li><a href="<?php echo $eachhomesocial['link'];  ?>" title="" target="_blank"><i class="<?php echo $eachhomesocial['faviconclass'];  ?>"></i></a></li>
                     <?php } ?>
								
							</ul><!--social-links end-->
						</div><!--about-text end-->
					</div>
					<div class="col-lg-6 text-center">
						<div class="prz-thumb">
							<div class="image-thumb">
								<!--<img src="<?php
								// the_field('artist_bio_image');
								?>" alt="">-->
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/artist_bio-min.png ?>" alt="">
							</div><!--image-thumb end-->
						</div>
					</div>
				</div><!--about-section end-->
		  </div>
      </section>

      <section class="block2">
         <div class="fixed-bg dark-bg3 overlay" style="background-image: url(<?php the_field('new_music_video_section_background_image'); ?>);
   background-attachment: fixed;"></div>
         <div class="container">
            <div class="music-video wow zoomIn" data-wow-duration="1000ms">
               <a target="_blank" href="<?php the_field('new_music_video'); ?>" title="" class="play-btn"><i
                     class="fa fa-play"></i></a>
<!--                <h3><?//php the_field('new_music_video_title'); ?></h3> -->
            </div><!--music-video end-->
         </div>
      </section>


      <section class="block" id="fourboxes">
         <div class="fixed-bg black-bg"></div>
         <div class="container">
            <div class="gallery-section row">
               <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
                  <?php $secondvideolink = get_field('second_youtube_video');
                       $secondvideoarray = explode('/',$secondvideolink);
                       $videoelement = $secondvideoarray[3];
                       $videoelementarray = explode('=',$videoelement);
                       $videoid = $videoelementarray[1];
                       $videothumburl2 = 'https://img.youtube.com/vi/'.$videoid.'/maxresdefault.jpg';
                   ?>
                  <div class="gallery-col overlay2">
                    <!-- <img src="<?php //echo $videothumburl2; ?>" alt=""> -->
                     <img src="<?php the_field('third_image');  ?>" alt=""> 
                     <!--<a rel="gallery-1" href="<?php //the_field('second_youtube_video'); ?>" title=""
                        class="overlay2" data-fancybox="gallery">
                        <span class="plus-icon"><i class="fa fa-play"></i></span>
                     </a> -->
                      <a rel="gallery-1" href="https://promo.theorchard.com/HfNjgZHnDjA9Oa3wpGf4 <?php //the_field('second_image'); ?>" title=""
                        class="play-btn v2" target="_blank"><i class="fa fa-play"></i></a>
                  </div><!--gallery-col end-->
               </div>

               <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
                  <div class="gallery-col overlay2">
                     <img src="<?php the_field('fourth_image'); ?>" alt="">
                     <a rel="gallery-1" href="https://open.spotify.com/album/0bagkPjuhAQzygBflvLpIO?go=1&nd=1<?php //the_field('fourth_image'); ?>" title=""
                        class="play-btn v2" target="_blank"><i class="fa fa-play"></i></a>
                  </div><!--gallery-col end-->
               </div>
			   <div class="col-lg-6 col-md-6 col-sm-5 mb-5">
                  <div class="gallery-col overlay2 wdthrt">
                     
                        <img src="<?php the_field('second_image'); ?>" alt="">
                     <a rel="gallery-1" href="https://shopjerylbright.com<?php //the_field('second_image'); ?>" title=""
                        class="play-btn v2" target="_blank"><i class="fa fa-play"></i></a>
                  </div><!--gallery-col end-->
               </div>
				<div class="col-lg-6 col-md-6 col-sm-7 mb-5">
                  <?php $firstvideolink = get_field('first_youtube_video');
                       $firstvideoarray = explode('/',$firstvideolink);
                       $videoelement = $firstvideoarray[3];
                       $videoelementarray = explode('=',$videoelement);
                       $videoid = $videoelementarray[1];
                       $videothumburl1 = 'https://img.youtube.com/vi/'.$videoid.'/maxresdefault.jpg';
                   ?>
                  <div class="gallery-col overlay2">
                     <img src="<?php echo  $videothumburl1; ?>" alt="">
                     <a rel="gallery-1" href="<?php the_field('first_youtube_video'); ?>" title=""
                        class="overlay2" data-fancybox="gallery">
                        <span class="plus-icon"><i class="fa fa-play"></i></span>
                     </a>
                  </div><!--gallery-col end-->
               </div>
            </div><!--gallery-section end-->
			 
			 <div class="ct-head pt-5 d-none">
                <h2>Our Gallery</h2>
             </div>
			 <div class="row d-none">
               <div class="col-md-12">
                 <?php $homegals = CFS()->get('home_gallery_section'); ?>
                           
              <div class="owl-carousel owl-theme img_owl">
            <?php     foreach($homegals as $eachhomegalimg){
                         ?>
    <div class="item">
      <a href="<?php echo $eachhomegalimg['gallery_image']; ?>" data-lightbox="image-1">
      <img src="<?php echo $eachhomegalimg['gallery_image']; ?>" alt="">
      </a>
    </div>
 <?php } ?>
  
 </div>
</div>
             </div>
			 
			 
         </div>
      </section>

    
 
<?php 
get_footer();
