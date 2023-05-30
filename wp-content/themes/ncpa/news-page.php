 <!-- Template Name: News Page -->
 <?php get_header(); ?>
 <section class="banner p-0 d-flex justify-content-center align-items-center position-relative"
   style="background-image: url(<?php the_post_thumbnail_url() ?>);">
   <div class="page-title-content text-center">
      <h2><?php the_title(); ?></h2>
      <ul class="d-flex text-white mt-3 align-items-center justify-content-center">
         <li><a href="<?php echo get_page_link(8); ?>">Home</a></li>
         |
         <li><?php the_title(); ?></li>
      </ul>
   </div>
</section>
<div class="shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/shape.png" class="img-fluid" alt="">
</div>
<section class="blog pt-0">
   <div class="container">
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
<section class="process bg_gray">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mx-auto">
            <div class="section_title text-center padding_b padding_y">
               <h6>Our Process</h6>
               <h2>To Have Become A Volunteer Or Donor For Poor
               </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="process_img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/process.png" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-lg-6">
     
            <div class="row d-flex align-items-center h-100 pl-lg-4 pl-0">
            <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'process',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'process',
   'posts_per_page' => 3,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         
            <div class="col-12">
               
            <div class="process_wrapp">
          <div class="process_item">
                        <div class="process_icon">
                           <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                        </div>
                        <div class="process_text">
                           <h5><?php the_title(); ?></h5>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'partner_panel.php'?>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<?php get_footer(); ?>