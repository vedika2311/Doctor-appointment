<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/img/favicon/favicon.ico"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Core CSS -->
    <link
      rel="stylesheet"
      href="./assets/vendor/css/core.css"
      class="template-customizer-core-css"
    />
    <link
      rel="stylesheet"
      href="./assets/vendor/css/theme-default.css"
      class="template-customizer-theme-css"
    />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link
      rel="stylesheet"
      href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside
          id="layout-menu"
          class="layout-menu menu-vertical menu bg-menu-theme"
        >
          <div class="app-brand demo">
            <a href="" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="assets/img/logo/admin.svg" alt="" />
              </span>
              <span
                class="app-brand-text demo menu-text fw-bold ms-2"
                style="text-transform: capitalize"
                >admin</span
              >
            </a>

            <a
              href="javascript:void(0);"
              class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"
            >
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-3 sidebar-items">

            
            <li class="menu-item active">
              <a href="" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-house"></i>
                <div data-i18n="invoice">Dashboard</div>
              </a>
            </li>

            <li class="menu-item open">
              <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-edit"></i>
                <div data-i18n="invoice">Appointments</div>
              </a>
            </li>

            <li class="menu-item open">
              <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-edit"></i>
                <div data-i18n="invoice"> Create Appointments</div>
              </a>
            </li>

             <!-- Departments -->
             <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <!-- <i class="menu-icon tf-icons bx bx-home-circle"></i> -->
                <i class="menu-icon tf-icons fa-solid fa-money-check-dollar"></i>
                <div data-i18n="Dashboards">Departments</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="" class="menu-link">
                    <div data-i18n="Analytics">Add Department</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="" class="menu-link">
                    <div data-i18n="Analytics">View Department</div>
                  </a>
                </li>
                
              </ul>
            </li>

             <!-- Doctors -->
             <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <!-- <i class="menu-icon tf-icons bx bx-home-circle"></i> -->
                <i class="menu-icon tf-icons fa-solid fa-money-check-dollar"></i>
                <div data-i18n="Dashboards">Doctors</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="" class="menu-link">
                    <div data-i18n="Analytics">Add Doctor</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="" class="menu-link">
                    <div data-i18n="Analytics">View Doctor</div>
                  </a>
                </li>
              </ul>
            </li>



           <li class="menu-item">
              <a href="" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-file-invoice"></i>
                <div data-i18n="quote">Manage Admin </div>
              </a>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-phone"></i>
                <div data-i18n="invoice">Contact Us</div>
              </a>
            </li>
         
            <li class="menu-item">
              <a href="" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-file-invoice"></i>
                <div data-i18n="invoice">Logout</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div
              class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
            >
              <a
                class="nav-item nav-link px-0 me-xl-4"
                href="javascript:void(0)"
              >
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div
              class="navbar-nav-right d-flex align-items-center"
              id="navbar-collapse"
            >
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search.."
                    aria-label="Search.."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
               

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <div class="avatar avatar-online">
                      <img
                        src="./assets/img/avatars/1.png"
                        alt
                        class="w-px-40 h-auto rounded-circle"
                      />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img
                                src="./assets/img/avatars/1.png"
                                alt
                                class="w-px-40 h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block" id="profile-name"></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

           <!-- Content wrapper -->
           <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->

               <!-- Cards Section -->
               <div class="row mt-4">
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Total Appointments</h5>
                      <p class="card-text">23</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Complete Appointments</h5>
                      <p class="card-text">12</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Future Appointments</h5>
                      <p class="card-text">10</p>
                    </div>
                  </div>
                </div>
               </div> 
               
               <div class="row mt-4">
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Total Departments</h5>
                      <p class="card-text">5</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Total Doctors</h5>
                      <p class="card-text">10</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Total Admin</h5>
                      <p class="card-text">1</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Total Patients</h5>
                      <p class="card-text">50</p>
                    </div>
                  </div>
                </div>
              </div>
          
            
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div
                class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column"
              >
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , All rights reserved by
                  <a
                    href="https://sitesoch.com"
                    target="_blank"
                    class="footer-link fw-medium"
                    >Sitesoch</a
                  >
                </div>
                <div class="d-none d-lg-inline-block">
                  <a
                    href="https://themeselection.com/license/"
                    class="footer-link me-4"
                    target="_blank"
                    >License</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
