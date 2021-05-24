<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Libs CSS -->
  <link href="../assets/fonts/feather/feather.css" rel="stylesheet" />
  <link href="../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
  <link href="../assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="../assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
  <link href="../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
  <link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
  <link href="../assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
  <link href="../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <link href="../assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="../assets/css/theme.min.css">
  <title>Garage Staff | RentalKuy</title>
</head>

<body>
  <!-- Wrapper -->
  <div id="db-wrapper">
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
      <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href=""><img src="../assets/images/logo-negative.png" alt="" width="200" /></a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/mobil') ?>">
              <i class="nav-icon fa fa-car mr-2"></i>Cars
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('admin/staff') ?>">
              <i class="nav-icon fe fe-user-check mr-2"></i>Garage Staffs
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link " href="admin_staffgarasi.html">
              <i class="nav-icon fe fe-dollar-sign mr-2"></i>Payments
            </a>
          </li>
          <!-- Nav item -->
          <li class="nav-item ">
            <div class="nav-divider">
            </div>
          </li>
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link " href="">
              <i class="nav-icon fe fe-power mr-2"></i>Sign Out
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- sidebar -->
    <!-- Page Content -->
    <div id="page-content">
      <div class="header">
        <!-- navbar -->
        <nav class="navbar-default navbar navbar-expand-lg">
          <a id="nav-toggle" href="#!"><i class="fe fe-menu"></i></a>
          <ul class="navbar-nav navbar-right-wrap ml-auto  d-flex nav-top-wrap ">
            <li class="dropdown ml-2">
              <a class="rounded-circle " href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                  <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
                <div class="dropdown-item">
                  <div class="d-flex">
                    <div class="avatar avatar-md">
                      <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                    </div>
                    <div class="ml-3 lh-1">
                      <h5 class="mb-1">Admin</h5>
                      <p class="mb-0 text-muted">emailadmin@gmail.com</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <ul class="list-unstyled">
                  <li>
                    <a class="dropdown-item" href="">
                      <i class="fe fe-power mr-2"></i>Sign Out
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Container fluid -->
      <div class="container-fluid p-4">
        <div class="row">
          <!-- Page Header -->
          <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
              <div class="mb-2 mb-lg-0">
                <h1 class="mb-1 h2 font-weight-bold">
                  Garage Staff
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="card rounded-lg">
              <!-- Card header -->
              <div class="card-header border-bottom-0 p-0 bg-white">
              </div>
              <div class="p-4 row">
                <!-- Form -->
                <form class="d-flex align-items-center col-12 col-md-12 col-lg-12">
                  <span class="position-absolute pl-3 search-icon">
                    <i class="fe fe-search"></i>
                  </span>
                  <input type="search" class="form-control pl-6" placeholder="Search Staff" />
                </form>
              </div>
              <div>
                <!-- Tab -->
                <div class="tab-content" id="tabContent">
                  <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                    <div class="table-responsive border-0 overflow-y-hidden">
                      <table class="table mb-0 ">
                        <thead>
                          <tr>
                            <th scope="col" class="border-0 text-uppercase">
                              Full Name
                            </th>
                            <th scope="col" class="border-0 text-uppercase">
                              Identity Number
                            </th>
                            <th scope="col" class="border-0 text-uppercase">
                              Driver License
                            </th>
                            <th scope="col" class="border-0 text-uppercase">
                              Email
                            </th>
                            <th scope="col" class="border-0 text-uppercase">
                              Status
                            </th>
                            <th scope="col" class="border-0 text-uppercase">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="border-top-0">
                              <h4 class="mb-1 text-primary-hover">
                                Hussey Shin
                              </h4>
                            </td>
                            <td class="align-middle border-top-0">
                              <div class="d-flex align-items-center">
                                1234567890123456
                              </div>
                            </td>
                            <td class="align-middle border-top-0">
                              nomor SIM (?)
                            </td>
                            <td class="align-middle border-top-0">
                              staff1@gmail.com
                            </td>
                            <td class="align-middle border-top-0">
                              <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                            </td>
                            <td class="align-middle border-top-0">
                              <a href="" class="btn btn-outline-white btn-sm">Reject</a>
                              <a href="" class="btn btn-success btn-sm">Approved</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="border-top-0">
                              <h4 class="mb-1 text-primary-hover">
                                Joanne Shin
                              </h4>
                            </td>
                            <td class="align-middle border-top-0">
                              <div class="d-flex align-items-center">
                                1100998877226633
                              </div>
                            </td>
                            <td class="align-middle border-top-0">
                              nomor SIM (?)
                            </td>
                            <td class="align-middle border-top-0">
                              staff2@gmail.com
                            </td>
                            <td class="align-middle border-top-0">
                              <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Verified
                            </td>
                            <td class="align-middle border-top-0">
                              <a type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal_change_status">Change Status</a>
                              <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                            <!-- Modal "Change Status"-->
                            <div class="modal fade" id="modal_change_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle">Change Status</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <select class="custom-select">
                                      <option selected>select status</option>
                                      <option value="1">Pending</option>
                                      <option value="2">Verified</option>
                                      <option value="3">Rejected</option>
                                    </select>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success btn-sm">Submit</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Modal "Change Status" -->
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- Libs JS -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/odometer/odometer.min.js"></script>
  <script src="../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="../assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
  <script src="../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/quill/dist/quill.min.js"></script>
  <script src="../assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
  <script src="../assets/libs/dragula/dist/dragula.min.js"></script>
  <script src="../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
  <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../assets/libs/jQuery.print/jQuery.print.js"></script>
  <script src="../assets/libs/prismjs/prism.js"></script>
  <script src="../assets/libs/prismjs/components/prism-scss.min.js"></script>
  <script src="../assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
  <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
  <script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
  <script src="../assets/libs/typed.js/lib/typed.min.js"></script>

  <!-- clipboard -->
  <script src="../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>


</body>

</html>