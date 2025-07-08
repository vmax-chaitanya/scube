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
                    <h4 class="card-title">Change Password</h4>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <?php if ($this->session->flashdata('success')): ?>
                  <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                <?php endif; ?>

                <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                <form method="post" action="<?= base_url('admin/user/change_password'); ?>">
                  <div class="row">
                    <div class="col-md-6 offset-md-3">
                      <!-- Old Password -->
                      <div class="mb-3">
                        <label for="old_password" class="form-label">Old Password</label>
                        <input type="password" name="old_password" id="old_password" class="form-control" required>
                      </div>

                      <!-- New Password -->
                      <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                      </div>

                      <!-- Confirm Password -->
                      <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm New Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                      </div>

                      <!-- Submit -->
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
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