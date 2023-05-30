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
<section class="program_detail pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="section_title  padding_y pr-lg-5 pr-0">
               <h6>Program</h6>
               <h2><?php the_title(); ?>
               </h2>
               <div class="readmore__content mb-4">
                
                <div class="mission_list mt-4">
                   <ul>
                   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         <?php the_content() ?>  <?php endwhile; else: ?>
                         
<?php endif; ?>
                   </ul>
                </div>
             </div>
               <button class="readmore__toggle bg_orange animated btn" role="switch" aria-checked="true">
               Show more
               </button>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="mission_img bg-white p-5 mt-lg-0 mt-4 text-white">
               <ul>
                  <li>
                     <span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php the_field('location') ?>
                  </li>
                  <hr>
                  <li>
                     <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> <?php the_field('date') ?>
                  </li>
                  <hr>
                  <li>
                     <span><i class="fa fa-user-o" aria-hidden="true"></i></span> <?php the_field('number_of_people') ?>
                  </li>
                  <hr>
                  <li>
                     <span><i class="fa fa-users" aria-hidden="true"></i></span> <?php the_field('organizer_name') ?>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="program_page bg_gray">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mx-auto">
            <div class="section_title text-center padding_b padding_y">
               <h6>Program</h6>
               <h2>Recent Program
               </h2>
            </div>
         </div>
      </div>
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
<?php include 'partner_panel.php'?>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<?php get_footer(); ?>