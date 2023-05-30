 <!-- Template Name: Team Page -->
 <?php get_header(); ?>
<section class="banner p-0 d-flex justify-content-center align-items-center position-relative"
   style="background-image: url(<?php the_post_thumbnail_url() ?>);">
   <div class="page-title-content text-center">
      <h2><?php the_title() ?></h2>
      <ul class="d-flex text-white mt-3 align-items-center justify-content-center">
         <li><a href="<?php echo get_page_link(8); ?>">Home</a></li>
         |
         <li><?php the_title() ?></li>
      </ul>
   </div>
</section>
<div class="shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/shape.png" class="img-fluid" alt="">
</div>
<section class="team p-0">
   <div class="container">
      <div class="team-boxed">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mx-auto text-center">
                  <div class="section_title padding_b padding_y">
                     <h6> Meet Our Team</h6>
                     <h2>Executive Boards
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row">
                        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'teams',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'team',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
               <div class="col-md-6">
      
                  <div class="team_img d-lg-flex d-block mb-4">
                     <div class="box w-50"><img class="img-fluid" src="<?php the_post_thumbnail_url() ?>">
                     </div>
                     <div class="team_text w-50 d-flex flex-column justify-content-center">
                        <h3><?php the_title() ?></h3>
                        <div class="my-2">
                           <h5><?php the_field('designation') ?></h5>
                        </div>
                        <p class="description"><?php the_content() ?>
                        </p>
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