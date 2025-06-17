  <div class="startbar d-print-none">
      <!--start brand-->
      <div class="brand">
          <a href="index.html" class="logo">
              <span>
                  <img
                      src="<?php echo base_url(); ?>assets/admin//images/logo-sm.png"
                      alt="logo-small"
                      class="logo-sm" />
              </span>
              <span class="">
                  <img
                      src="<?php echo base_url(); ?>assets/admin//images/logo-light.png"
                      alt="logo-large"
                      class="logo-lg logo-light" />
                  <img
                      src="<?php echo base_url(); ?>assets/admin//images/logo-dark.png"
                      alt="logo-large"
                      class="logo-lg logo-dark" />
              </span>
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
                          <div class="collapse show" id="sidebarApplications">
                              <ul class="nav flex-column">

                                  <li class="nav-item">
                                      <a class="nav-link" href="<?php echo base_url(); ?>admin/user/">Users</a>
                                  </li>

                                  <li class="nav-item">
                                      <a class="nav-link" href="<?php echo base_url(); ?>admin/jobs/">Jobs List</a>
                                  </li>

                                  <li class="nav-item">
                                      <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                  </li>

                                  <li class="nav-item">
                                      <a class="nav-link" href="apps-invoice.html">Invoice</a>
                                  </li>
                                  <li class="nav-item">
                                      <a
                                          class="nav-link"
                                          href="#sidebarAnalytics"
                                          data-bs-toggle="collapse"
                                          role="button"
                                          aria-expanded="false"
                                          aria-controls="sidebarAnalytics">
                                          <span>Analytics</span>
                                      </a>
                                      <div class="collapse" id="sidebarAnalytics">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a href="analytics-customers.html" class="nav-link">Customers</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a href="analytics-reports.html" class="nav-link">Reports</a>
                                              </li>

                                          </ul>

                                      </div>
                                  </li>
                                  <li class="nav-item">
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
                                          <!--end nav-->
                                      </div>
                                  </li>




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