<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">




<head>


    <meta charset="utf-8" />
    <title>SCUBE - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php include('includes/styles.php'); ?>


</head>

<body>

    <!-- Top Bar Start -->
    <?php include('includes/topBar.php'); ?>

    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <?php include('includes/sideMenu.php'); ?>

    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">

                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                                    <div class="col-9">
                                        <p class="text-dark mb-0 fw-semibold fs-14">Sessions</p>
                                        <h3 class="mt-2 mb-0 fw-bold">24k</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                            <i class="iconoir-hexagon-dice h1 align-self-center mb-0 text-secondary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">8.5%</span>
                                    New Sessions Today</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                                    <div class="col-9">
                                        <p class="text-dark mb-0 fw-semibold fs-14">Avg.Sessions</p>
                                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                                    Weekly Avg.Sessions</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                                    <div class="col-9">
                                        <p class="text-dark mb-0 fw-semibold fs-14">Bounce
                                            Rate</p>
                                        <h3 class="mt-2 mb-0 fw-bold">36.45%</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                            <i class="iconoir-percentage-circle h1 align-self-center mb-0 text-secondary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-danger">8%</span>
                                    Up Bounce Rate Weekly</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
                <!--Start Footer-->
                <?php include('includes/footer.php'); ?>


                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->
        <!-- vendor js -->

        <?php include('includes/scripts.php'); ?>

</body>
<!--end body-->


</html>