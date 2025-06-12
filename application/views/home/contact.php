<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from live.envalab.com/html/conset/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:23:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Contact Us || Conset - Business Consulting HTML5 Template</title>



    <?php include("includes/styles.php"); ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--/////////////////////// header start ////////////////////////-->
        <?php $page = 'make_active';
        include("includes/header.php"); ?>
        <!--/////////////////////// header end ////////////////////////-->

        <!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
        <section class="page-banner-contact overlay">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" style="color: white !important" data-wow-duration="1.5s">Contact Us.</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


        <!--==================================================================== 
            Start Get In Touch Section
        =====================================================================-->
        <section class="get-in-touch py-150 rpy-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-sidebar">
                            <!-- <div class="sidebar-widget bg-snow">
                                <h3>Location: 01</h3>
                                <ul>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            61 South Big Rock Cove Zurich, Villad 60047
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="callto:+88999666444">+88-999-666-444</a><br>
                                            <a href="callto:+88888555777">+88-888-555-777</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="mailto:info@domain.com">info@domain.com</a><br>
                                            <a href="mailto:support@domain.com">support@domain.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="sidebar-widget bg-black text-white">
                                <h3>Location:</h3>
                                <ul>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="right-content">
                                        <?php echo $address['address']; ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="callto:+91<?php echo $address['contact_1']; ?>">+91 <?php echo $address['contact_1']; ?></a><br>
                                            <!-- <a href="callto:+040-2374 6309">040-2374 6309</a> -->
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="mailto:<?php echo $social_media['gmail']; ?>"><?php echo $social_media['gmail']; ?></a><br>
                                            <!-- <a href="mailto:support@domain.com">support@domain.com</a> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2>Get In <span>Touch. </span></h2>
                        </div>
                        <p>Drop your message in the below form. We will get back to you earliest possible.</p>


                        <form action="#" id="contact-form"   name="contact" class="call-back-form contact-form"  >
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="" placeholder="Name Here" >
                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" value="" placeholder="Email Here" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" value="" placeholder="Phone No." onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="" placeholder="subject" >
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <textarea name="message" rows="7" class="form-control" placeholder="Text here..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-3">
                                    <p id="image_captcha"><?php echo $captcha_image; ?></p>
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:void(0);" class="captcha-refresh sm"><img class="capture-referwch-image" src="<?php echo base_url() . 'assets/home/images/refresh.png'; ?>" /></a>
                                </div>
                                <div class="col-md-3">
                                    <div class="comment-form__input-box">
                                        <div class="form-group">
                                            <input type="text" name="captcha" class="form-control" value=""
                                                placeholder="Enter Captcha"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                                <!-- <button type="submit" class="thm-btn comment-form__btn mt-3"> <span class="button-text">Send a message</span>
                                <span class="loading-indicator"></span></button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Get In Touch Section
        =====================================================================-->


        <!--==================================================================== 
            Start Map Section
        =====================================================================-->
        <div class="contact-map pb-150 rpb-100">
            <div class="container">
                <div class="map-inner">
                    <div class="map" id="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.506024303083!2d78.44948931414393!3d17.435478106007217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9128cfffffd9%3A0xcb18ed7617da41e9!2sHR%20first%20Consulting!5e0!3m2!1sen!2sin!4v1649065631644!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================================================== 
            End Map Section
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
</body>


<!-- Mirrored from live.envalab.com/html/conset/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:23:33 GMT -->

</html>