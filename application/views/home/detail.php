<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Job Details & Application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.css" />
</head>
<body>

  <!-- Header Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark primary-bg sticky-top shadow-sm">

    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Logo" height="30" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner with Breadcrumb and Background Image -->
  <section class="breadcrumb-banner">
    <div class="container position-relative text-white">
      <div class="breadcrumb-overlay"></div>
      <div class="position-relative py-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="#">Jobs</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Frontend Developer</li>
          </ol>
        </nav>
        <h1 class="display-6 fw-semibold">Frontend Developer</h1>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Job Details (Left Column) -->
        <div class="col-lg-7">
          <img src="<?php echo base_url();?>assets/home/images/NEW.jpg" class="img-fluid rounded mb-4" alt="Job Banner" />
          <div class="job-details p-4 rounded shadow-sm">
            <h4 class="text-primary">TechCorp</h4>
            <p class="fw-semibold">
  <i class="bi bi-geo-alt text-primary me-2"></i>
  <strong>Location:</strong> Bangalore, India
</p>
           <p class="fw-semibold">
  <i class="bi bi-briefcase text-primary me-2"></i> 
  <strong>Job Type:</strong> Permanent
</p>
            <p class="mt-3">We’re hiring a frontend developer to build scalable web applications using modern frameworks. You’ll work closely with backend and UI/UX teams.</p>
            <p><strong>Skills:</strong> HTML, CSS, JavaScript, React, Git</p>
            <p><strong>Experience:</strong> 2+ years</p>
           <p class="fw-semibold">
  <i class="bi bi-currency-rupee text-primary me-2"></i> 
  <strong>Salary:</strong> ₹10,00,000 / year
</p>
          </div>
        </div>

        <!-- Application Form (Right Column) -->
        <div class="col-lg-5">
          <div class="bg-white p-4 rounded shadow-sm">
            <h5 class="text-primary mb-4">Apply for this Job</h5>
            <form action="submit_application.php" method="POST" enctype="multipart/form-data">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">First Name *</label>
                  <input type="text" name="first_name" class="form-control" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Last Name *</label>
                  <input type="text" name="last_name" class="form-control" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Email *</label>
                  <input type="email" name="email" class="form-control" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Phone</label>
                  <input type="text" name="phone" class="form-control" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Current Location</label>
                  <input type="text" name="current_location" class="form-control" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Preferred Work Location</label>
                  <select name="work_location_id" class="form-select">
                    <option value="">Select</option>
                    <option value="1">Bangalore</option>
                    <option value="2">Hyderabad</option>
                    <option value="3">Remote</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Resume *</label>
                  <input type="file" name="resume" class="form-control" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Visa Category</label>
                  <input type="text" name="visa_category" class="form-control" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Visa Expiry</label>
                  <input type="date" name="visa_expiry" class="form-control" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Job Type</label>
                  <select name="job_type" class="form-select">
                    <option value="Permanent">Permanent</option>
                    <option value="Contract">Contract</option>
                    <option value="FTC">FTC</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Salary</label>
                  <input type="number" name="salary" step="0.01" class="form-control" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Rate (Hourly)</label>
                  <input type="number" name="rate" step="0.01" class="form-control" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">IR35 Type</label>
                  <select name="ir35_type" class="form-select">
                    <option value="">Select</option>
                    <option value="Inside IR35">Inside IR35</option>
                    <option value="Outside IR35">Outside IR35</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Source</label>
                  <select name="source" class="form-select">
                    <option value="website">Website</option>
                    <option value="social_media">Social Media</option>
                    <option value="friends">Friends</option>
                    <option value="others">Others</option>
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
    <div class="text-center small">
      &copy; 2025 Your Company. All rights reserved.
    </div>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
