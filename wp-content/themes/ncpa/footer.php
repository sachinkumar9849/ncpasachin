<a id="button"></a>
<section class="contact-area bg_img" id="contact">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 offset-lg-3">
            <div class="contact-content text-center">
               <p><?php the_field('summary',52) ?>
               </p>
               <div class="hr my-4"></div>
               <div class="mb-4">
                  <h6>
                  <?php the_field('address',24) ?>
                  </h6>
               </div>
               <div class="phone_text mb-4">
                  <h6> <a href="tel: <?php the_field('phone1',24) ?>">
                  <?php the_field('phone1',24) ?></a><span> |</span><a href="tel: <?php the_field('phone2',24) ?>">
                  <?php the_field('phone2',24) ?></a>
                  </h6>
               </div>
               <div class="social_icon">
                  <ul class="d-flex justify-content-center">
                     <li><a class="facebook" href="<?php the_field('facebook',24) ?>" target="_blank"><i class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
                     <li><a class="twitter" href="<?php the_field('twitter',24) ?>" target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
                     <li><a class="youtube" href="<?php the_field('youtube',24) ?>" target="_blank"><i class="fa fa-youtube"
                        aria-hidden="true"></i></a></li>
                     <li><a class="instagram" href="<?php the_field('instagram',24) ?>"><span><i class="fa fa-instagram"
                        aria-hidden="true"></i></span></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<footer>
   <p>Copyright © 2023 National Child Protection Alliance (NCPA Nepal)</p>
   <p>Website by: <strong>ArchieSoft Technology</strong></p>
</footer><?php wp_footer(); ?>
<!-- mobile menu start  -->
<div class="side-bar">
   <header>
      <div class="close-btn">
         <i class="fa fa-times"></i>
      </div>
   </header>
   <div class="menu_mobile pt-3">
      <div class="item">
         <a class="sub-btn">
         About
         <i class="fa fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="<?php echo get_page_link(52); ?>" class="sub-item">Introduction</a>
            <a href="<?php echo get_page_link(94); ?>" class="sub-item">Team </a>
            <a href="<?php echo get_page_link(50); ?>" class="sub-item">Partners </a>
         </div>
      </div>
      <div class="item"><a href="<?php echo get_page_link(125); ?>"> Programs</a></div>
      <div class="item">
         <a class="sub-btn">
         Update
         <i class="fa fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="<?php echo get_page_link(173); ?>" class="sub-item">Gallery</a>
            <a href="<?php echo get_page_link(227); ?>" class="sub-item">Video</a>
            <a href="<?php echo get_page_link(180); ?>" class="sub-item">News </a>
         </div>
      </div>
      <div class="item">
         <a class="sub-btn">
         Resources
         <i class="fa fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
            <a href="<?php echo get_page_link(201); ?>" class="sub-item">Reports</a>
            <a href="<?php echo get_page_link(208); ?>" class="sub-item">Publication </a>
         </div>
      </div>
      <div class="item"><a href="<?php echo get_page_link(237); ?>">Vacancy</a></div>
      <div class="item"><a href="<?php echo get_page_link(24); ?>">Contact</a></div>
   </div>
</div>
<!-- mobile menu end  -->
<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"
   integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
   crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
