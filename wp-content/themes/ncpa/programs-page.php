 <!-- Template Name: Program Page -->
<?php get_header(); ?><section class="banner p-0 d-flex justify-content-center align-items-center position-relative"
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
<section class="program_page pt-0">
   <div class="container">
      <div class="row">
      <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'programss',
   'orderby' => 'date',
   'category_name'=>'Program',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="program_block">
               <div class="program_img">
                  <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid">
               </div>
               <div class="program_content bg_blue text-white position-relative">
              
                  <div class="">
    
                     <h4><?php the_title(); ?></h4>
                  </div>
                  <div class="btn_two mt-2">
                     <a href="<?php the_permalink() ?>">Read more <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                   
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