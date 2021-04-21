<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);
$jumlah = count($nama_dipisah);
if ($jumlah > 2) {
    $j = 0;
    $n_depan = array();
    $ar_bl = array();
    foreach ($nama_dipisah as $nl) {
        if ($j == 1) {
            array_push($ar_bl, $nl);
        } else {
            $j++;
            $n_depan = $nl;
        }
    }
    $ta = false;
    foreach ($ar_bl as $d) {
        if ($ta) {
            $n_belakang .= " ";
            $ta = false;
        }
        $n_belakang .= $d;
        $ta = true;
    }
} else {
    $n_depan = $nama_dipisah[0];
    $n_belakang = $nama_dipisah[1];
}
?>
<div class="pt-5 pb-5">
    <div class="container">
        <!-- User info -->
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="pt-16 rounded-top" style="
								background: url(<?= base_url('assets/images/background/profile-bg.jpg') ?>) no-repeat;
								background-size: cover;
							"></div>
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
                                <li class="nav-item">
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
                                <li class="nav-item active">
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
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Change password</h3>
                        <p class="mb-0">
                            Change Password if your account feels suspicious activity.
                        </p>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div>
                            <form class="form-row" method="POST" autocomplete="off">
                                <?php if ($laporan) : ?>
                                    <div class="form-group col-12 col-md-12">
                                        <?= $laporan ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group col-12 col-md-12">
                                    <label class="form-label" for="fname">Old password</label>
                                    <input type="password" name="oldpass" class="form-control" placeholder="Old password" required />
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="form-label" for="lname">New Password</label>
                                    <input type="password" name="newpass" class="form-control" placeholder="New Password" required />
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="form-label" for="phone">Confirm Password</label>
                                    <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required />
                                </div>
                                <div class="col-12">
                                    <!-- Button -->
                                    <button class="btn btn-primary" type="submit">
                                        Change Password
                                    </button>
                                </div>
                            </form>
                        </div>
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
                <span>© 2020 Geeks. All Rights Reserved.</span>
            </div>
            <!-- Links -->
            <div class="col-12 col-md-6">
                <nav class="nav nav-footer justify-content-center justify-content-md-end">
                    <a class="nav-link active pl-0" href="#!">Privacy</a>
                    <a class="nav-link" href="#!">Terms </a>
                    <a class="nav-link" href="#!">Feedback</a>
                    <a class="nav-link" href="#!">Support</a>
                </nav>
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
<script src="<?= base_url() ?>//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


<!-- Theme JS -->
<script src="<?= base_url() ?>assets/js/theme.min.js"></script>


</body>

</html>