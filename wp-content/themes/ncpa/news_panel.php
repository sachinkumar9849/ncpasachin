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