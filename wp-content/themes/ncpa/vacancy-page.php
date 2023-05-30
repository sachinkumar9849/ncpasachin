 <!-- Template Name: Vacancy Page -->
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
<section class="vacancy py-0">
   <div class="container">
      <div class="row">
      <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'vacancies',
   'orderby' => 'date',
   'category_name'=>'vacancy',
   'posts_per_page' => 5,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-md-8">
            <div class="job_wrappp">
               <div class="section_title padding_y">
                  <h2><?php the_title() ?>
                  </h2>
                 
                        <?php the_content() ?> 
               </div>
             
              
              
            </div>
         </div>
         <div class="col-md-4">
            <div class="job_detail_right bg_gray p-4">
               <h4>Job Overview</h4>
               <div class="job_list">
                  <ul>
                     <li>
                        <div class="job_icon">
                           <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        </div>
                        <div class="bob_text d-flex flex-column">
                           <strong>Date Posted</strong>
                           <span><?php echo get_the_date() ?></span>
                        </div>
                     </li>
                     <li>
                        <div class="job_icon">
                           <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        </div>
                        <div class="bob_text d-flex flex-column">
                           <strong>Location</strong>
                           <span><?php the_field('location') ?></span>
                        </div>
                     </li>
                     <li>
                        <div class="job_icon">
                           <span><i class="fa fa-flask" aria-hidden="true"></i></span>
                        </div>
                        <div class="bob_text d-flex flex-column">
                           <strong>Expiration date
                           </strong>
                           <span><?php the_field('expiration_date') ?></span>
                        </div>
                     </li>
                     <li>
                        <div class="job_icon">
                           <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="bob_text d-flex flex-column">
                           <strong>Experience</strong>
                           <span><?php the_field('experience') ?></span>
                        </div>
                     </li>
                     <li>
                        <div class="job_icon">
                           <span><i class="fa fa-book" aria-hidden="true"></i></span>
                        </div>
                        <div class="bob_text d-flex flex-column">
                           <strong>Qualification</strong>
                           <span><?php the_field('qualification') ?></span>
                        </div>
                     </li>
                  </ul>
               </div> 
            </div>
         </div><?php endwhile; ?>
<?php wp_reset_postdata(); ?>
      </div>
   </div>
</section>
<?php include 'partner_panel.php'?>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<?php get_footer(); ?>