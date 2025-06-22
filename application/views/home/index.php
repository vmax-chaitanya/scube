<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Listings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.css">
  <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> -->
    <nav class="navbar navbar-expand-lg navbar-dark primary-bg sticky-top shadow-sm">

    <div class="container">
      <a class="navbar-brand" href="#"><img src="https://via.placeholder.com/40x40" alt="Logo" class="me-2">JobBoard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Companies</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Job Cards Section -->
 <!-- Job Search & Cards Section -->
<section class="py-5">
  <div class="container">
    <!-- Heading -->
    <div class="text-center mb-5">
      <h2>Find Your Dream Job</h2>
      <p>Discover amazing career opportunities with top companies around the world.<br class="d-none d-md-block">Your next adventure starts here.</p>
    </div>

    <!-- Search and Filter -->
    <div class="row mb-4">
      <div class="col-md-4 mb-2">
        <input type="text" class="form-control" placeholder="Search by title, keyword..." />
      </div>
      <div class="col-md-4 mb-2">
        <select class="form-select">
          <option selected>All Locations</option>
          <option>Bangalore</option>
          <option>Hyderabad</option>
          <option>Remote</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <select class="form-select">
          <option selected>All Categories</option>
          <option>Development</option>
          <option>Design</option>
          <option>Marketing</option>
        </select>
      </div>
    </div>

    <!-- Job Cards -->
    <div class="row g-4">
      <!-- Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card job-card h-100 position-relative">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Job Image">
          <!-- Bookmark Icon -->
          <button class="bookmark-btn"><i class="bi bi-bookmark"></i></button>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-2">Frontend Developer</h5>
            <!-- Tags -->
            <div class="mb-3">
              <span class="badge bg-light text-primary border me-1">Full-time</span>
              <span class="badge bg-light text-primary border">Remote</span>
            </div>
            <!-- Info with icons -->
            <p class="card-text"><i class="bi bi-building"></i>TechCorp</p>
            <p class="card-text"><i class="bi bi-geo-alt"></i>Bangalore, India</p>
            <p class="card-text"><i class="bi bi-currency-rupee"></i>10,00,000/year</p>
            <div class="mt-auto d-flex gap-2">
              <a href="#" class="btn apply-btn flex-grow-1"><i class="bi bi-send me-1"></i>Apply</a>
              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal"><i class="bi bi-info-circle"></i></button>
            </div>
          </div>
        </div>
      </div>
       <div class="col-md-6 col-lg-4">
        <div class="card job-card h-100 position-relative">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Job Image">
          <!-- Bookmark Icon -->
          <button class="bookmark-btn"><i class="bi bi-bookmark"></i></button>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-2">Frontend Developer</h5>
            <!-- Tags -->
            <div class="mb-3">
              <span class="badge bg-light text-primary border me-1">Full-time</span>
              <span class="badge bg-light text-primary border">Remote</span>
            </div>
            <!-- Info with icons -->
            <p class="card-text"><i class="bi bi-building"></i>TechCorp</p>
            <p class="card-text"><i class="bi bi-geo-alt"></i>Bangalore, India</p>
            <p class="card-text"><i class="bi bi-currency-rupee"></i>10,00,000/year</p>
            <div class="mt-auto d-flex gap-2">
              <a href="#" class="btn apply-btn flex-grow-1"><i class="bi bi-send me-1"></i>Apply</a>
              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal"><i class="bi bi-info-circle"></i></button>
            </div>
          </div>
        </div>
      </div>
       <div class="col-md-6 col-lg-4">
        <div class="card job-card h-100 position-relative">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Job Image">
          <!-- Bookmark Icon -->
          <button class="bookmark-btn"><i class="bi bi-bookmark"></i></button>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-2">Frontend Developer</h5>
            <!-- Tags -->
            <div class="mb-3">
              <span class="badge bg-light text-primary border me-1">Full-time</span>
              <span class="badge bg-light text-primary border">Remote</span>
            </div>
            <!-- Info with icons -->
            <p class="card-text"><i class="bi bi-building"></i>TechCorp</p>
            <p class="card-text"><i class="bi bi-geo-alt"></i>Bangalore, India</p>
            <p class="card-text"><i class="bi bi-currency-rupee"></i>10,00,000/year</p>
            <div class="mt-auto d-flex gap-2">
              <a href="#" class="btn apply-btn flex-grow-1"><i class="bi bi-send me-1"></i>Apply</a>
              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal"><i class="bi bi-info-circle"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat .col-md-6.col-lg-4 for more cards -->
    </div>

    <!-- Load More -->
    <div class="text-center mt-5">
      <button class="btn btn-primary px-5 py-2">Load More</button>
    </div>
  </div>
</section>


<!-- Job Modal -->
<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jobModalLabel">Frontend Developer - TechCorp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Location:</strong> Bangalore, India</p>
        <p><strong>Salary:</strong> ₹10,00,000/year</p>
        <p><strong>Job Description:</strong> We are looking for a skilled frontend developer to join our team. You will work with modern frameworks and build interactive UIs that engage millions of users.</p>
        <p><strong>Skills Required:</strong> HTML, CSS, JavaScript, React, Git</p>
        <p><strong>Experience:</strong> 2-5 years</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Apply Now</button>
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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


  <!-- Bootstrap JS + Optional Custom JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
