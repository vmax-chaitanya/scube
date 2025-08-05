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
                    <h4 class="card-title">Textual Inputs</h4>
                  </div>
                </div>
              </div>
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
                <form method="post" action="<?= base_url('admin/jobs/store'); ?>" enctype="multipart/form-data">
                  <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                      <!-- Job Title -->
                      <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title *</label>
                        <input type="text" class="form-control" name="job_title" id="job_title" required>
                      </div>

                      <!-- Company Name -->
                      <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="company_name">
                      </div>

                      <!-- Location -->
                      <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" id="location">
                      </div>

                      <!-- Department -->
                      <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" name="department" id="department">
                      </div>

                      <!-- Experience Required -->
                      <div class="mb-3">
                        <label for="experience_required" class="form-label">Experience Required</label>
                        <input type="text" class="form-control" name="experience_required" id="experience_required">
                      </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6">
                      <!-- Job Type -->
                      <div class="mb-3">
                        <label for="job_type" class="form-label">Job Type *</label>
                        <select class="form-select" name="job_type" id="job_type" required>
                          <option value="">Select</option>
                          <!-- <option value="Full-time">Full-time</option>
                          <option value="Part-time">Part-time</option>
                          <option value="Internship">Internship</option>
                          <option value="Freelance">Freelance</option>
                          <option value="Remote">Remote</option> -->
                          <option value="Permanent">Permanent</option>
                          <option value="Contract">Contract</option>
                          <option value="FTC">FTC</option>
                        </select>
                      </div>
                      <!-- //'On-Site','Hybrid','Remote' -->
                      <div class="mb-3">
                        <label for="work_type" class="form-label">Work Type</label>
                        <select class="form-select" name="work_type" id="work_type" required>
                          <option value="">Select</option>
                          <option value="On-Site">On-Site</option>
                          <option value="Hybrid">Hybrid</option>
                          <option value="Remote">Remote</option>

                        </select>
                      </div>

                      <!-- Salary Range -->
                      <div class="mb-3 row">
                        <!-- <div class="col">
                          <label for="salary_min" class="form-label">Min Salary</label>
                          <input type="number" class="form-control" name="salary_min" id="salary_min">
                        </div> -->
                        <div class="col">
                          <label for="salary_max" class="form-label"> Salary</label>
                          <input type="number" class="form-control" name="salary_max" id="salary_max">
                        </div>
                      </div>

                      <!-- Application Deadline -->
                      <div class="mb-3">
                        <label for="application_deadline" class="form-label">Application Deadline</label>
                        <input type="date" class="form-control" name="application_deadline" id="application_deadline">
                      </div>

                      <!-- Status -->
                      <div class="mb-3">
                        <label for="status" class="form-label">Status *</label>
                        <select class="form-select" name="status" id="status">
                          <option value="Draft">Draft</option>
                          <option value="Active">Active</option>
                          <!-- <option value="Closed">Closed</option> -->
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Job Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        <small class="text-danger"><?= form_error('image'); ?></small>
                      </div>

                    </div>



                    <!-- Description -->
                    <div class="col-12 mb-3">
                      <label for="description" class="form-label">Job Description *</label>
                      <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary">Create Job</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!--Start Footer-->

      <?php echo include('includes/footer.php'); ?>

      <!--end footer-->
    </div>
    <!-- end page content -->
  </div>
  <!-- end page-wrapper -->

  <!-- Javascript  -->
  <!-- vendor js -->


  <?php include('includes/scripts.php'); ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const fullNameInput = document.getElementById("full_name");
      const usernameInput = document.getElementById("username");

      // Disable manual typing in username
      usernameInput.readOnly = true;

      fullNameInput.addEventListener("input", function() {
        let name = this.value;

        // Remove spaces and special characters, convert to lowercase
        let username = name
          .toLowerCase()
          .replace(/[^a-z0-9]/g, '-'); // keep only alphanumeric

        usernameInput.value = username;
      });
    });
  </script>


</body>
<!--end body-->



</html>