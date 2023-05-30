 <!-- Template Name: Home Page -->
 <?php get_header(); ?>

 <section class="slider_homepage p-0"> 

   <div class="slider stick-dots">   <?php 
$images = get_field('imageslider');
if( $images ): ?>
<?php foreach( $images as $image ): ?>
  
      <div class="slide">
    
         <div class="slide__img">
            <img src="" alt="" data-lazy="<?php echo $image['url'];?>" class="full-image animated"
               data-animation-in="zoomInImage" />
         </div>
    
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-7 h-100 d-flex align-items-center">
                  <div class="slide__content">
                     <div class="slide__content--headings">
                        <h2 class="animated" data-animation-in="fadeInRight">National Child Protection Alliance Nepal
                        </h2>
                        <div class="btn_wrap">
                           <a href="<?php echo get_page_link(24); ?>" class="bg_blue animated btn mr-3"
                              data-animation-in="fadeInRight">
                              Contact Us
                              <div class="arrow"></div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php endforeach; ?>
<?php endif;?> 

      </div>
   </div>    
</section>
<div class="shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/shape.png" class="img-fluid" alt="">
</div>
<section class="about position-relative pt-0">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <div class="about_wrapp pr-lg-5 pr-0 d-flex justify-content-center flex-column h-100">
               <div class="section_title padding_y">
                  <h6>About</h6>
                  <h2>National Child Protection Alliance Nepal
                  </h2>
                  <p><?php the_field('summary',52) ?>
                  </p>
               </div>
               <div class="row funfact-row position-relative">
                  <div class="col-md-6">
                     <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                       
                        <div id="counter-box">
                           <p>Project</p>
                           <h1> <span class="counter" data-number="<?php the_field ('project') ?>"></span></h1>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6  wow fadeInUp">
                     <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                      
                        <div id="counter-box">
                           <p>Happy Donators
                           </p>
                           <h1> <span class="counter" data-number="<?php the_field ('happy_donators') ?>"></span>+</h1>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6  wow fadeInUp">
                     <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                
                        <div id="counter-box">
                           <p>Volunteer</p>
                           <h1> <span class="counter" data-number="<?php the_field ('volunteer') ?>"></span>+</h1>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6  wow fadeInUp">
                     <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                     
                        <div id="counter-box">
                           <p>Donated Poor</p>
                           <h1> <span class="counter" data-number="<?php the_field ('donated_poor') ?>"></span>K</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 p-0">
            <div class="image fame-image">
               <img src="<?php 
$image = get_field('image'); echo $image['url'];?>" alt="image" class="img-fluid w-100">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="what_wedo position-relative pt-0">
   <div class="container">
      <div class="row">
         
         <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'programss',
   'orderby' => 'date',
   'category_name'=>'Program',
   'posts_per_page' => 8,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-lg-3 col-md-6">
            <div class="what_we-wrapp bg_gray text-center d-flex flex-column justify-content-center mb-4">
               <div class="icon">
                  <img src="<?php 
$image = get_field('image'); echo $image['url']; ?>" alt="image" class="img-fluid">
               </div>
               <h3><?php the_title(); ?></h3>
            </div>
      
      </div>      <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
   </div>
</section>
<div class="shap_two shape position-relative">
   <img src="img/white-shape02.png" class="img-fluid" alt="">
</div>
<section class="program padding_button bg_img position-relative pb-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mx-auto text-center">
            <div class="section_title padding_b padding_y text-white">
               <h6>Our Causes</h6>
               <h2>Programs
               </h2>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="program_list pt-0">
   <div class="container">
      <div class="row">
      <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'programss',
   'orderby' => 'date',
   'category_name'=>'Program',
   'posts_per_page' => 3,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-lg-4 col-md-6">
            <div class="program_block mb-lg-0 mb-4">
               <div class="program_img">
                  <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid">
               </div>
               <div class="program_content bg_blue text-white position-relative">
              
                  <div class="">
                     <h4><?php the_title(); ?></h4>
                  </div>
                  <div class="btn_two mt-2">
                     <a href="<?php the_permalink() ?>">Read more <span><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span></a>
                  </div>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
      </div>
   </div>
</section>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<section class="blog bg_gray" id="particles-js">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mx-auto text-center">
            <div class="section_title padding_b padding_y text-white">
               <h6>News</h6>
               <h2>Check Out Our Latest News
               </h2>
            </div>
         </div>
      </div>
      <div class="row">
      <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'newss',
   'orderby' => 'date',
   'category_name'=>'newsss',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-lg-4 col-md-6">

<div class="blog_block position-relative mb-4">
   <div class="blog_img">
      <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
   </div>
   <div class="blog_content text-white">
      <h3><?php the_title(); ?></h3>
      <div class="blog_text ">
     <?php the_field('summary') ?>
     
      </div>
      <hr class="hr_custome">
      <div class="blog_date py-2">
         <span><?php echo get_the_date(); ?></span>
      </div>
      <div class="red_btn ">
         <a href="<?php the_permalink() ?>">
            <div class="blog-detail.php">
               Read More <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </div>
            <div class="arrow_img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_img.png" class="img-fluid" alt="">
            </div>
         </a>
      </div>
   </div>
</div>
</div>
         
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
      </div>
   </div>
</section>
<?php include 'partner_panel.php'?>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<?php get_footer(); ?>
<!-- notice start  -->
<!-- <div id="myModal" class="modal fade">
   <div class="modal-dialog">
       <div class="modal-content rounded-0">
   
           <div class="modal-body p-0 rounded-0">
               <div class="modal-content  border-0">
                   <div class="modal-header rounded-0">
                       <h4>नेपालमा बाल अधिकार अनुगमन सम्बन्धी स्वतन्त्र उच्च स्तरीय संयन्त्रको विषयमा अन्तर संवाद
                           कार्यक्रम</h4>
                       <button type="button" class="close" data-dismiss="modal">×</button>
                   </div>
                   <div class="modal-body p-4">
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, rerum dolores. Ipsam
                           nesciunt accusamus fuga necessitatibus! Itaque aliquid optio harum quae est atque
                           voluptatibus. Quo maiores eveniet similique et inventore.</p>
   
                   </div>
                   <div class="modal-footer py-4">
                       <div class="btn_wrapp">
                       <a href="news-detail.php" class="theme_btn_sub">Read more</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </div> -->