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

      <section class="about-page-content block d-none">
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

      <section class="block dark-background artistbiohome abt_artistbiohome">
         <div class="container-fluid p-0">
<div class="about-section row">
               <div class="col-lg-6">
                  <div class="about-text wow slideInLeft" data-wow-duration="1000ms">
					  <h2 class="sm-title">Artist Bio</h2>
					  <p>Jeryl Bright, an American musician who gained prominence as a talented vocalist and trombonist during the 1980s and 1990s. He became widely recognized for his contributions to music groups Cameo and Brainstorm, the original group that launched Clarence Avant’s TABU records, where his exceptional musical abilities and stage presence left a lasting impact on the and funk scenes. Bright's musical journey began at a young age in Louisiana and California when he displayed a natural aptitude for playing the keyboard and singing. His immense talent caught the attention of established musicians, leading to his entry into the music industry in the early 1980s. 1979, Jeryl Bright joined the iconic and funk group Cameo, which was trending upwards and achieved considerable success with hits like "Word Up!" and "Candy." Bright's addition to the group brought a fresh energy and dynamic vocal range that complemented the band's funky sound. His charismatic stage presence and soulful performances further elevated Cameo's live shows, captivating audiences around the world. Jeryl Bright's contributions to the music industry during the 1980s and 1990s have left an indelible mark on and funk music. His soulful vocals, exceptional Trombone skills, and engaging stage presence have made him a beloved figure among fans and fellow musicians alike. Today, Jeryl Bright's musical legacy endures, and his contributions to the vibrant sounds of Cameo and Brainstorm continue to be celebrated by music enthusiasts worldwide. Following his time with Brainstorm, Jeryl Bright continued to collaborate with various artists, lending his vocal and trombone talents to several recording projects. He also pursued a solo career, releasing his own music and performing live shows.</p>
                     <?php //the_field('artist_bio',10);?>
                     <ul class="social-links">
                        <?php $homesocials = CFS()->get('home_social_section',10);
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
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/11/IMG_7053.jpeg" alt="">
                     </div><!--image-thumb end-->
                  </div>
               </div>
            </div><!--about-section end-->
        </div>
      </section>

      <section class="discog-section">
         <div class="container">
         <div class="discog-heading">
            <h2  style="font-family: var(--primary-font);text-align:center;font-size:55px;margin: 50px 0 50px 0;">Discography</h2>
            <p style="text-align:center;font-size:24px;margin: 25px 0 25px 0;">Explore the discography of Jeryl Bright. Shop for vinyl, CDs, and more from Jeryl Bright on <a href="www.discogs.com">Discogs</a>.
