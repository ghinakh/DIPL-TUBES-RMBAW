<?php
defined('BASEPATH') or exit('No direct script access allowed');
function tanggal_indonesia($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

<body>
    <!-- Page Content -->
    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top" style="
                                    background: url(assets/images/background/profile-bg.jpg) no-repeat;
                                    background-size: cover;
                                ">
                    </div>
                    <div class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="mr-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <span class="avatar-xl rounded-circle avatar-warning border-width-4 border-white">
                                    <span class="avatar-initials rounded-circle"><?= $foto_profile ?></span>
                                </span>
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">
                                    <?= $user["nama_lengkap"] ?>
                                    <a href="#!" class="text-decoration-none" data-toggle="tooltip" data-placement="top" title="<?= $level ?>">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                        </svg>
                                    </a>
                                </h2>
                                <p class="mb-0 d-block"><?= $level ?></p>
                            </div>
                        </div>
                        <div>
                            <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-primary btn-sm d-none d-md-block">Go to
                                Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->

            <div class="row mt-4">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Side navbar -->
                    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
                        <!-- Menu -->
                        <a class="d-xl-none d-lg-none d-md-none text-inherit font-weight-bold" href="#!">Menu</a>
                        <!-- Button -->
                        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-toggle="collapse" data-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fe fe-menu"></span>
                        </button>
                        <!-- Collapse navbar -->
                        <div class="collapse navbar-collapse" id="sidenav">
                            <div class="navbar-nav flex-column">
                                <span class="navbar-header">History</span>
                                <ul class="list-unstyled ml-n2 mb-4">
                                    <!-- Nav item -->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= base_url('history') ?>"><i class="fe fe-calendar nav-icon"></i>Car History
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="history_payment.html"><i class="fe fe-credit-card nav-icon"></i>Payment History</a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="info_saldo.html"><i class="fe fe-credit-card nav-icon"></i>Topup Saldo</a>
                                    </li>
                                </ul>
                                <!-- Navbar header -->
                                <span class="navbar-header">Account Settings</span>
                                <ul class="list-unstyled ml-n2 mb-0">
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('edit/profile') ?>"><i class="fe fe-settings nav-icon"></i>Edit Profile</a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('change/password') ?>"><i class="fe fe-lock nav-icon"></i>Change Password</a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('logout') ?>"><i class="fe fe-power nav-icon"></i>Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- Card -->
                    <div class="card border-0">
                        <!-- Card header -->
                        <div class="card-header d-lg-flex justify-content-between align-items-center">
                            <div class="mb-3 mb-lg-0">
                                <h3 class="mb-0">Car History</h3>
                                <p class="mb-0">
                                    Here is list of cars that you rent.
                                </p>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="tab-content" id="tabContent">
                            <!--Tab pane -->
                            <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="table-responsive border-0 overflow-y-hidden">
                                    <table class="table mb-0 ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 text-uppercase">
                                                    CARS
                                                </th>
                                                <th scope="col" class="border-0 text-uppercase">
                                                    STATUS
                                                </th>
                                                <th scope="col" class="border-0 text-uppercase">
                                                    ACTION
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($orderan as $sewa) {
                                                foreach ($mobil as $kendaraan) {
                                                    if ((int)$sewa['status'] == 1) {
                                                        $status = '<span class="badge badge-success">Returned</span>';
                                                        $button = '<a href="javascript:;" data-id="' . $sewa['id'] . '" data-toggle="modal" data-target="#edit-data"><button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Rate Now</button></a>';
                                                    } else if ((int)$sewa['status'] == 0) {
                                                        $status = '<span class="badge badge-success">Returned</span>';
                                                        $button = '<span class="text-warning">' . $sewa['rate'] . '<i class="mdi mdi-star"></i></span>';
                                                    }
                                                    if ($kendaraan['id'] ==  $sewa['id_mobil']) {
                                                        $nama_ken = $kendaraan['nama_mobil'];
                                                        $jenis = $kendaraan['jenis'];
                                                        $gambar = $kendaraan['gambar'];
                                                    }
                                                }
                                            ?>
                                                <tr>
                                                    <td class="border-top-0">
                                                        <div class="text-inherit">
                                                            <div class="d-lg-flex align-items-center">
                                                                <div>
                                                                    <img src="assets/images/mobil/<?= $gambar ?>" alt="" class="img-4by3-lg rounded" />
                                                                </div>
                                                                <div class="ml-lg-3 mt-2 mt-lg-0">
                                                                    <h4 class="mb-1 text-primary-hover">
                                                                        (CAR-<?= $sewa['id'] ?>) <?= $nama_ken ?>
                                                                    </h4>
                                                                    <span class="text-inherit">Returned on <?= tanggal_indonesia($sewa['tanggal_selesai']); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle border-top-0">
                                                        <?= $status ?>
                                                    </td>
                                                    <td class="align-middle border-top-0">
                                                        <?= $button ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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

    <!-- Footer -->

    <div class="footer">
        <div class="container">
            <div class="row align-items-center no-gutters border-top py-2">
                <!-- Desc -->
                <div class="col-md-6 col-12 text-center text-md-left">
                    <span>© 2021 RentalKuy. All Rights Reserved.</span>
                </div>
                <!-- Links -->
                <div class="col-12 col-md-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-end">
                        <a class="nav-link active pl-0" href="">Privacy</a>
                        <a class="nav-link" href="">Terms </a>
                        <a class="nav-link" href="">Feedback</a>
                        <a class="nav-link" href="">Support</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#edit-data').on('show.bs.modal', function(event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value", div.data('id'));
            });
        });
    </script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/odometer/odometer.min.js"></script>
    <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
    <script src="assets/libs/dragula/dist/dragula.min.js"></script>
    <script src="assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/jQuery.print/jQuery.print.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/prismjs/components/prism-scss.min.js"></script>
    <script src="assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
    <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- clipboard -->
    <script src="cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

</body>

</html>