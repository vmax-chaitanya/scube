     <!--==================================================================== 
                                Start Header area
        =====================================================================-->
     <header class="main-header">

         <div class="header-top bg-orange">
             <div class="container">
                 <div class="top-inner">
                     <ul class="top-left">
                         <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $social_media['gmail']; ?>"><?php echo $social_media['gmail']; ?></a></li>
                         <li><i class="fas fa-map-marker-alt"></i><?php echo $address['address']; ?></li>
                     </ul>

                     <div class="top-right ml-auto">
                         <div class="social-style-one">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <!-- <a href="#"><i class="fab fa-skype"></i></a> -->
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-linkedin"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!--Header-Upper-->
         <div class="header-upper">
             <div class="container clearfix">

                 <div class="header-inner d-lg-flex align-items-center">

                     <div class="logo-outer d-flex align-items-center">
                         <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/home/images/logo.png" alt="" title=""></a></div>
                     </div>

                     <div class="nav-outer clearfix ml-lg-auto mr-lg-auto">
                         <!-- Main Menu -->
                         <nav class="main-menu navbar-expand-lg">
                             <div class="navbar-header clearfix">
                                 <!-- Toggle Button -->
                                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                 </button>
                             </div>

                             <div class="navbar-collapse collapse clearfix">
                                 <ul class="navigation clearfix">
                                     <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                     <li><a href="<?php echo base_url(); ?>about">About</a></li>
                                     <!-- <li><a href="service-details.php?id=exe_search">Services</a></li> -->
                                     <li class="dropdown"><a href="#"><a href="<?php echo base_url(); ?>blogs">Services</a></a>
                                         <ul>
                                             <?php $i = 1;
                                                foreach ($services as $row) : ?>
                                                 <li><a href="<?php echo base_url(); ?>services/<?php echo $row['service_url']; ?>"><?php echo $row['name']; ?></a></li>

                                             <?php $i++;
                                                endforeach; ?>
                                         </ul>
                                     </li>
                                     <li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
                                     <li><a href="<?php echo base_url(); ?>blogs">Blog</a></li>

                                     <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                                 </ul>
                             </div>

                         </nav>
                         <!-- Main Menu End-->
                     </div>

                     <div class="menu-number">
                         <i class="flaticon-headphone"></i> <a href="callto:+91 <?php echo $address['contact_1']; ?>">+91 <?php echo $address['contact_1']; ?></a>
                     </div>
                 </div>

             </div>
         </div>
         <!--End Header Upper-->
     </header>
     <!--==================================================================== 
                                End Header area
        =====================================================================-->