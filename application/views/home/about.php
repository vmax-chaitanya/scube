<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>About Us || Conset - Business Consulting HTML5 Template</title>

    <?php include("includes/styles.php"); ?>
    <style>
        .faq-section {
            background: #f9f9f9;
            padding: 60px 0;
        }

        /* .faq-section .section-title h2 {
        font-size: 32px;
        font-weight: bold;
    }
    .faq-section .section-title span {
        color: var(--primary-color, #fe6600);
    } */
        .faq-card {
            border: none;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        .faq-card .card-header {
            background: #fff;
            padding: 15px 20px;
            border-radius: 8px;
        }

        .faq-card .btn-link {
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            color: #000;
            /* Changed text color to black */
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .faq-card .btn-link:focus {
            text-decoration: none;
        }

        .faq-card .btn-link .arrow {
            color: var(--primary-color, #fe6600);
            /* Arrow in primary color */
            transition: transform 0.3s ease;
        }

        .faq-card .btn-link[aria-expanded="true"] .arrow {
            transform: rotate(180deg);
        }

        .faq-card .card-body {
            padding: 15px 20px;
            font-size: 16px;
            color: #000;
            /* Changed body text color to black */
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>


        <!--/////////////////////// header start ////////////////////////-->
        <?php include("includes/header.php"); ?>
        <!--/////////////////////// header end ////////////////////////-->

        <!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
        <section class="page-banner-about overlay">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" style="color: white !important" data-wow-duration="1.5s">About Us.</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
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
        <section class="service-details pt-140 pb-100 rpt-90 rpb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-details-content">
                            <div class="section-title">
                                <h2>About <span>us.</span></h2>
                            </div>
                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <div class="details-image">
                                <img src="assets/images/services/service-details.jpg" alt="Service Details Image">
                            </div>
                            <h3>Helping Business Owners.</h3> -->
                            <p>Value HR First Consulting is established in the year 2010 with a vision to provide total HR Solutions to the Start-Ups, Small & Medium Enterprises and Corporates. Value HR First Consulting works with the Clients and designs customised HR Solutions starting from Setting Up HR Department, designs Organisation specific HR Formats, Policies, Processes and ensure efficient and effective HR Operations support the business growth. A Dedicated Team provides Recruitment Solutions across the sectors and levels. Value HR First Consulting also provide total HR Compliance Framework including Manpower Outsourcing and Contract Labour Management Solutions. </p>
                            <p>The USP of Value HR First Consulting is to provide customised HR solutions within time lines and within agreed financials. </p>
                            <h3>Team of HR Professionals</h3>
                            <p>Team HR First comprises of Committed, Dynamic & Enthusiastic HR Professionals who are backed up with requisite Qualification and Experience and are commitment to deliver Best in Quality & Quantity in a very short Span of Time.</p>
                            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p> -->
                            <h3>Functional Expertise</h3>
                            <p>Recruitment is what we do – so we do it well, and we do it fast. Our consultants have a real passion for what they do and they know how to do the best possible job in the quickest possible time.</p>
                            <!-- <div class="prev-next-area">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="prev-next-btn prev-btn wow fadeInUp" data-wow-duration="2s" href="service-details.html"><span>Previous.</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="prev-next-btn next-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" href="service-details.html"><span>Next.</span></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="sidebar-widget service-widget">
                                <h3>Our Services</h3>
                                <ul>
                                    <li><a href="service-details.html">Investment Advisor</a></li>
                                    <li><a href="service-details.html">Business Consulting</a></li>
                                    <li><a href="service-details.html">Lawyer Consulting</a></li>
                                    <li><a href="service-details.html">Planning & Management</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget contact-widget text-center bg-snow">
                                <p>WE ARE READY.</p>
                                <h3>How Can We Help You?</h3>
                                <a href="contact.html" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
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
            Start Vission Mission Section
        =====================================================================-->
        <section class="vission-mission  rpy-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="vission-tabs">
                            <li class="wow fadeInUp" data-tab="tab_1" data-wow-duration="1.5s">
                                <h3>Our Vision</h3>
                            </li>
                            <li class="active wow fadeInUp" data-tab="tab_2" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <h3>Our Mission</h3>
                            </li>
                            <li class="wow fadeInUp" data-tab="tab_3" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <h3>Our Values</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="vission-content-wrap">
                            <div id="tab_1" class="vission-tab-content">
                                <div class="section-title">
                                    <h2>Our Vision</span></h2>
                                </div>
                                <p> <?php echo $social_media['mission']; ?>
                                </p>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat in voluptate velit.</p> -->
                                <!--   -->
                            </div>
                            <div id="tab_2" class="vission-tab-content active">
                                <div class="section-title">
                                    <h2>Our Mission</span></h2>
                                </div>
                                <p> <?php echo $social_media['vision']; ?> </p>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                                <!-- <div class="success-item bg-snow">
                                    <div class="icon-image">
                                        <img src="<?php echo base_url(); ?>assets/home/images/about/icon.png" alt="Success Icon Image">
                                    </div>
                                    <div class="success-content">
                                        <span class="count-text" data-speed="2500" data-stop="890">0</span>
                                        <h5>Happy Customers.</h5>
                                    </div>
                                </div> -->
                            </div>
                            <div id="tab_3" class="vission-tab-content">
                                <div class="section-title">
                                    <h2>Our Values</span></h2>
                                </div>
                                <!-- <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat in voluptate velit.</p> -->
                                <p><?php echo $social_media['value']; ?></p>
                                <!-- <div class="success-item bg-snow">
                                    <div class="icon-image">
                                        <img src="<?php echo base_url(); ?>assets/home/images/services/icon6.png" alt="Success Icon Image">
                                    </div>
                                    <div class="success-content">
                                        <span class="count-text" data-speed="2500" data-stop="134">0</span>
                                        <h5>Winning Awards.</h5>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Vission Mission Section
        =====================================================================-->


        <!--==================================================================== 
            Start Call Back Section
        =====================================================================-->
        <!-- <section class="call-back-section text-white py-150 rpt-90 rpb-100">
            <div class="call-back-shap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInUp"  data-wow-duration="2s">
                            <h2>Request A Call Back.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do labore et dolore magna aliqua enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="call-back-form" class="call-back-form" name="call-back-form" action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="full-name" class="form-control" value="" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email-address" class="form-control" value="" placeholder="Email Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone-number" class="form-control" value="" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-10">        
                                    <div class="form-group">
                                        <input type="text" name="short-text" class="form-control" value="" placeholder="Short Text">
                                    </div>
                                </div>                                               
                            </div>
                            <div class="form-group call-submit text-center">
                                <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Call Back Section
        =====================================================================-->


        <!--==================================================================== 
            Start Team Section
        =====================================================================-->
        <section class="team-section pt-50 rpt-90 pb-50 rpb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">

                            <!--<h2> <span>Team HR First</span></h2>-->
                            <h2>Team<span> HR First</span></h2>

                            <!--     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-wrap">

                <?php $j = 1;
                foreach ($team as $row) : ?>
                    <div class="team-item wow fadeInUp" data-wow-duration="<?php echo $j; ?>s">
                        <div class="item-image">
                            <img src="<?php echo base_url('' . $row['image']); ?>" alt="Team Image">
                            <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                          
                        </div> -->
                        </div>
                        <div class="team-desc">
                            <h3 style="text-align: center;"> <?php echo $row['title']; ?></h3>
                            <p class="fs-200 " style="text-align: center;"> <?php echo $row['short_text']; ?></p>

                            <p class="fs-200 " style="text-align: center;"> <?php echo $row['description']; ?></p>
                        </div>
                    </div>
                <?php $j++;
                endforeach; ?>


                <!-- <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="item-image">
                        <img src="<?php echo base_url(); ?>assets/home/images/team/team02.png" alt="Team Image">
                       <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> 
                    </div>
                    <div class="team-desc">
                        <h3>Ms.Kumud, MBA-HR </h3>
                        <p class="fs-200">Sr. HR Business Partner</p>
                    </div>
                </div> -->


            </div>
        </section>
        <!--==================================================================== 
            End Team Section
        =====================================================================-->




        <!--==================================================================== 
            Start Testimonial Section
        =====================================================================-->
        <!-- <section class="testimonial-section pt-50 rpt-85 pb-50 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8 col-sm-9">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>What Clients Say <span>About Us!</span></h2>
                          
                        </div>
                    </div>
                </div>

                <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <?php $i = 1;
                        foreach ($testimonial as $row) : ?>
                            <div class="carousel-item <?php echo $i == 1 ? 'active' : ''; ?>">
                                <div class="testimonial-card">
                                 
                                    <?php if ($row['gender'] == 1) { ?>
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonials/male.jpg" class="profile-img">
                                    <?php } else { ?>
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonials/female.jpg" class="profile-img">
                                    <?php } ?>
                                    <h5><?php echo $row['name']; ?></h5>
                                    <p class="testimonial-text"><?php echo $row['description']; ?></p>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                        <div class="carousel-item">
                        <div class="testimonial-card">
                            <img src="<?php echo base_url(); ?>assets/home/images/team/team02.png" class="profile-img" alt="Jane Smith">
                            <h5>Jane Smith</h5>
                            <p class="testimonial-text">"Amazing experience! The team was professional and delivered on time."</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <img src="<?php echo base_url(); ?>assets/home/images/team/team02.png" class="profile-img" alt="Michael Johnson">
                            <h5>Michael Johnson</h5>
                            <p class="testimonial-text">"Absolutely loved their work! Will definitely use their services again."</p>
                        </div>
                    </div>

                    </div>

                  
                    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section> -->
        <!--==================================================================== 
            End Testimonials Section
        =====================================================================-->

        <!--==================================================================== 
            Start Call To Action Section
        =====================================================================-->
        <!-- <section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
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
        </section> -->
        <!--==================================================================== 
            End Call To Action Section
        =====================================================================-->

        <section class="faq-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8 col-sm-9">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>Frequently Asked <span>Questions</span></h2>

                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
                        </div>
                    </div>
                </div>

                <div id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <?php $k = 1;
                    foreach ($faqs as $row) : ?>
                        <div class="card faq-card">
                            <div class="card-header" id="faqHeading<?php echo $k; ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faqCollapse<?php echo $k; ?>" aria-expanded="false">
                                        <?php echo $row['question']; ?>
                                        <span class="arrow">▼</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="faqCollapse<?php echo $k; ?>" class="collapse" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <?php echo $row['answer']; ?>

                                </div>
                            </div>
                        </div>
                    <?php $k++;
                    endforeach; ?>

                </div>
            </div>
        </section>


        <!--/////////////////////// footer start ////////////////////////-->

        <?php include("includes/footer.php"); ?>
        <!--/////////////////////// footer end ////////////////////////-->

    </div>
    <!--End pagewrapper-->



    <?php include("includes/scripts.php"); ?>

</body>


<!-- Mirrored from live.envalab.com/html/conset/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:22:13 GMT -->

</html>