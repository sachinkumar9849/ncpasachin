<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.minn.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
   </head>
   <?php wp_head();?>
   <body>
      <div class="menu-btn d-lg-none d-block">
         <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <header class="header position-relative w-100">
         <div class="container">
            <nav class="cssmenu d-flex align-items-center">
               <div class="logo_top bg-white">
                  <a href="<?php echo get_page_link(8); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid "></a>
               </div>
               <ul class="menu_ul d-flex justify-content-end align-items-center w-100 p-0">
                  <li>
                     <a class="sub_menu_link" href="#">About</a>
                     <ul class="sub_menu">
                        <li>
                           <a href="<?php echo get_page_link(52); ?>">Introduction</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(94); ?>">Meet the Team</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(50); ?>">Partners</a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="<?php echo get_page_link(125); ?>">Programs</a></li>
                  <li>
                     <a class="sub_menu_link" href="#">Update</a>
                     <ul class="sub_menu">
                        <li>
                           <a href="<?php echo get_page_link(173); ?>">Gallery</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(227); ?>">Video</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(180); ?>">News</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a class="sub_menu_link" href="#">Resources</a>
                     <ul class="sub_menu">
                        <li>
                           <a href="<?php echo get_page_link(201); ?>">Reports</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(208); ?>">Publication</a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="<?php echo get_page_link(237); ?>">Vacancy</a></li>
                  <li><a href="<?php echo get_page_link(24); ?>">Contact</a></li>
                  <li>
                     <a href="<?php echo get_page_link(219); ?>" class="bg_orange animated btn ml-3" data-animation-in="fadeInRight">
                        Donate Now
                        <div class="arrow"></div>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>