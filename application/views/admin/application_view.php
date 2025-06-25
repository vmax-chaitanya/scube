<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<!-- Mirrored from mannatthemes.com/rizz/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jun 2025 16:13:52 GMT -->

<head>
  <meta charset="utf-8" />
  <title>Rizz | Rizz - Admin & Dashboard Template</title>
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta
    content="Premium Multipurpose Admin & Dashboard Template"
    name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php include('includes/styles.php'); ?>

</head>

<!-- Top Bar Start -->

<body>
  <!-- Top Bar Start -->
  <?php include('includes/topbar.php'); ?>

  <!-- Top Bar End -->
  <!-- leftbar-tab-menu -->
  <?php include('includes/sideMenu.php'); ?>

  <!--end startbar-->
  <div class="startbar-overlay d-print-none"></div>
  <!-- end leftbar-tab-menu-->

  <div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
      <div class="container-xxl">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <h4 class="card-title">Job Application - <?= $application->first_name ?> <?= $application->last_name ?></h4>
                  </div>
                  <div class="col-auto">
                    <a href="<?= base_url($application->resume) ?>" target="_blank" class="btn btn-sm btn-primary">
                      <i class="las la-eye"></i> View Resume
                    </a>
                    <a href="<?= base_url($application->resume) ?>" download class="btn btn-sm btn-secondary">
                      <i class="las la-download"></i> Download
                    </a>
                  </div>
                </div>
              </div>

              <div class="card-body pt-0">
                <div class="row">
                  <!-- Left Column -->
                  <div class="col-md-6">
                    <ul class="list-unstyled mb-0">
                      <li><i class="las la-user me-2 text-secondary fs-22"></i><b>Full Name</b>: <?= $application->first_name ?> <?= $application->last_name ?></li>
                      <li class="mt-2"><i class="las la-envelope me-2 text-secondary fs-22"></i><b>Email</b>: <?= $application->email ?></li>
                      <li class="mt-2"><i class="las la-phone me-2 text-secondary fs-22"></i><b>Phone</b>: <?= $application->phone ?></li>
                      <li class="mt-2"><i class="las la-map-marker-alt me-2 text-secondary fs-22"></i><b>Current Location</b>: <?= $application->current_location ?></li>
                      <li class="mt-2"><i class="las la-map me-2 text-secondary fs-22"></i><b>Work Location</b>: <?= $application->work_location_id ?></li>
                      <li class="mt-2"><i class="las la-passport me-2 text-secondary fs-22"></i><b>Authorized to Work</b>: <?= $application->authorized_work == 1 ? 'Yes' : 'No' ?></li>
                    </ul>
                  </div>

                  <!-- Right Column -->
                  <div class="col-md-6">
                    <ul class="list-unstyled mb-0">
                      <li><i class="las la-check-circle me-2 text-secondary fs-22"></i><b>Right to Work</b>: <?= $application->right_to_work == 1 ? 'Yes' : 'No' ?></li>
                      <li class="mt-2"><i class="las la-times-circle me-2 text-secondary fs-22"></i><b>Sponsorship Needed</b>: <?= $application->need_sponsorship == 1 ? 'Yes' : 'No' ?></li>
                      <li class="mt-2"><i class="las la-id-card me-2 text-secondary fs-22"></i><b>Visa Category</b>: <?= $application->visa_category ?></li>
                      <li class="mt-2"><i class="las la-calendar me-2 text-secondary fs-22"></i><b>Visa Expiry</b>: <?= date('d M Y', strtotime($application->visa_expiry)) ?></li>
                      <li class="mt-2"><i class="las la-briefcase me-2 text-secondary fs-22"></i><b>Job Type</b>: <?= ucfirst($application->job_type) ?></li>
                      <?php if ($application->job_type == 'permanent'): ?>
                        <li class="mt-2"><i class="las la-money-bill me-2 text-secondary fs-22"></i><b>Salary</b>: ₹<?= $application->salary ?></li>
                      <?php else: ?>
                        <li class="mt-2"><i class="las la-money-check me-2 text-secondary fs-22"></i><b>Rate</b>: ₹<?= $application->rate ?> (<?= $application->ir35_type ?>)</li>
                      <?php endif; ?>
                    </ul>
                  </div>
                </div>


                <div class="mt-4 text-center">
                  <?php if ($application->status == 1): ?>
                    <a href="<?= base_url('admin/jobapplications/update-status/' . $application->id . '/2') ?>" class="btn btn-warning" onclick="return confirm('Are you sure you want to update the status?')">Mark as Review</a>
                    <a href="<?= base_url('admin/jobapplications/update-status/' . $application->id . '/3') ?>" class="btn btn-success" onclick="return confirm('Are you sure you want to update the status?')">Select</a>
                    <a href="<?= base_url('admin/jobapplications/update-status/' . $application->id . '/4') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to update the status?')">Reject</a>
                  <?php elseif ($application->status == 2): ?>
                    <a href="<?= base_url('admin/jobapplications/update-status/' . $application->id . '/3') ?>" class="btn btn-success" onclick="return confirm('Are you sure you want to update the status?')">Select</a>
                    <a href="<?= base_url('admin/jobapplications/update-status/' . $application->id . '/4') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to update the status?')">Reject</a>
                  <?php elseif ($application->status == 3): ?>
                    <a href="<?= base_url('admin/jobapplications/update-status/' . $application->id . '/4') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to update the status?')">Reject</a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->

        <!--end row-->
      </div>
      <!-- container -->
      <!--Start Rightbar-->
      <!--Start Rightbar/offcanvas-->

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

<!-- Mirrored from mannatthemes.com/rizz/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jun 2025 16:13:52 GMT -->

</html>