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
                    <a href="<?= base_url('admin/user/create'); ?>" class="btn btn-primary">
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
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>User Type</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($users)): ?>
                        <?php $i = 0;
                        foreach ($users as $user): $i++; ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= htmlspecialchars($user->username); ?></td>
                            <td><?= htmlspecialchars($user->full_name); ?></td>
                            <td><?= htmlspecialchars($user->email); ?></td>
                            <td><?= htmlspecialchars($user->mobile_number); ?></td>
                            <td>
                              <?php
                              echo match ($user->user_type) {
                                '1' => '<span class="badge bg-primary">Super Admin</span>',
                                '2' => '<span class="badge bg-info text-dark">Admin</span>',
                                '3' => '<span class="badge bg-secondary">User</span>',
                                default => '<span class="badge bg-dark">Unknown</span>',
                              };
                              ?>
                            </td>

                            <td>
                              <?php
                              echo match ($user->status) {
                                '1' => '<span class="badge bg-success text-dark">Active</span>',
                                '2' => '<span class="badge bg-warning">In-Active</span>',
                                '3' => '<span class="badge bg-danger">Suspended</span>',
                                default => '<span class="badge bg-dark">Unknown</span>',
                              };
                              ?>
                            </td>
                            <td><?= date('Y-m-d H:i:s', strtotime($user->created_at)); ?></td>
                            <td>
                              <!-- Action buttons (customize routes) -->
                              <a href="<?= base_url('admin/user/edit/' . $user->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                              <a href="<?= base_url('admin/user/delete/' . $user->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="9">No users found.</td>
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