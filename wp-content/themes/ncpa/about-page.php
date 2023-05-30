 <!-- Template Name: Introduction Page -->
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
<section class="about_page pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="d-flex justify-content-center flex-column h-100">
               <div class="section_title padding_b padding_y">
                  <h6><?php the_title(); ?></h6>
                  <h2> Brief Introduction To NCPA
                  </h2>
                  <div class="readmore__content mb-md-4 mb-0">
                     <p> <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
                     </p>
                     <div class="mission_list mt-md-4 mt-2">
                        <ul>   
                        <?php the_field('points') ?>
                        </ul>
                     </div>
                  </div>
                  <button class="readmore__toggle bg_orange animated btn" role="switch" aria-checked="true">
                  Show more
                  </button>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about_page-wrapp position-relative pr-lg-3 pr-0">
               <div class="img_one-about text-right">
     

                  <img src="<?php $image = get_field('image_one'); echo $image['url'];?>" class="img-fluid">
               </div>
               <div class="img_two-about mb-md-5 mb-0">
                  <img src="<?php $image = get_field('image_two'); echo $image['url'];?>" class="img-fluid d-md-block d-none">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="mission bg_gray">
   <div class="container">
      <div class="row">
         <div class="col-lg-10 mx-auto">
            <div class="row">
               <div class="col-lg-4 col-md-6">
               <?php   $rows = get_field('detail-introduction' );
if( $rows ) {
   $first_row = $rows[0];
   $first_row_title = $first_row['title'];
   $first_row_image = $first_row['image'];
   $first_row_content= $first_row['content'];
   // Do something...
} ?>
        
                  <div class="mission_img bg-white d-flex justify-content-center align-items-center">
                     <img src="<?php echo $first_row_image['url']; ?>" class="img-fluid" alt="">
                  </div>
               </div>
               <div class="col-lg-8 col-md-6">
            <div
                     class="section_title padding_y d-flex flex-column justify-content-center h-100 pl-lg-5 pl-3">
                     <h2><?php echo $first_row_title ?>
                     </h2>
                     <p><?php echo $first_row_content ?>
                     </p>
                  </div>
               </div>
  
            </div>
            <div class="row my-5">
               <div class="col-lg-8 col-md-6 order-md-1 order-2">
               <?php   $rowss = get_field('detail-introduction' );
if( $rowss ) {
   $second_row = $rowss[1];
   $second_row_title = $second_row['title'];
   $second_row_image = $second_row['image'];
   $second_row_content= $second_row['content'];
   // Do something...
} ?>
        
                  <div
                     class="section_title padding_y d-flex flex-column justify-content-center h-100 text-right pr-lg-5 pr-3">
                     <h2><?php echo $second_row_title ?>
                     </h2>
                     <p><?php echo $second_row_content ?>
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 order-md-2 order-1">
                  <div class="mission_img bg-white d-flex justify-content-center align-items-center">
                     <img src="<?php echo $second_row_image['url']; ?>" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
               <?php   $rowsss = get_field('detail-introduction' );
if( $rowsss ) {
   $third_row = $rowsss[2];
   $third_row_title = $third_row['title'];
   $third_row_image = $third_row['image'];
   $third_row_content= $third_row['content'];
   // Do something...
} ?>
                  <div class="mission_img bg-white d-flex justify-content-center align-items-center">
                     <img src="<?php echo $third_row_image['url']; ?>" class="img-fluid" alt="">
                  </div>
               </div>
      
               <div class="col-lg-8 col-md-6">
                  <div
                     class="section_title padding_y d-flex flex-column justify-content-center h-100 pl-lg-5 pl-3">
                     <h2><?php echo $third_row_title ?>
                     </h2>
                     <div class="mission_list">
                        <ul>
                        <?php echo $third_row_content ?>
                        </ul>
                     </div>
                  </div>
               </div>
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