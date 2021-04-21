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
                    </ul>
                    <!-- Navbar header -->
                    <span class="navbar-header">Account Settings</span>
                    <ul class="list-unstyled ml-n2 mb-0">
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="info_saldo.html"><i class="fe fe-credit-card nav-icon"></i>Topup Saldo</a>
                        </li>
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