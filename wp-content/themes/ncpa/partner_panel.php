<section class="members youtube_bg bg_img">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mx-auto">
            <div class="section_title text-center padding_b padding_y">
               <h6>Partners</h6>
               <h2>Working with
               </h2>
            </div>
         </div>
      </div>
      <div class="row">
      <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'partner',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'partner',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
         <div class="col-lg-2 col-6 col-md-4">
            <div class="members_img bg-white mb-4">
               <a href="<?php the_field('website') ?>" target="_blank"><img src="<?php echo the_post_thumbnail_url() ?>"
                  alt="<?php the_title() ?>" class="img-fluid"></a>
            </div>
         </div>
         <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
   </div>
</section>