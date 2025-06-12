<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from live.envalab.com/html/conset/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:22:13 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Blog || Conset - Business Consulting HTML5 Template</title>

    <?php include("includes/styles.php"); ?>
    <style>
        .list_data {
            list-style: disc !important;


        }

        .date-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--primary-color, #fe6600);
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>



        <!--/////////////////////// header start ////////////////////////-->
        <?php $page = 'make_active';  ?>
        <?php include("includes/header.php"); ?>
        <!--/////////////////////// header end ////////////////////////-->


        <!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
        <section class="page-banner overlay">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s">Blog</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
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
        <section class=" pt-130 rpt-80 pb-135 rpb-100">
            <div class="container mt-4 pb-135">
            <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2> <span>Blogs</span></h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
               
                    
                    <?php $i = 100;
                    foreach ($blogs as $blog): ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="date-tag"><?php echo date('j M', strtotime($blog['created_at'])); ?></div>
                                <img class="card-img-top" src="<?php echo base_url('' . $blog['image']); ?>" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo ucfirst($blog['title']); ?></h5>
                                    <p class="card-text"><?php echo ucfirst(substr($blog['about'], 0, 200)); ?></p>
                                    <a href="<?php echo base_url(); ?>blog-detail/<?php echo $blog['id']; ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

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

        <!--==================================================================== 
            Start Call To Action Section
        =====================================================================-->
        <section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                            <h3>You Want To Work With Best Consulting Solutions Company?</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <a href="<?php echo base_url(); ?>contact" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Call To Action Section
        =====================================================================-->

        <!--/////////////////////// footer start ////////////////////////-->

        <?php include("includes/footer.php"); ?>
        <!--/////////////////////// footer end ////////////////////////-->


    </div>
    <!--End pagewrapper-->



    <?php include("includes/scripts.php"); ?>
    <script>
        $(document).ready(function() {
            $("#exe_search").show();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").hide();

            $("#exe_btn").click(function() {
                // alert("hi");
                $("#exe_search").show();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").hide();

            });
            $("#rec_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").show();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").hide();
            });
            $("#hr_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").show();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").hide();
            });
            $("#campus_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").show();
                $("#staff").hide();
                $("#train").hide();
            });
            $("#staff_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").show();
                $("#train").hide();
            });
            $("#train_btn").click(function() {
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