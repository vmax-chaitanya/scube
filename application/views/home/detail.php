<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Job Details & Application</title>
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/home/images/favicon.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">

</head>

<body>

  <?php include('includes/header.php'); ?>


  <!-- Banner with Breadcrumb and Background Image -->
  <section class="breadcrumb-banner">
    <div class="container position-relative text-white">
      <div class="breadcrumb-overlay"></div>
      <div class="position-relative py-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="index.html">Jobs</a></li>
            <!-- <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="#">Jobs</a></li> -->
            <li class="breadcrumb-item active text-white" aria-current="page"><?= htmlspecialchars($job->job_title) ?></li>
          </ol>
        </nav>
        <h1 class="display-6 fw-semibold"><?= htmlspecialchars($job->job_title) ?></h1>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Job Details (Left Column) -->
        <div class="col-lg-7">
          <img src="<?= base_url($job->image ?? 'assets/home/images/default-job.jpg') ?>" class="img-fluid rounded mb-4" alt="Job Banner" />

          <div class="job-details p-4 rounded shadow-sm border">
            <div class="job-title-wrapper">
              <h2 class="job-title"><?= htmlspecialchars($job->job_title) ?></h2>
            </div>


            <!-- Tags -->
            <div class="mb-3">
              <span class="badge bg-light text-primary border me-1"><?= htmlspecialchars($job->work_type) ?></span>

              <span class="badge bg-light text-primary border me-1"><?= htmlspecialchars($job->job_type) ?></span>
              <?php if (strtolower($job->job_type) === 'remote') : ?>
                <span class="badge bg-light text-primary border">Remote</span>
              <?php endif; ?>
            </div>


            <div class="row">
              <!-- Left Column -->
              <div class="col-md-6">
                <ul class="job-meta-list list-unstyled mb-4">
                  <li><i class="bi bi-building job-icon"></i> <?= htmlspecialchars($job->company_name) ?></li>
                  <li><i class="bi bi-geo-alt job-icon"></i> <?= htmlspecialchars($job->location) ?></li>
                  <!-- <li><i class="bi bi-briefcase job-icon"></i> <?= htmlspecialchars($job->job_type) ?></li> -->
                  <li><i class="bi bi-person-lines-fill job-icon"></i> <?= htmlspecialchars($job->department ?? 'N/A') ?></li>
                </ul>
              </div>

              <!-- Right Column -->
              <div class="col-md-6">
                <ul class="job-meta-list list-unstyled mb-4">
                  <li><i class="bi bi-hourglass-split job-icon"></i> <?= htmlspecialchars($job->experience_required ?? 'N/A') ?></li>

                  <?php if ($job->salary_min || $job->salary_max): ?>
                    <li>
                      <i class="bi bi-currency-rupee job-icon"></i>
                      ₹<?= number_format($job->salary_min) ?> - ₹<?= number_format($job->salary_max) ?> / Anum
                    </li>
                  <?php endif; ?>

                  <li>
                    <i class="bi bi-calendar-event job-icon"></i>
                    <?= date('d M Y', strtotime($job->application_deadline)) ?> Deadline
                  </li>
                </ul>
              </div>
            </div>

            <p class="mt-4"><?= nl2br($job->description) ?></p>

            <!-- <div class="mt-4">
              <a href="<?= base_url('apply/' . $job->slug) ?>" class="btn btn-primary">
                <i class="bi bi-send me-1"></i> Apply for this job
              </a>
            </div> -->
          </div>
        </div>


        <!-- Application Form (Right Column) -->
        <div class="col-lg-5">
          <div class="position-sticky sticky-form" style="top: 100px;"> <!-- Adjust top spacing if needed -->
            <div class="bg-white p-4 rounded shadow-sm">
              <?php if (validation_errors()): ?>
                <div class="alert alert-danger">
                  <?= validation_errors() ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                  <?= $this->session->flashdata('error') ?>
                </div>
              <?php endif; ?>

              <h5 class=" mb-4  form-title">Apply for this Job</h5>
              <form action="<?= base_url('job-application/' . $job->slug) ?>" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">First Name *</label>
                    <input type="text" name="first_name" class="form-control" required value="<?= set_value('first_name') ?>" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Last Name *</label>
                    <input type="text" name="last_name" class="form-control" required value="<?= set_value('last_name') ?>" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Email *</label>
                    <input type="email" name="email" class="form-control" required value="<?= set_value('email') ?>" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?= set_value('phone') ?>" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Current Location</label>
                    <input type="text" name="current_location" class="form-control" value="<?= set_value('current_location') ?>" />
                  </div>
                  <!-- <div class="col-md-6">
                    <label class="form-label">Preferred Work Location</label>
                    <select name="work_location_id" class="form-select">
                      <option value="">Select</option>
                      <option value="1" <?= set_select('work_location_id', '1') ?>>Bangalore</option>
                      <option value="2" <?= set_select('work_location_id', '2') ?>>Hyderabad</option>
                      <option value="3" <?= set_select('work_location_id', '3') ?>>Remote</option>
                    </select>
                  </div> -->
                  <div class="col-md-6">
                    <label class="form-label">Resume *</label>
                    <input type="file" name="resume" class="form-control" required accept=".pdf, .doc, .docx" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Visa Category</label>
                    <input type="text" name="visa_category" class="form-control" value="<?= set_value('visa_category') ?>" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Visa Expiry</label>
                    <input type="date" name="visa_expiry" class="form-control" value="<?= set_value('visa_expiry') ?>" />
                  </div>
                  <!-- <div class="col-md-6">
                    <label class="form-label">Job Type</label>
                    <select name="job_type" class="form-select" id="job_type">
                      <option value="Permanent" <?= set_select('job_type', 'Permanent') ?>>Permanent</option>
                      <option value="Contract" <?= set_select('job_type', 'Contract') ?>>Contract</option>
                      <option value="FTC" <?= set_select('job_type', 'FTC') ?>>FTC</option>
                    </select>
                  </div> -->
                  <?php if ($job->job_type == 'Permanent') { ?>
                    <div class="col-md-6" id="salary_group">
                      <label class="form-label">Salary</label>
                      <input type="number" name="salary" step="0.01" class="form-control" value="<?= set_value('salary') ?>" />
                    </div>
                  <?php } else { ?>

                    <div class="col-md-6" id="rate_group">
                      <label class="form-label">Rate (Day)</label>
                      <input type="number" name="rate" step="0.01" class="form-control" value="<?= set_value('rate') ?>" />
                    </div>

                  <?php } ?>

                  <div class="col-md-6">
                    <label class="form-label">Authorized to Work? *</label>
                    <select name="authorized" class="form-select" required>
                      <option value="">Select</option>
                      <option value="1" <?= set_select('authorized', '1') ?>>Yes</option>
                      <option value="0" <?= set_select('authorized', '0') ?>>No</option>
                    </select>
                    <?= form_error('authorized', '<div class="text-danger small">', '</div>'); ?>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Right to Work? *</label>
                    <select name="right_to_work" class="form-select" required>
                      <option value="">Select</option>
                      <option value="1" <?= set_select('right_to_work', '1') ?>>Yes</option>
                      <option value="0" <?= set_select('right_to_work', '0') ?>>No</option>
                    </select>
                    <?= form_error('right_to_work', '<div class="text-danger small">', '</div>'); ?>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Need Sponsorship? *</label>
                    <select name="sponsorship" class="form-select" required>
                      <option value="">Select</option>
                      <option value="1" <?= set_select('sponsorship', '1') ?>>Yes</option>
                      <option value="0" <?= set_select('sponsorship', '0') ?>>No</option>
                    </select>
                    <?= form_error('sponsorship', '<div class="text-danger small">', '</div>'); ?>
                  </div>


                  <div class="col-md-6">
                    <label class="form-label">IR35 Type (if applicable)</label>
                    <select name="ir35_type" class="form-select">
                      <option value="">Select</option>
                      <option value="Inside IR35" <?= set_select('ir35_type', 'Inside IR35') ?>>Inside IR35</option>
                      <option value="Outside IR35" <?= set_select('ir35_type', 'Outside IR35') ?>>Outside IR35</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Source</label>
                    <select name="source" class="form-select">
                      <option value="website" <?= set_select('source', 'website') ?>>Website</option>
                      <option value="social_media" <?= set_select('source', 'social_media') ?>>Social Media</option>
                      <option value="friends" <?= set_select('source', 'friends') ?>>Friends</option>
                      <option value="others" <?= set_select('source', 'others') ?>>Others</option>
                    </select>
                  </div>
                </div>
                <div class="mt-4">
                  <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6 mb-3 mb-md-0">
          <h6>Contact Us</h6>
          <p><i class="bi bi-envelope me-2"></i>contact@example.com</p>
          <p><i class="bi bi-telephone me-2"></i>+91 98765 43210</p>
        </div>
        <div class="col-md-6 text-md-end">
          <h6>Follow Us</h6>
          <a href="#"><i class="bi bi-facebook me-3"></i></a>
          <a href="#"><i class="bi bi-twitter me-3"></i></a>
          <a href="#"><i class="bi bi-linkedin me-3"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
      <hr class="border-light mt-4" />
      <div class="text-center small"> Copyright &copy; 2025 Scube, All rights reserved. Designed by DigitalWin Business Agency

      </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script>
    function toggleFields() {
      var jobType = $('#job_type').val();
      if (jobType === 'Contract') {
        $('#rate_group').show();
        $('#salary_group').hide();
      } else {
        $('#rate_group').hide();
        $('#salary_group').show();
      }
    }

    $(document).ready(function() {
      toggleFields(); // Call on page load (to support pre-selected value)

      $('#job_type').on('change', function() {
        toggleFields(); // Call on change
      });
    });
  </script> -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const dateInput = document.querySelector('input[name="visa_expiry"]');
      const today = new Date().toISOString().split('T')[0]; // yyyy-mm-dd
      dateInput.setAttribute('min', today); // sets min date as today
    });
  </script>

</body>

</html>