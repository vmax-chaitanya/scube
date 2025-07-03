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
    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
      }

      70% {
        box-shadow: 0 0 0 10px rgba(108, 117, 125, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(108, 117, 125, 0);
      }
    }

    .badge-animated {
      position: relative;
      animation: pulse 1.5s infinite;
    }

    /* .badge-animated {
  position: relative;
  animation: pulse 1.5s infinite;
  box-shadow: 0 0 5px rgba(108, 117, 125, 0.6);
} */
  </style>

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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <h4 class="card-title">Listing Table</h4>
                  </div>
                  <div class="col-auto">
                    <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                    <!-- <a href="<?= base_url('admin/jobs/create'); ?>" class="btn btn-primary">
                      <i class="bi bi-plus-circle"></i> Add New
                    </a> -->
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
              <!--end card-header-->

              <div class="card-body pt-0">


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

                  <form method="get" class="mb-3" id="jobFilterForm">
                    <div class="row">
                      <div class="col-md-4">
                        <select name="job_id" id="jobFilterSelect" class="form-select" onchange="filterByJob()">
                          <option value="">-- Filter by Job --</option>
                          <?php foreach ($jobs as $job): ?>
                            <option value="<?= $job->id ?>" <?= ($selected_job_id == $job->id) ? 'selected' : '' ?>>
                              <?= htmlspecialchars($job->job_title) ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </form>

                  <table class="table datatable" id="datatable_1">
                    <!-- <table class="table table-bordered table-striped datatable" id="datatable_applications"> -->
                    <thead class="table-light">
                      <tr>
                        <th>ID</th>
                        <th>Job ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Work Location</th>
                        <th>Job Type</th>
                        <th>Salary / Rate</th>
                        <th>Status</th>
                        <th>Submitted</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($applications)): ?>
                        <?php $i = 0;
                        foreach ($applications as $app): $i++; ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= htmlspecialchars($app->job_id) ?></td>
                            <td><?= htmlspecialchars($app->first_name . ' ' . $app->last_name) ?></td>
                            <td><?= htmlspecialchars($app->email) ?></td>
                            <td><?= htmlspecialchars($app->phone) ?></td>
                            <td><?= htmlspecialchars($app->current_location) ?></td>
                            <td><?= htmlspecialchars($app->work_location_id) ?></td>
                            <td>
                              <?php
                              echo match ($app->job_type) {
                                'Permanent' => '<span class="badge bg-success">Permanent</span>',
                                'Contract'  => '<span class="badge bg-warning text-dark">Contract</span>',
                                'FTC'       => '<span class="badge bg-info text-dark">FTC</span>',
                                default     => '<span class="badge bg-secondary">Unknown</span>',
                              };
                              ?>
                            </td>
                            <td>
                              <?= $app->job_type === 'Permanent' ? '₹' . number_format($app->salary, 2) : '₹' . number_format($app->rate, 2) . '/hr' ?>
                            </td>
                            <td>
                              <?php
                              echo match ($app->status) {
                                '1' => '<span class="badge bg-secondary badge-animated">New</span>',
                                '2' => '<span class="badge bg-primary">Review</span>',
                                '3' => '<span class="badge bg-success">Selected</span>',
                                '4' => '<span class="badge bg-danger">Rejected</span>',
                                default => '<span class="badge bg-dark">Unknown</span>'
                              };
                              ?>
                            </td>
                            <td><?= date('Y-m-d', strtotime($app->created_at)) ?></td>
                            <td>
                              <a href="<?= base_url('admin/jobapplications/view/' . $app->id) ?>" class="btn btn-sm btn-outline-info">View</a>
                              <a href="<?= base_url($app->resume) ?>" target="_blank" class="btn btn-sm btn-outline-secondary">CV</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="12" class="text-center">No job applications found.</td>
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
  <script>
    function filterByJob() {
      const jobId = document.getElementById("jobFilterSelect").value;
      const statusId = <?= json_encode($status) ?>;
      if (jobId) {
        window.location.href = `<?= base_url('admin/jobapplications') ?>/${statusId}/job/${jobId}`;
      } else {
        window.location.href = `<?= base_url('admin/jobapplications') ?>/${statusId}`;
      }
    }
  </script>



</body>
<!--end body-->



</html>