<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon/favicon.ico">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Libs CSS -->
    <link href="<?= base_url() ?>assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/theme.min.css">

    <title>Payment | RentalKuy</title>
</head>

<body>
    <div id="db-wrapper">
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href=""><img src="<?= base_url() ?>assets/images/logo-negative.png" alt="" width="200" /></a>

                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url() ?>">
                            <i class="nav-icon fa fa-car mr-2"></i>Cars
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url('admin/staff') ?>">
                            <i class="nav-icon fe fe-user-check mr-2"></i>Garage Staffs
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url('admin/penyewa') ?>">
                            <i class="nav-icon fe fe-user mr-2"></i>Renter
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/promo') ?>">
                            <i class="nav-icon fe fe-percent mr-2"></i>Promo
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('confirm-payment') ?>">
                            <i class="nav-icon fe fe-percent mr-2"></i>Confirm Payment
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <div class="nav-divider">
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url('logout') ?>">
                            <i class="nav-icon fe fe-power mr-2"></i>Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content -->
        <div id="page-content">
            <div class="header">
                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href=""><i class="fe fe-menu"></i></a>
                    <ul class="navbar-nav navbar-right-wrap ml-auto  d-flex nav-top-wrap ">
                        <li class="dropdown ml-2">
                            <a class="rounded-circle " href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md">
                                    <img alt="avatar" src="<?= $foto_profile ?>" class="rounded-circle">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md">
                                            <img alt="avatar" src="<?= $foto_profile ?>" class="rounded-circle">
                                        </div>
                                        <div class="ml-3 lh-1">
                                            <h5 class="mb-1"><?= $user['nama_lengkap'] ?></h5>
                                            <p class="mb-0 text-muted"><?= $user['email'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('logout') ?>">
                                            <i class="nav-icon fe fe-power mr-2"></i>Sign Out
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
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page Header -->
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">Ongoing</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card rounded-lg">
                            <!-- Card header -->
                            <div class="card-header border-bottom-0 p-0 bg-white">
                            </div>
                            <div>
                                <!-- Table -->
                                <div class="tab-content" id="tabContent">
                                    <!--Tab pane -->
                                    <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                        <div class="table-responsive border-0 overflow-y-hidden">
                                            <table class="table mb-0 ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            CAR NAME
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            RENTER NAME
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            LOCATION
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            PRICE
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            ACTION
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // status 0 : udah dikembalikan, udah rating
                                                    // status 1 : udah dikembalikan, belum rating
                                                    // status 2 : menunggu konfirmasi penyewaan

                                                    foreach ($orderan as $sewa) {
                                                        if (($sewa['status'] == '2')) {
                                                            foreach ($penyewa as $p) {
                                                                if ($p['id'] == $sewa['id_penyewa']) {
                                                                    foreach ($mobil as $kendaraan) {
                                                                        if ($kendaraan['id'] == $sewa['id_mobil']) {
                                                                            ?>
                                                                            <tr>
                                                                                <td class="border-top-0">
                                                                                    <div class="text-inherit">
                                                                                        <div class="d-lg-flex align-items-center">
                                                                                            <div>
                                                                                                <img src="<?= base_url() ?>assets/images/mobil/<?= $kendaraan['gambar'] ?>" alt="" class="img-4by3-lg rounded" />
                                                                                            </div>
                                                                                            <div class="ml-lg-3 mt-2 mt-lg-0">
                                                                                                <h4 class="mb-1 text-primary-hover">
                                                                                                    <?= $kendaraan['nama_mobil'] ?>
                                                                                                </h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="align-middle border-top-0">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <?= $p['nama_lengkap'] ?>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="align-middle border-top-0">
                                                                                    <div class="d-flex align-items-center wrap">
                                                                                        <?= $p['address'] ?>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="align-middle border-top-0">
                                                                                    <div class="d-flex align-items-center wrap">
                                                                                        <?= $kendaraan['harga'] ?>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="align-middle border-top-0">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="<?= base_url() ?>/Admin/confirm/<?= $sewa['id'] ?>" class="btn btn-success btn-sm mr-2">Approved</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                    <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--Tab pane -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="<?= base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/odometer/odometer.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/quill/dist/quill.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/dragula/dist/dragula.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/jQuery.print/jQuery.print.js"></script>
    <script src="<?= base_url() ?>assets/libs/prismjs/prism.js"></script>
    <script src="<?= base_url() ?>assets/libs/prismjs/components/prism-scss.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="<?= base_url() ?>assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/typed.js/lib/typed.min.js"></script>


    <!-- clipboard -->
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="<?= base_url() ?>assets/js/theme.min.js"></script>

</body>

</html>