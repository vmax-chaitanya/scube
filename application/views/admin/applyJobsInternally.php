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
                <form method="post" action="<?= base_url('job-application/') ?>" enctype="multipart/form-data">
                  <div class="row">

                    <!-- Left Column -->
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">First Name *</label>
                        <input type="text" name="first_name" class="form-control" required value="<?= set_value('first_name') ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Last Name *</label>
                        <input type="text" name="last_name" class="form-control" required value="<?= set_value('last_name') ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control" required value="<?= set_value('email') ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= set_value('phone') ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Current Location</label>
                        <input type="text" name="current_location" class="form-control" value="<?= set_value('current_location') ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Resume *</label>
                        <input type="file" name="resume" class="form-control" required accept=".pdf,.doc,.docx">
                        <small class="text-danger"><?= form_error('resume'); ?></small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Visa Category</label>
                        <input type="text" name="visa_category" class="form-control" value="<?= set_value('visa_category') ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Visa Expiry</label>
                        <input type="date" name="visa_expiry" class="form-control" value="<?= set_value('visa_expiry') ?>">
                      </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6">

                      <?php // if ($job->job_type == 'Permanent') { 
                      ?>
                      <div class="mb-3">
                        <label class="form-label">Salary</label>
                        <input type="number" name="salary" step="0.01" class="form-control" value="<?= set_value('salary') ?>">
                      </div>
                      <?php // } else { 
                      ?>
                      <div class="mb-3">
                        <label class="form-label">Rate (Per Day)</label>
                        <input type="number" name="rate" step="0.01" class="form-control" value="<?= set_value('rate') ?>">
                      </div>
                      <?php // } 
                      ?>

                      <div class="mb-3">
                        <label class="form-label">Authorized to Work? *</label>
                        <select name="authorized" class="form-select" required>
                          <option value="">Select</option>
                          <option value="1" <?= set_select('authorized', '1') ?>>Yes</option>
                          <option value="0" <?= set_select('authorized', '0') ?>>No</option>
                        </select>
                        <small class="text-danger"><?= form_error('authorized'); ?></small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Right to Work? *</label>
                        <select name="right_to_work" class="form-select" required>
                          <option value="">Select</option>
                          <option value="1" <?= set_select('right_to_work', '1') ?>>Yes</option>
                          <option value="0" <?= set_select('right_to_work', '0') ?>>No</option>
                        </select>
                        <small class="text-danger"><?= form_error('right_to_work'); ?></small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Need Sponsorship? *</label>
                        <select name="sponsorship" class="form-select" required>
                          <option value="">Select</option>
                          <option value="1" <?= set_select('sponsorship', '1') ?>>Yes</option>
                          <option value="0" <?= set_select('sponsorship', '0') ?>>No</option>
                        </select>
                        <small class="text-danger"><?= form_error('sponsorship'); ?></small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">IR35 Type (if applicable)</label>
                        <select name="ir35_type" class="form-select">
                          <option value="">Select</option>
                          <option value="Inside IR35" <?= set_select('ir35_type', 'Inside IR35') ?>>Inside IR35</option>
                          <option value="Outside IR35" <?= set_select('ir35_type', 'Outside IR35') ?>>Outside IR35</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">How did you hear about us?</label>
                        <select name="source" class="form-select">
                          <option value="">Select</option>
                          <option value="website" <?= set_select('source', 'website') ?>>Website</option>
                          <option value="social_media" <?= set_select('source', 'social_media') ?>>Social Media</option>
                          <option value="friends" <?= set_select('source', 'friends') ?>>Friends</option>
                          <option value="others" <?= set_select('source', 'others') ?>>Others</option>
                        </select>
                      </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 text-center mt-3">
                      <button type="submit" class="btn btn-primary">Submit Application</button>
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