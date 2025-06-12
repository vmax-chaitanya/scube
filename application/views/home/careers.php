<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from live.envalab.com/html/conset/case-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:22:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Case Details || Conset - Business Consulting HTML5 Template</title>

    <!-- Fav Icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/images/favicon.png" type="image/x-icon">

    <?php include("includes/styles.php"); ?>
    <style>
        .custom-table {
            border: 2px solid #444;
            border-radius: 12px;
            overflow: hidden;
            background-color: #FF8431;
            /* clips the rounded corners */
        }

        .table-success {
            background-color: #FF8431;
            color: white;
        }

        .custom-table thead tr th:first-child {
            border-top-left-radius: 12px;
        }

        .custom-table thead tr th:last-child {
            border-top-right-radius: 12px;
        }

        .custom-table tbody tr:last-child td:first-child {
            border-bottom-left-radius: 12px;
        }

        .custom-table tbody tr:last-child td:last-child {
            border-bottom-right-radius: 12px;
        }

        /* Even rows background */
        .custom-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
            /* light gray, similar to Bootstrap's bg-light */
        }

        /* Odd rows background */
        .custom-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
            /* white */
        }
    </style>

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
        <section class="page-banner overlay">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s">Careers</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Careers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


        <!--==================================================================== 
            Start Case Details Section
        =====================================================================-->
        <section class="case-details pt-15 rpt-100">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-1"> -->
                    <!-- <div class="case-sidebar">
                            <div class="sidebar-widget information-widget bg-snow">
                                <h3>Case Information<span>.</span></h3>
                                <ul>
                                    <li><span>Clients </span> Marian Crant</li>
                                    <li><span>Category </span> Data Management</li>
                                    <li><span>Date </span> 22 August 2021</li>
                                    <li><span>Website </span> <a href="https://www.domain.com/">www.domain.com</a></li>
                                    <li><span>Location </span> U598, USA.</li>
                                    <li><span>Duration </span> 04 months.</li>
                                </ul>
                            </div>
                            <div class="sidebar-widget contact-widget text-center bg-black">
                                <p>WE ARE READY.</p>
                                <h3>How Can We Help You?</h3>
                                <a href="contact.html" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div> -->
                    <!-- </div> -->
                    <div class="col-lg-12">
                        <div class="case-details-content">
                            <!-- <div class="case-gallery">
                                <div class="tab-content" id="img-gallery">
                                    <div class="tab-pane" id="tab1" role="tabpanel" aria-labelledby="tab-01">
                                        <figure>
                                            <img src="assets/images/cases/case-details2.jpg" alt="Case Details Image">
                                        </figure>
                                    </div>
                                    <div class="tab-pane fade fade show active" id="tab2" role="tabpanel" aria-labelledby="tab-02">
                                        <figure>
                                            <img src="assets/images/cases/case-details1.jpg" alt="Case Details Image">
                                        </figure>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-03">
                                        <figure>
                                            <img src="assets/images/cases/case-details2.jpg" alt="Case Details Image">
                                        </figure>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-04">
                                        <figure>
                                            <img src="assets/images/cases/case-details1.jpg" alt="Case Details Image">
                                        </figure>
                                    </div>
                                </div>
                                <ul class="case-gallery-list nav" id="case-images" role="tablist">
                                    <li>
                                        <a id="tab-01" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                                            <figure>
                                                <img src="assets/images/cases/thumb2.jpg" alt="Case Thumb Image">
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" id="tab-02" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                                            <figure>
                                                <img src="assets/images/cases/thumb1.jpg" alt="Case Thumb Image">
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="tab-03" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                                            <figure>
                                                <img src="assets/images/cases/thumb3.jpg" alt="Case Thumb Image">
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="tab-04" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">
                                            <figure>
                                                <img src="assets/images/cases/thumb4.jpg" alt="Case Thumb Image">
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- <div class="section-title">
                                <h2>Planning & <span>Management</span></h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. It uses a dictionary of over 200 Latin words, combined with a handful of model sentenc structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always fre from repetition, injected humour, or non-characteristic words etc.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repea.</p> -->
                            <div class="case-middle">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="middle-content">
                                            <h3>Careers</h3>
                                            <!-- <p><b>A career with HR First Solutions !!
                                                    Job Openings from Work from Home.</b></p>
                                            <h3>Consultant–Talent Acquisition</h3>
                                            <p>We are looking for people who dare to Think Big and Dream Big!
                                                If you are ready to discover just how far your talents can take you, we
                                                invite you to apply for suitable openings with us.
                                                At <b>HR First Solutions</b> each member is the Partner-in-Success. They
                                                work
                                                for their as well as company’s growth and with every success achieved by
                                                the company they find themselves a mile ahead in their career.</p>
                                            <p>We give you the freedom to define your own growth paths and roles.</p> -->
                                            <table class="table custom-table">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Position</th>
                                                        <!-- <th>Description</th> -->
                                                        <!-- <th>Status</th> -->
                                                        <th>Qualification</th>
                                                        <th>Experience</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (!empty($jobs)): ?>
                                                        <?php foreach ($jobs as $job): ?>
                                                            <tr>
                                                                <td><?= htmlspecialchars($job['id']); ?></td>
                                                                <td><?= htmlspecialchars($job['poisition']); ?></td>
                                                                <!-- <td><?= htmlspecialchars($job['description']); ?></td> -->
                                                                <td><?= htmlspecialchars($job['qualification']); ?></td>
                                                                <td><?= htmlspecialchars($job['exprience']); ?></td>

                                                                <td>₹ <?= htmlspecialchars($job['salary']); ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="6" style="text-align:center;">No jobs found</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="middle-image">
                                            <img src="<?php echo base_url(); ?>assets/home/images/cases/case-middle.jpg" alt="Case Middle Image">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!--  -->
                            <!-- <div class="prev-next-area">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="prev-next-btn prev-btn wow fadeInUp" data-wow-duration="2s" href="case-details.html"><span>Previous.</span></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="prev-next-btn next-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" href="case-details.html"><span>Next.</span></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Case Details Section
        =====================================================================-->


        <!--==================================================================== 
            Star Related Cases Section<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repea.</p>
                            <h3>Case Result/Implication.</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p>
        =====================================================================-->
        <section class="related-cases  rpt-90 pb-150 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- <div class="col-lg-6">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>Related Cases</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2>Apply <span>Here. </span></h2>
                        </div>

                        <!-- <p>Drop your message in the below form. We will get back to you earliest possible.</p> -->
                        <form class="call-back-form" action="#" id="career-form" name="careeerForm" class="career-form" enctype="multipart/form-data">


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="career_name" class="form-control" value=""
                                            placeholder="Name Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="career_email" class="form-control" value=""
                                            placeholder="Email Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="careeer_mobile" class="form-control" value=""
                                            placeholder="Phone No." onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" name="resume" class="form-control" value=""
                                            placeholder="resume" required="" title="Upload Resume" accept="application/pdf, application/msword,.doc,.docx, image/*">
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <textarea name="message" rows="7" class="form-control"
                                            placeholder="Text here..."></textarea>
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
                                                placeholder="Enter Captcha" required="" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="theme-btn" type="submit">Submit Now <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Related Cases Section
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

<!-- Mirrored from live.envalab.com/html/conset/case-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:23:26 GMT -->

</html>