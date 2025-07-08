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
                <form method="post" action="<?= base_url('admin/jobs/update/' . $job->id); ?>" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <!-- Job Title -->
                      <div class="mb-3">
                        <label class="form-label">Job Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="job_title" value="<?= set_value('job_title', $job->job_title); ?>" required>
                        <small class="text-danger"><?= form_error('job_title'); ?></small>
                      </div>

                      <!-- Company Name -->
                      <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" value="<?= set_value('company_name', $job->company_name); ?>">
                        <small class="text-danger"><?= form_error('company_name'); ?></small>
                      </div>

                      <!-- Location -->
                      <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" value="<?= set_value('location', $job->location); ?>">
                        <small class="text-danger"><?= form_error('location'); ?></small>
                      </div>

                      <!-- Job Type -->


                      <!-- Department -->
                      <div class="mb-3">
                        <label class="form-label">Department</label>
                        <input type="text" class="form-control" name="department" value="<?= set_value('department', $job->department); ?>">
                        <small class="text-danger"><?= form_error('department'); ?></small>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Experience Required</label>
                        <input type="text" class="form-control" name="experience_required" value="<?= set_value('experience_required', $job->experience_required); ?>">
                        <small class="text-danger"><?= form_error('experience_required'); ?></small>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <!-- Experience Required -->
                      <div class="mb-3">
                        <label class="form-label">Job Type <span class="text-danger">*</span></label>
                        <select name="job_type" class="form-select" required>
                          <option value="">Select</option>

                          <?php
                          $types = ['Permanent', 'Contract', 'FTC'];
                          foreach ($types as $type) {
                            $selected = set_value('job_type', $job->job_type) == $type ? 'selected' : '';
                            echo "<option value=\"$type\" $selected>$type</option>";
                          }
                          ?>
                        </select>
                        <small class="text-danger"><?= form_error('job_type'); ?></small>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Work Type <span class="text-danger">*</span></label>
                        <select name="work_type" class="form-select" required>
                          <option value="">Select</option>

                          <?php
                          $types = ['On-Site', 'Hybrid', 'Remote'];
                          foreach ($types as $type) {
                            $selected = set_value('job_type', $job->work_type) == $type ? 'selected' : '';
                            echo "<option value=\"$type\" $selected>$type</option>";
                          }
                          ?>
                        </select>
                        <small class="text-danger"><?= form_error('work_type'); ?></small>
                      </div>



                      <div class="mb-3 row">
                        <div class="col">
                          <label for="salary_min" class="form-label">Min Salary</label>
                          <input type="number" class="form-control" name="salary_min" id="salary_min" value="<?= set_value('salary_min', $job->salary_min); ?>">
                          <small class="text-danger"><?= form_error('salary_min'); ?></small>
                        </div>
                        <div class="col">
                          <label for="salary_max" class="form-label">Max Salary</label>
                          <input type="number" class="form-control" name="salary_max" id="salary_max" value="<?= set_value('salary_max', $job->salary_max); ?>">
                          <small class="text-danger"><?= form_error('salary_max'); ?></small>
                        </div>
                      </div>

                      <!-- Application Deadline -->
                      <div class="mb-3">
                        <label class="form-label">Application Deadline</label>
                        <input type="date" class="form-control" name="application_deadline" value="<?= set_value('application_deadline', $job->application_deadline); ?>">
                        <small class="text-danger"><?= form_error('application_deadline'); ?></small>
                      </div>

                      <!-- Status -->
                      <div class="mb-3">
                        <label class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-select" required>
                          <option value="">Select</option>
                          <option value="Draft" <?= set_value('status', $job->status) == 'Draft' ? 'selected' : '' ?>>Draft</option>
                          <option value="Active" <?= set_value('status', $job->status) == 'Active' ? 'selected' : '' ?>>Active</option>
                          <!-- <option value="Closed" <?= set_value('status', $job->status) == 'Closed' ? 'selected' : '' ?>>Closed</option> -->
                        </select>
                        <small class="text-danger"><?= form_error('status'); ?></small>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Job Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        <small class="text-danger"><?= form_error('image'); ?></small>
                      </div>

                      <?php if (!empty($job->image)) : ?>
                        <div class="mb-3">
                          <img src="<?= base_url($job->image); ?>" alt="Job Image" style="max-height: 150px;">
                          <input type="hidden" name="old_image" value="<?= $job->image; ?>">
                        </div>
                      <?php endif; ?>

                    </div>


                    <!-- Description with CKEditor -->
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="6"><?= set_value('description', $job->description); ?></textarea>
                        <small class="text-danger"><?= form_error('description'); ?></small>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Job</button>
                        <a href="<?= base_url('admin/jobs'); ?>" class="btn btn-secondary">Cancel</a>
                      </div>
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