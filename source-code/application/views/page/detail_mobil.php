<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Page header -->
<div class="pt-lg-8 pb-lg-16 pt-8 pb-12 bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div>
                    <h1 class="text-white display-4 font-weight-semi-bold"><?= $data_mobil['nama_mobil'] ?></h1>
                    <div class="d-flex align-items-center">
                        <span class="text-white ml-3"><i class="fe fe-user text-white-50"></i> <?= $total_pemesanan ?> Menyewa Mobil ini </span>
                        <span class="text-white ml-4 d-none d-md-block">
                            <svg width="16" height="16" viewBox="0 0 16
                              16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9"></rect>
                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                            </svg>
                            <span class="align-middle">
                                <?= $data_mobil['jenis'] ?>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card rounded-lg">
                    <!-- Card header -->
                    <div class="card-header border-bottom-0 p-0">
                        <div>
                            <!-- Nav -->
                            <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="review-tab" data-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faq-tab" data-toggle="pill" href="#faq" role="tab" aria-controls="faq" aria-selected="false">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <!-- Reviews -->
                                <div class="mb-3">
                                    <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                        <!-- Reviews -->
                                        <div class="mb-3 mb-lg-0">
                                            <h3 class="mb-0">Reviews</h3>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($rate)) {
                                    } else {
                                        foreach ($rate as $pemakai) {
                                            foreach ($penyewa as $akun) {
                                                if ($pemakai['id_penyewa'] == $akun['id']) {
                                                    $nama = $akun['nama_lengkap'];
                                                    $sewa = $pemakai['tanggal_mulai'];
                                                    $reting = $pemakai['rate'];
                                                    $comment = $pemakai['note'];
                                                }
                                            }
                                    ?>
                                            <!-- Rating -->
                                            <div class="media border-bottom pb-4 mb-4">
                                                <img src="<?= base_url() ?>assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-lg" />
                                                <div class="media-body ml-3">
                                                    <h4 class="mb-1">
                                                        <?= $nama ?><br />
                                                        <span class="font-size-xs text-muted">Rent : <?= $sewa ?></span>
                                                    </h4>
                                                    <div class="font-size-xs mb-2">
                                                        <i class="mdi mdi-star mr-n1 text-warning"></i> <?= $reting ?>
                                                    </div>
                                                    <p><?= $comment ?></p>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- Tab pane -->
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                <!-- FAQ -->
                                <div>
                                    <h3 class="mb-3">Course - Frequently Asked Questions</h3>
                                    <div class="mb-4">
                                        <h4>How this course help me to design layout?</h4>
                                        <p>
                                            My name is Jason Woo and I work as human duct tape at Gatsby, that means that I do a lot of different things. Everything from dev roll to writing content to writing code. And I used to work as an architect at IBM. I live in Portland, Oregon.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>What is important of this course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Why Take This Course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Is able to create application after this course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mt-lg-n22">
                <!-- Card -->
                <div class="card mb-3 mb-4">
                    <div class="p-1">
                        <div class="d-flex justify-content-center position-relative rounded py-15 border-white border rounded-lg bg-cover" style="background-image: url(<?= base_url('assets/images/mobil/' . $data_mobil['gambar']) ?>);">
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Price single page -->
                        <div class="mb-3">
                            <span class="text-dark font-weight-bold h2">Rp. <?= number_format($data_mobil['harga'], 0, ',', '.') ?></span><br />
                            <hr class="mx-3" />
                            <span class="font-size-medium"><span class="text-warning">4.5</span><span class="mdi mdi-star text-warning mr-2"></span>
                        </div>
                        <?php if ($data_mobil['full'] == 1) { ?>
                            <button type="button" class="btn btn-success btn-block" disabled>Mobil sedang digunakan</button>
                        <?php } else { ?>
                            <a href="<?= base_url("/payment/carnow/" . $data_mobil['url_view'] . "/" . md5("RentalKuy" . rand(10000000, 99999999))) ?>" class="btn btn-success btn-block">Rent Now</a>
                        <?php } ?>
                    </div>
                </div>
                <!-- Card -->
                <div class="card mb-4">
                    <div>
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">What’s included</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent"><i class="fe fe-play-circle align-middle mr-2 text-primary"></i>12 hours video</li>
                            <li class="list-group-item bg-transparent"><i class="fe fe-award mr-2 align-middle text-success"></i>Certificate</li>
                            <li class="list-group-item bg-transparent"><i class="fe fe-calendar align-middle mr-2 text-info"></i>12 Article
                            </li>
                            <li class="list-group-item bg-transparent"><i class="fe fe-video align-middle mr-2 text-secondary"></i>Watch Offline</li>
                            <li class="list-group-item bg-transparent border-bottom-0"><i class="fe fe-clock align-middle mr-2 text-warning"></i>Lifetime access</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row align-items-center no-gutters border-top py-2">
            <!-- Desc -->
            <div class="col-md-6 col-12 text-center text-md-left">
                <span>© 2021 RentalKuy. All Rights Reserved.</span>
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
<script src="<?= base_url() ?>assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="<?= base_url() ?>assets/libs/jsvectormap/dist/maps/world.js"></script>



<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


<!-- Theme JS -->
<script src="<?= base_url() ?>assets/js/theme.min.js"></script>
</body>

</html>