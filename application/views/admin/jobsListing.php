<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">


<head>
  <meta charset="utf-8" />
  <title>SCUBE - Admin & Dashboard </title>
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta
    content="Premium Multipurpose Admin & Dashboard Template"
    name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php include('includes/styles.php'); ?>
  <style>
    .bg-danger.text-white {
      background-color: #f8d7da !important;
      color: #721c24 !important;
    }
  </style>


</head>

<!-- Top Bar Start -->

<body>
  <!-- Top Bar Start -->
  <?php include('includes/topBar.php'); ?>

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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <h4 class="card-title">Listing Table</h4>
                  </div>
                  <div class="col-auto">
                    <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                    <a href="<?= base_url('admin/jobs/create'); ?>" class="btn btn-primary">
                      <i class="bi bi-plus-circle"></i> Add New
                    </a>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
              <!--end card-header-->

              <div class="card-body pt-0">
                <?php if (validation_errors()) : ?>
                  <div class="alert alert-danger">
                    <?= validation_errors(); ?>
                  </div>
                <?php endif; ?>

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
                <div class="table-responsive">
                  <table class="table datatable" id="datatable_1">
                    <thead class="table-light">
                      <tr>
                        <th>ID</th>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Location</th>
                        <th>Job Type</th>
                        <!-- <th>Department</th> -->
                        <th>Experience</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Posted Date</th>
                        <th>Application Deadline</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($jobs)): ?>
                        <?php $i = 0;
                        foreach ($jobs as $job): $i++;
                          $is_expired = (!empty($job->application_deadline) && strtotime($job->application_deadline) < strtotime(date('Y-m-d')));
                        ?>
                          <tr class="<?= $is_expired ? 'bg-danger text-white' : '' ?>">
                            <td><?= $i; ?></td>
                            <td><?= htmlspecialchars($job->job_title); ?></td>
                            <td><?= htmlspecialchars($job->company_name); ?></td>
                            <td><?= htmlspecialchars($job->location); ?></td>
                            <td>
                              <?php
                              echo match ($job->job_type) {
                                'Permanent' => '<span class="badge bg-primary">Permanent</span>',
                                'Contract'  => '<span class="badge bg-info text-dark">Contract</span>',
                                'FTC'       => '<span class="badge bg-warning text-dark">FTC</span>',
                                default     => '<span class="badge bg-light text-dark">N/A</span>',
                              };
                              ?>
                            </td>
                            <td><?= htmlspecialchars($job->experience_required); ?></td>
                            <td><?= $job->salary_min . ' - ' . $job->salary_max; ?></td>
                            <td>
                              <?php
                              echo match ($job->status) {
                                'Active' => '<span class="badge bg-success">Active</span>',
                                'Draft'  => '<span class="badge bg-secondary">Draft</span>',
                                default  => '<span class="badge bg-dark">Unknown</span>',
                              };
                              ?>
                            </td>
                            <td><?= date('Y-m-d', strtotime($job->posted_date)); ?></td>
                            <td><?= date('Y-m-d', strtotime($job->application_deadline)); ?></td>
                            <td>
                              <a href="<?= base_url('admin/jobs/edit/' . $job->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                              <?php if ($this->session->userdata('user_type') == 1): ?>
                                <a href="<?= base_url('admin/jobs/delete/' . $job->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this job?')">Delete</a>
                              <?php endif; ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="11">No jobs found.</td>
                        </tr>
                      <?php endif; ?>

                    </tbody>
                  </table>

                </div>
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
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



</html>