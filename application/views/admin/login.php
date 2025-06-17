<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>


    <meta charset="utf-8" />
    <title>Rizz | Rizz - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <?php include('includes/styles.php'); ?>

</head>


<!-- Top Bar Start -->

<body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <!-- <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Let's Get Started Rizz</h4>   
                                        <p class="text-muted fw-medium mb-0">Sign in to continue to Rizz.</p>   -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <?php if ($this->session->flashdata('error')) : ?>
                                        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
                                    <?php endif; ?>
                                    <form class="my-4" method="post" action="<?php echo site_url('admin/do_login'); ?>">
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username_email" name="username_email" placeholder="Enter username" required>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                                        </div><!--end form-group-->

                                        <!-- <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div>
                                        </div>end form-group  -->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <!-- <button class="btn btn-primary" type="button">Log In <i class="fas fa-sign-in-alt ms-1"></i></button> -->
                                                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN IN">
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <!-- <div class="text-center  mb-2">
                                        <p class="text-muted">Don't have an account ?  <a href="auth-register.html" class="text-primary ms-2">Free Resister</a></p>
                                        <h6 class="px-3 d-inline-block">Or Login With</h6>
                                    </div> -->
                                    <!-- <div class="d-flex justify-content-center">
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-blue-subtle text-blue rounded-circle me-2">
                                            <i class="fab fa-facebook align-self-center"></i>
                                        </a>
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-info-subtle text-info rounded-circle me-2">
                                            <i class="fab fa-twitter align-self-center"></i>
                                        </a>
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-danger-subtle text-danger rounded-circle">
                                            <i class="fab fa-google align-self-center"></i>
                                        </a>
                                    </div> -->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->
</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jun 2025 16:13:09 GMT -->

</html>