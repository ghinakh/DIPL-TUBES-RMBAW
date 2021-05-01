<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);
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
            <?php $this->load->view('include/nav') ?>
            <div class="col-lg-9 col-md-8 col-12">
                <!-- Card -->
                <div class="card border-0" id="invoice">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-6">
                            <div>
                                <!-- Img -->
                                <img src="<?= base_url('assets/images/logo.png') ?>">
                                <h4 class=" mb-0"><?= $web_config['nama_website'] ?></h4>
                                <small>INVOICE ID: #1001</small>
                            </div>
                            <div>
                                <a href="#!" class="text-muted print-link no-print"><i class="fe fe-printer"></i></a>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <span class="font-size-xs">Invoice From</span>
                                <h5 class="mb-3">Darlene Wilson</h5>
                                <p>4333 Edwards Rd <br> undefined Erie, Oklahoma <br>14355 United States</p>
                            </div>
                            <div class="col-md-4 col-12">
                                <span class="font-size-xs">Invoice To</span>
                                <h5 class="mb-3">Jorge Fisher</h5>
                                <p>775 Rolling Green Rd <br> undefined Orange, Oklahoma <br> 45785 United States</p>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row mb-5">
                            <div class="col-8">
                                <span class="font-size-xs">INVOICED ID</span>
                                <h6 class="mb-0">#1001</h6>
                            </div>
                            <div class="col-4">
                                <span class="font-size-xs">Due Date</span>
                                <h6 class="mb-0">20 April 2020</h6>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive mb-12">
                            <table class="table mb-0 text-nowrap table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-dark">
                                        <td class="py-2">Monthly <span class="font-size-xs text-muted">(1 Jan,2020
                                                to 1 Feb, 2020)</span></td>
                                        <td class="py-2">1</td>
                                        <td class="py-2">$39.00</td>
                                        <td class="py-2">$39.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="text-dark">
                                        <td colspan="2" class="py-2"></td>
                                        <td colspan="1" class="pb-0">Total</td>
                                        <td class="pb-0">$39.00</td>
                                    </tr>
                                    <tr class="text-dark">
                                        <td colspan="2" class="py-2"></td>
                                        <td colspan="1" class="py-0">Net Amount</td>
                                        <td class="py-0">$37.00</td>
                                    </tr>
                                    <tr class="text-dark">
                                        <td colspan="2" class="py-2"></td>
                                        <td colspan="1" class="pt-0">Tax*</td>
                                        <td class="pt-0">$2.00</td>
                                    </tr>
                                    <tr class="text-dark">
                                        <td colspan="2" class="py-2"></td>
                                        <td colspan="1" class="border-top py-1 font-weight-bold">Grand Total</td>
                                        <td class="border-top py-1 font-weight-bold">$478.50</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- Short note -->
                        <p class="border-top pt-3 mb-0 ">Notes: Invoice was created on a computer and is valid
                            without the signature and seal.</p>
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
                    <span>© 2021 <?= $web_config['nama_website'] ?>. All Rights Reserved.</span>
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