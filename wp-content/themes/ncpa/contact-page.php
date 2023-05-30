 <!-- Template Name: Contact Page -->
<?php get_header(); ?>
<section class="banner p-0 d-flex justify-content-center align-items-center position-relative"
   style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
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
<section class="contact pt-0">
   <div class="container">
      <div class="row_wrapp">
         <div class="row no-gutters">
            <div class="col-lg-6">
               <div class="p-lg-5 p-md-4 p-3">
                  <div class="section_title">
                     <div class="section_title mb-4">
                        <div class="mb-2">
                           <h6><?php the_title() ?></h6>
                        </div>
                        <h1>Let's Get In Touch</h1>
                     </div>
                     <ul class="contact_page-block">
                        <li>
                           <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                           <div class="">
                              <h3>Address</h3>
                              <p><?php the_field('address') ?></p>
                           </div>
                        </li>
                        <li>
                           <div class="icon"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                           </div>
                           <div class="">
                              <h3>Phone</h3>
                              <p><?php the_field('phone1') ?><br>
                              </p>
                           </div>
                        </li>
                        <li class="mb-0">
                           <div class="icon icon_block"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                           <div class="">
                              <h3>Email</h3>
                              <p>
                              <?php the_field('email') ?><br>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
            <div class="contact_page-form bg_gray p-lg-5 p-4 border_round">
            <div class="form_block">
          
         
    <?php the_field('contactform') ?>

</div>
</div>
</div>
         </div>
      </div>
   </div>
</section>
<?php the_field('map') ?>
<?php include 'partner_panel.php'?>
<div class="shap_two shape position-relative">
   <img src="<?php echo get_template_directory_uri(); ?>/img/white-shape02.png" class="img-fluid" alt="">
</div>
<?php get_footer(); ?>