</p>
         </div>

         <div class="discog-slider">
    <div class="item"><a href="https://www.discogs.com/master/144271-Brainstorm-Journey-To-The-Light" target="_blank">
      <img src="https://i.discogs.com/1vOaYeaYm_KNi8KDdnsgbJaQpagobbTdoqT45kFcbNI/rs:fit/g:sm/q:90/h:600/w:594/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTU3NzIx/OS0xMTcxMzYzOTM4/LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1978</h4></a>
   </div>

    <div class="item"><a href="https://www.discogs.com/master/144269-Brainstorm-Funky-Entertainment" target="_blank"><img src="https://i.discogs.com/34Da9bJbNVIO9rOBggOcuHCFM9ueALRx-EWI0QUmW8Q/rs:fit/g:sm/q:90/h:596/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTEwMDc3/ODMtMTQ1ODkyNjg5/NC0xOTc0LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1979</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/5683-Cameo-Cameosis" target="_blank"><img src="https://i.discogs.com/RNDfjBqbYbt_7yhtxSbKbLcw9aL6m1rDsvPHMRgoi8c/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTYyMjcw/My0xNDYxNzYxODk1/LTc2NzcuanBlZw.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1980</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/5807-Cameo-Feel-Me" target="_blank"><img src="https://i.discogs.com/dNBrxB89C_uoXAeaLmv4MUdzW7DQSLRNsgQFt2ZN5Xw/rs:fit/g:sm/q:90/h:573/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTgwMTgy/Ny0xNTQzNTMxNDEx/LTQyMTcuanBlZw.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1980</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/5827-Cameo-Knights-Of-The-Sound-Table" target="_blank"><img src="https://i.discogs.com/oyygG3J-1kQZXzqA_Unp634lP68s_BnHDNxUG-sUjvE/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTg4NTQ3/OTAtMTQ3MDE3NDQx/OS05MzA2LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1981</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/220160-Kevin-Toney-Special-K" target="_blank"><img src="https://i.discogs.com/lvn0wLi16kmkTlQ4Osm_PWglSjqSCxN9-jTAbyhZCdA/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTEyNjU2/NjktMTIzMjM4NDIy/MC5qcGVn.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1982</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/release/112284-Various-Street-Sounds-Edition-5" target="_blank"><img src="https://i.discogs.com/G6eK2yuMQSG-NQkOLE0w2nWlNfKNivjECmd1LFVcAuA/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExMjI4/NC0xMjc5NjQyNDI4/LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1983</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/259331-MCB-MCB" target="_blank"><img src="https://i.discogs.com/qPSQuJNusUgCu4qj79qDCqh07RdMzZkN1e-LbCT7-M4/rs:fit/g:sm/q:90/h:436/w:435/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTcxMTYz/Ny0xMzYxNzA0NDIz/LTUzMjMuanBlZw.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1983</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/release/907589-Bright-Electric-Body" target="_blank"><img src="https://i.discogs.com/PL3XYFgMeBGyGwOlo7zy2wgG6ZBZk7LQQA1Pfo7Lnaw/rs:fit/g:sm/q:90/h:598/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTkwNzU4/OS0xMjIxNTAyMjQy/LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1986</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/release/3856920-OG-Hawk-Mellow-D-Mailman" target="_blank"><img src="https://i.discogs.com/cA44TF92E9VSsw8vt1dHAA8ShoaYe-EEDEcBnFnHLMQ/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTM4NTY5/MjAtMTM4NzM5NTM4/OC03NzYyLmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1988</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/5858-Cameo-Real-Men-Wear-Black" target="_blank"><img src="https://i.discogs.com/K_tpOrBURbHQpRLve40uP1YsAKaHooCFAbiVBFPPf-U/rs:fit/g:sm/q:90/h:488/w:488/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTkzOTQ0/Ni0xMzI1ODY3MjU0/LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1990</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/6919-Cameo-The-Best-Of-Cameo" target="_blank"><img src="https://i.discogs.com/P9X8ynskjtufBEWY-pNEZ62ZrTn4zVgOkGud-kkAOns/rs:fit/g:sm/q:90/h:590/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExMjA2/NTY4LTE1MjU0NDY2/MzktODIyMi5qcGVn.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1993</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/1161520-Cameo-In-The-Face-Of-Funk" target="_blank"><img src="https://i.discogs.com/i9wqVeCwPxI8asNbUqNsZLxubCcJTecFWPRJZgxfbfQ/rs:fit/g:sm/q:90/h:397/w:400/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTE1Nzg3/MzAtMTIyOTgwNTcw/OC5qcGVn.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1994</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/master/3242545-Cameo-The-Best-Of-Cameo-Volume-2" target="_blank"><img src="https://i.discogs.com/RU04DZLZOcdzkOSJEqTAMdh2t5Z63AdULKep6LxszKI/rs:fit/g:sm/q:90/h:300/w:301/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTE1ODg3/ODEtMTMyNTk0NTA4/Ny5qcGVn.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">1996</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/release/66123-Isaac-Hayes-Brainstorm-Ashley-Beedle-Re-Edit-Series-001" target="_blank"><img src="https://i.discogs.com/DPzWLUaByJKoLaISSIaoxARbbbaxUufIQk-i-MFGOiA/rs:fit/g:sm/q:90/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTY2MTIz/LTEyODg0Mzg4NzMu/anBlZw.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">2001</h4></a></div>

    <div class="item"><a href="https://www.discogs.com/release/10068927-Level-Rizon-That-Vibe" target="_blank"><img src="https://i.discogs.com/CmfLoIAgHTPZ9qCNU3uIYK-mf8ggCpnOFYzM4axj08U/rs:fit/g:sm/q:90/h:596/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTEwMDY4/OTI3LTE0OTEwNzgw/ODYtNjAyMC5qcGVn.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">2004</h4></a></div>
			 
    <div class="item"><a href="https://www.discogs.com/master/25992-OutKast-Idlewild" target="_blank"><img src="https://i.discogs.com/rUT6BkscTiSgp4uyVknY8XbQED4eSecBQYGalMaAuKc/rs:fit/g:sm/q:90/h:425/w:425/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTc2MzM3/My0xMTU2NTMwODY2/LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">2006</h4></a></div>
			 
    <div class="item"><a href="https://www.discogs.com/release/6801175-Cameo-Cameosis-Feel-Me" target="_blank"><img src="https://i.discogs.com/XhKc47mweE6PNXSxPU0WofR5hUGzc4tKTXPuZt1Jh1s/rs:fit/g:sm/q:90/h:478/w:499/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTY4MDEx/NzUtMTQyNjkyMTYx/NS02NjA2LmpwZWc.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">2015</h4></a></div>
			 
    <div class="item"><a href="https://www.discogs.com/release/11096527-Brainstorm-Journey-To-The-Light-Part-1-Part-2" target="_blank"><img src="https://i.discogs.com/UQMPIWyYF03SImAO6UIokKVcp11KeObCItVwl4M65hw/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExMDk2/NTI3LTE1MDk4MDA5/MzUtNTE0My5qcGVn.jpeg"><h4 style="text-align:center;font-size:22px;margin: 15px 0 0 0;">2017</h4></a></div>
</div>
</div>

</div>
      </section>

<?php

get_footer();
