  <div class="startbar d-print-none">
      <!--start brand-->
      <div class="brand">
          <a href="<?php echo base_url(); ?>admin/dashboard" class="logo">
              <span>
                  <img
                      src="<?= base_url(); ?>assets/home/images/logo.png"
                      alt="logo-small"
                      class="logo-sm" />
              </span>
              <!-- <span class="">
                  <img
                      src="<?= base_url(); ?>assets/home/images/logo.png"
                      alt="logo-large"
                      class="logo-lg logo-light" />
                  <img
                      src="<?= base_url(); ?>assets/home/images/logo.png"
                      alt="logo-large"
                      class="logo-lg logo-dark" />
              </span> -->
          </a>
      </div>
      <!--end brand-->
      <!--start startbar-menu-->
      <div class="startbar-menu">
          <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
              <div class="d-flex align-items-start flex-column w-100">
                  <!-- Navigation -->
                  <ul class="navbar-nav mb-auto w-100">
                      <li class="menu-label pt-0 mt-0">
                          <span>Main Menu</span>
                      </li>
                      <!-- <li class="nav-item">
                          <a
                              class="nav-link active"
                              href="#sidebarDashboards"
                              data-bs-toggle="collapse"
                              role="button"
                              aria-expanded="false"
                              aria-controls="sidebarDashboards">
                              <i class="iconoir-home-simple menu-icon"></i>
                              <span>Dashboards</span>
                          </a>
                          <div class="collapse" id="sidebarDashboards">
                              <ul class="nav flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link" href="index.html">Analytics</a>
                                  </li>

                                  <li class="nav-item">
                                      <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                                  </li>

                              </ul>

                          </div>

                      </li> -->
                      <li class="nav-item">
                          <a
                              class="nav-link"
                              href="#sidebarApplications"
                              data-bs-toggle="collapse"
                              role="button"
                              aria-expanded="true"
                              aria-controls="sidebarApplications">
                              <i class="iconoir-view-grid menu-icon"></i>
                              <span>Dasboard</span>
                          </a>
                          <?php
                            $user_type = $this->session->userdata('user_type'); ?>
                          <div class="collapse show" id="sidebarApplications">
                              <ul class="nav flex-column">
                                  <?php if ($user_type == 1) { ?>
                                      <li class="nav-item">
                                          <a class="nav-link" href="<?php echo base_url(); ?>admin/user/">Users</a>
                                      </li>
                                  <?php } ?>
                                  <?php if ($user_type == 1 || $user_type == 2) { ?>
                                      <li class="nav-item">
                                          <a class="nav-link" href="<?php echo base_url(); ?>admin/jobs/">Jobs List</a>
                                      </li>
                                  <?php } ?>

                                  <!-- <li class="nav-item">
                                      <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                  </li>

                                  <li class="nav-item">
                                      <a class="nav-link" href="apps-invoice.html">Invoice</a>
                                  </li> -->

                                  <?php if ($user_type == 1  || $user_type == 2 || $user_type == 3) { ?>

                                      <li class="nav-item">
                                          <a
                                              class="nav-link"
                                              href="#sidebarAnalytics"
                                              data-bs-toggle="collapse"
                                              role="button"
                                              aria-expanded="true"
                                              aria-controls="sidebarAnalytics">
                                              <span>Job Applications</span>
                                          </a>
                                          <div class="collapse show" id="sidebarAnalytics">
                                              <ul class="nav flex-column">
                                                  <li class="nav-item">
                                                      <a href="<?php echo base_url(); ?>admin/jobapplications/1" class="nav-link">Pending</a>
                                                  </li>

                                                  <li class="nav-item">
                                                      <a href="<?php echo base_url(); ?>admin/jobapplications/2" class="nav-link">Reviewed</a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="<?php echo base_url(); ?>admin/jobapplications/3" class="nav-link">Selected</a>
                                                  </li>

                                                  <li class="nav-item">
                                                      <a href="<?php echo base_url(); ?>admin/jobapplications/4" class="nav-link">Rejected</a>
                                                  </li>

                                              </ul>

                                          </div>
                                      </li>
                                  <?php } ?>
                                  <!-- <li class="nav-item">
                                      <a
                                          class="nav-link"
                                          href="#sidebarProjects"
                                          data-bs-toggle="collapse"
                                          role="button"
                                          aria-expanded="false"
                                          aria-controls="sidebarProjects">
                                          <span>Projects</span>
                                      </a>
                                      <div class="collapse" id="sidebarProjects">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-clients.html">Clients</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-team.html">Team</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-project.html">Project</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-task.html">Task</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a
                                                      class="nav-link"
                                                      href="projects-kanban-board.html">Kanban Board</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-chat.html">Chat</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-users.html">Users</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="projects-create.html">Project Create</a>
                                              </li>

                                          </ul>

                                      </div>
                                  </li>

                                  <li class="nav-item">
                                      <a
                                          class="nav-link"
                                          href="#sidebarEcommerce"
                                          data-bs-toggle="collapse"
                                          role="button"
                                          aria-expanded="false"
                                          aria-controls="sidebarEcommerce">
                                          <span>Ecommerce</span>
                                      </a>
                                      <div class="collapse" id="sidebarEcommerce">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="ecommerce-products.html">Products</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="ecommerce-customers.html">Customers</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a
                                                      class="nav-link"
                                                      href="ecommerce-customer-details.html">Customer Details</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="ecommerce-orders.html">Orders</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a
                                                      class="nav-link"
                                                      href="ecommerce-order-details.html">Order Details</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a class="nav-link" href="ecommerce-refunds.html">Refunds</a>
                                              </li>

                                          </ul>
                                         
                          </div>
                      </li> -->




                              </ul>
                              <!--end nav-->
                          </div>

                      </li>
                  </ul>
                  <!--end navbar-nav--->
                  <!-- <div class="update-msg text-center">
                      <div
                          class="d-flex justify-content-center align-items-center thumb-lg update-icon-box rounded-circle mx-auto">
                          <i
                              class="iconoir-peace-hand h3 align-self-center mb-0 text-primary"></i>
                      </div>
                      <h5 class="mt-3">Mannat Themes</h5>
                      <p class="mb-3 text-muted">
                          Rizz is a high quality web applications.
                      </p>
                      <a
                          href="javascript: void(0);"
                          class="btn text-primary shadow-sm rounded-pill">Upgrade your plan</a>
                  </div> -->
              </div>
          </div>
          <!--end startbar-collapse-->
      </div>
      <!--end startbar-menu-->
  </div>
  <!--end startbar-->
  <div class="startbar-overlay d-print-none"></div>