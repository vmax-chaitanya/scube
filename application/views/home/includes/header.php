<nav class="navbar navbar-expand-lg sticky-top shadow-sm custom-header">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/home/images/logo.png" alt="Logo" class="logo-img">
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item px-2">
                    <a class="nav-link active" href="#">HOME</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CONSULTING SERVICES
                    </a>
                    <ul class="dropdown-menu shadow-sm" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="#">Cloud Computing</a></li>
                        <li><a class="dropdown-item" href="#">Big Data</a></li>
                        <li><a class="dropdown-item" href="#">IT Consulting</a></li>
                        <li><a class="dropdown-item" href="#">SAP Consulting</a></li>
                        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Business Development</a></li>
                    </ul>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link" href="#">RESOURCES</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">JOBS</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>

                <!-- Call Button -->
                <li class="nav-item ms-3">
                    <a href="tel:+919876543210" class="btn call-btn">
                        <i class="bi bi-telephone-fill me-1"></i> CALL US
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>