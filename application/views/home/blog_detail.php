<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from live.envalab.com/html/conset/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:22:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Blog || Conset - Business Consulting HTML5 Template</title>

    <?php include("includes/styles.php");?>
    <style>
        .list_data{
    list-style: disc !important;
 
    
   }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        

              
       <!--/////////////////////// header start ////////////////////////-->
       <?php  $page = 'make_active';  ?>
       <?php include("includes/header.php");?>
       <!--/////////////////////// header end ////////////////////////-->


        <!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
        <!-- <section class="page-banner overlay"> -->
        <section class="page-banner overlay" style="background-image: url('<?php echo base_url('' . $blog['banner_image']); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s">Blog</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


        <!--==================================================================== 
            Start Service Details Section
        =====================================================================-->
        <section class="service-details pt-50 pb-50 rpt-90 rpb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-details-content" id ="exe_search">
                             <div class="details-image">
                                <img src="<?php echo base_url('' . $blog['image']); ?>" alt="Service Details Image">
                            </div>
                            <h2><?php echo ucfirst($blog['title']);?></h2>
                            <p><?php echo ucfirst($blog['description']);?></p>
                            
                        </div>
                      
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="sidebar-widget service-widget">
                                <h3>Our Services</h3>
                                <ul>
                                    <li ><a id = "exe_btn" href="javascript:void(0)">Executive Search</a></li>
                                    <li><a id = "rec_btn" href="javascript:void(0)">Recruitment Solutions</a></li>
                                    <li><a id = "hr_btn" href="javascript:void(0)">HR Advisory & Consulting</a></li>
                                    <li><a id = "campus_btn" href="javascript:void(0)">Campus Hiring Solutions</a></li>
                                    <li><a id = "staff_btn" href="javascript:void(0)">Contractual Staffing & Payroll</a></li>
                                    <li><a id = "train_btn" href="javascript:void(0)">Training & Development</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget contact-widget text-center bg-snow">
                                <p>WE ARE READY.</p>
                                <h3>How Can We Help You?</h3>
                                <a href="contact.php" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Service Details Section
        =====================================================================-->
   
       
      
        
        <!--==================================================================== 
            Start Testimonial Section
        =====================================================================-->
        <!-- <section class="testimonial-section pt-135 rpt-85 pb-150 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-8 col-sm-9">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>What Clients Say <span>About Us!</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-area">
                    <div class="review-buttons">
                        <figure>
                            <a href="#" data-review="1" class="review-btn">
                                <img src="assets/images/testimonials/testi-small1.jpg" alt="Reviewed by">
                            </a>
                        </figure>
                        <figure class="active-btn">
                            <a href="#" data-review="2" class="review-btn active">
                                <img src="assets/images/testimonials/testi-small2.jpg" alt="Reviewed by">
                            </a>
                        </figure>
                        <figure>
                            <a href="#" data-review="3" class="review-btn">
                                <img src="assets/images/testimonials/testi-small3.jpg" alt="Reviewed by">
                            </a>
                        </figure>
                    </div>
                    <div class="testimony-content">
                        <div class="review-single">
                            <div class="textimonial-image">
                                <img src="assets/images/testimonials/testi-big1.jpg" alt="Reviewed By">
                            </div>
                            <div class="textimonial-content">
                                <p>After taking the Successfully Speaking Sessions with Lynda I could see a big in my speech patterns. I’m now able to catch myself when I am speaking and when my subjects and verbs don’t agree.</p>
                                <div class="reviewer">
                                    <h3>Daniel Roberts</h3>
                                    <span>Mortgage Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-single active">
                            <div class="textimonial-image">
                                <img src="assets/images/testimonials/testi-big2.jpg" alt="Reviewed By">
                            </div>
                            <div class="textimonial-content">
                                <p>If you are going to use a passage of you need to be sure there isn't anything embarrassing hidden in the middle of text. All the on the internet tend to repeat predefined chunks as necessary, making this the first.</p>
                                <div class="reviewer">
                                    <h3>Kayleen Colbert</h3>
                                    <span>Investment Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-single">
                            <div class="textimonial-image">
                                <img src="assets/images/testimonials/testi-big3.jpg" alt="Reviewed By">
                            </div>
                            <div class="textimonial-content">
                                <p>It’s never too late to learn! I’ve learned new skills to help me to be heard when speaking with men, and I sharpened my speaking skills overall. Thanks again for all of your lessons, suggestions, and materials.</p>
                                <div class="reviewer">
                                    <h3>Charles Fuston</h3>
                                    <span>Business Consulting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Testimonials Section
        =====================================================================-->   
   
       
          <!--/////////////////////// footer start ////////////////////////-->
         
          <?php include("includes/footer.php");?>
                  <!--/////////////////////// footer end ////////////////////////-->


    </div>
    <!--End pagewrapper-->


    
    <?php include("includes/scripts.php");?>
    <script>
        $(document).ready(function(){
            $("#exe_search").show();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").hide();
          
        $("#exe_btn").click(function(){
           // alert("hi");
           $("#exe_search").show();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").hide();

        });
        $("#rec_btn").click(function(){
           // alert("hi");
           $("#exe_search").hide();
            $("#rec_sol").show();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").hide();
        });
        $("#hr_btn").click(function(){
           // alert("hi");
           $("#exe_search").hide();
            $("#rec_sol").hide();
            $("#hr_con").show();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").hide();
        });
        $("#campus_btn").click(function(){
           // alert("hi");
           $("#exe_search").hide();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").show();
            $("#staff").hide();
            $("#train").hide();
        });
        $("#staff_btn").click(function(){
           // alert("hi");
           $("#exe_search").hide();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").show();
            $("#train").hide();
        });
        $("#train_btn").click(function(){
           // alert("hi");
           $("#exe_search").hide();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").show();
        });
        // $("#show").click(function(){
        //     $("p").show();
        // });
        });
    </script>
    
</body>


</html>
