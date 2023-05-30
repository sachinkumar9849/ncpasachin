 <!-- Template Name: Reports Page -->
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
<section class="report pt-0">
   <div class="container">
      <div class="row">
      <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'reportss',
   'orderby' => 'date',
   'category_name'=>'Report',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-lg-10 mx-auto">
            <div class="report_wrapp d-flex mb-4">
               <div class="report_img d-flex align-items-center justify-content-center">
                  <div class="event_date text-white text-center">
                  <?php echo get_the_date('j') ?><span><?php echo get_the_date('F ') ?></span>
                  </div>
               </div>
               <div class="report_content d-flex align-items-center position-relative bg_gray p-4 w-100 my-lg-3 my-0">
                  <div class="report_title ml-md-3 ml-0">
                     <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="report_download">
                     <a href="<?php the_field('file_upload')?>">Download</a>
                  </div>
               </div>
            </div>
         </div>
      
         <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
      </div>
   </div>
</section>
<?php include 'news_panel.php'; ?>
<?php include 'partner_panel.php'?>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<?php get_footer(); ?>