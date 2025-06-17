<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<!-- Mirrored from mannatthemes.com/rizz/default/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jun 2025 16:13:38 GMT -->

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
                <form method="post" action="<?= base_url('admin/user/store'); ?>" enctype="multipart/form-data">
                  <div class="row">
                    <!-- <div class="row"> -->
                    <div class="col-lg-6">
                      <!-- Full Name -->
                      <div class="mb-3 row">
                        <label for="full_name" class="col-sm-2 col-form-label text-end">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter full name" required>
                        </div>
                      </div>

                      <!-- Username -->
                      <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label text-end">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                        </div>
                      </div>

                      <!-- Email -->
                      <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-6">
                      <!-- User Type -->
                      <!-- Mobile -->
                      <div class="mb-3 row">
                        <label for="mobile_number" class="col-sm-2 col-form-label text-end">Mobile</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter mobile number" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" required>
                        </div>
                      </div>


                      <div class="mb-3 row">
                        <label for="user_type" class="col-sm-2 col-form-label text-end">User Type</label>
                        <div class="col-sm-10">
                          <select name="user_type" class="form-select" id="user_type" required>
                            <option value="">Select</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">User</option>
                          </select>
                        </div>
                      </div>

                      <!-- Status -->
                      <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label text-end">Status</label>
                        <div class="col-sm-10">
                          <select name="status" class="form-select" id="status" required>
                            <option value="">Select</option>
                            <option value="1">Active</option>

                            <option value="2">Pending</option>
                            <option value="3">Suspended</option>
                          </select>
                        </div>
                      </div>

                      <!-- Image Upload -->
                      <div class="mb-3 row">
                        <label for="image" class="col-sm-2 col-form-label text-end">Image</label>
                        <div class="col-sm-10">
                          <input type="file" name="image" id="image" class="form-control">
                        </div>
                      </div>
                      <!-- </div> -->
                    </div>

                    <!-- Submit -->
                    <div class="row ">
                      <div class="col text-center ">
                        <button type="submit" class="btn btn-primary">Create User</button>
                      </div>
                    </div>

                    <!--end col-->
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

<!-- Mirrored from mannatthemes.com/rizz/default/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jun 2025 16:13:38 GMT -->

</html>