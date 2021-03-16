<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <link href="<?= base_url() ?>assets/fonts/feather/feather.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="<?= base_url() ?>assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/theme.min.css">
    <title>Sign in | RentalKuy </title>
</head>

<body>
    <!-- Page content -->
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="<?= base_url() ?>index.html"><img src="<?= base_url() ?>assets/images/brand/logo/logo-icon.svg" class="mb-4" alt=""></a>
                            <h1 class="mb-1 font-weight-bold">Sign in</h1>
                            <span>Don’t have an account? <a href="sign-up.html" class="ml-1">Sign up</a></span>
                        </div>
                        <!-- Form -->
                        <form>
                            <!-- Username -->
                            <div class="form-group">
                                <label for="email" class="form-label">Username or email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                    <label class="custom-control-label " for="rememberme">Remember me</label>
                                </div>
                                <div>
                                    <a href="forget-password.html">Forgot your password?</a>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                            <hr class="my-4">
                            <div class="mt-4 text-center">
                                <!--Facebook-->
                                <a href="#!" class="btn-social btn-social-outline btn-facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <!--Twitter-->
                                <a href="#!" class="btn-social btn-social-outline btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <!--LinkedIn-->
                                <a href="#!" class="btn-social btn-social-outline btn-linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <!--GitHub-->
                                <a href="#!" class="btn-social btn-social-outline btn-github">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </form>
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
    <script src="<?= base_url() ?>assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="<?= base_url() ?>assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- clipboard -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="<?= base_url() ?>assets/js/theme.min.js"></script>

</body>

</html>