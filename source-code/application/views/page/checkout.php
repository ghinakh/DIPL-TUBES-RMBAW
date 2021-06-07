 <!-- Page header -->
 <div class="py-lg-6 py-4 bg-primary">
     <div class="container">
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                 <div>
                     <h1 class="text-white display-4 mb-0">Checkout Page</h1>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Content -->
 <div class="py-6">
     <div class="container">
         <div class="row">
             <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                 <!-- Card -->
                 <div class="card  mb-3 mb-lg-0">
                     <!-- Card header -->
                     <div class="card-header">
                         <h3 class="mb-0">Payment Method</h3>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <!-- Radio -->
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" id="cardRadioone" name="cardRadioone" class="custom-control-input" checked>
                             <label class="custom-control-label " for="cardRadioone"><span class="  text-dark">Credit
                                     or Debit card</span></label>
                         </div>
                         <!-- Radio -->
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" id="cardRadioTwo" name="cardRadioone" class="custom-control-input">
                             <label class="custom-control-label" for="cardRadioTwo"><span class="  text-dark">PayPal</span></label>
                         </div>
                         <!-- Form -->
                         <form class="form-row " id="cardpayment">
                             <!-- Card number -->
                             <div class="form-group mt-4 col-12">
                                 <!-- Card Number -->
                                 <label class="d-flex justify-content-between align-items-center form-label" for="cc-mask">Card
                                     Number <span><i class="fab fa-cc-amex mr-1  text-primary"></i><i class="fab fa-cc-mastercard mr-1  text-primary"></i> <i class="fab fa-cc-discover mr-1  text-primary"></i> <i class="fab fa-cc-visa  text-primary"></i></span></label>
                                 <div class="input-group">
                                     <input type="text" class="form-control" id="cc-mask" data-inputmask="'mask': '9999 9999 9999 9999'" inputmode="numeric" placeholder="xxxx-xxxx-xxxx-xxxx" required />
                                     <div class="input-group-append border-left-0">
                                         <span class="input-group-text" id="basic-addon2"><i class="fe fe-lock "></i></span>
                                     </div>
                                 </div>
                                 <small class="text-muted">Full name as displayed on card.</small>
                             </div>
                             <!-- Month -->
                             <div class="form-group col-12 col-md-4">
                                 <label class="form-label">Month</label>
                                 <select class="selectpicker" data-width="100%">
                                     <option value="">Month</option>
                                     <option value="June">June</option>
                                     <option value="July">July</option>
                                     <option value="August">August</option>
                                     <option value="Sep">Sep</option>
                                     <option value="Oct">Oct</option>
                                 </select>
                             </div>
                             <!-- Year -->
                             <div class="form-group col-12 col-md-4">
                                 <label class="form-label">Year</label>
                                 <select class="selectpicker" data-width="100%">
                                     <option value="">Year</option>
                                     <option value="June">2018</option>
                                     <option value="July">2019</option>
                                     <option value="August">2020</option>
                                     <option value="Sep">2021</option>
                                     <option value="Oct">2022</option>
                                 </select>
                             </div>
                             <!-- CVV Code -->
                             <div class="form-group col-12 col-md-4">
                                 <label for="cvv" class="form-label">CVV Code <i class="fe fe-help-circle ml-1 font-size-xs" data-toggle="tooltip" data-placement="right" title="" data-original-title="A 3 - digit number, typically printed on the back of a card."></i></label>
                                 <input type="password" class="cc-inputmask form-control" name="cvv" id="cvv" placeholder="xxx" maxlength="3">
                             </div>
                             <!-- Name on card -->
                             <div class="form-group col-12">
                                 <label for="nameoncard" class="form-label">Name on Card</label>
                                 <input id="nameoncard" type="text" class="form-control" name="nameoncard" placeholder="Name" required>
                             </div>
                             <!-- Country -->
                             <div class="form-group col-6">
                                 <label class="form-label">Country</label>
                                 <select class="selectpicker" data-width="100%">
                                     <option value="">India</option>
                                     <option value="uk">UK</option>
                                     <option value="usa">USA</option>
                                 </select>
                             </div>
                             <!-- Zip Code -->
                             <div class="form-group col-6">
                                 <label for="postalcode" class="form-label">Zip/Postal Code</label>
                                 <input id="postalcode" type="text" class="form-control" name="postalcode" placeholder="Zipcode" required>
                             </div>
                             <!-- CheckBox -->
                             <div class="col-12 mb-5">
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck1">
                                     <label class="custom-control-label " for="customCheck1">Remember this
                                         card</label>
                                 </div>
                             </div>
                             <div class="col-md-4 col-12">
                                 <!-- Button -->
                                 <div>
                                     <button type="submit" class="btn btn-primary mb-3 mb-lg-0 mr-4">Make a
                                         Payment</button>
                                 </div>
                             </div>
                             <!-- Text -->
                             <div class="col-md-8 col-12 d-flex align-items-center justify-content-end">
                                 <small class="mb-0">By click start learning, you agree to our <a href="#!">Terms of
                                         Service and Privacy Policy.</a></small>
                             </div>
                         </form>
                         <!-- Paypal -->
                         <form id="internetpayment">
                             <div class="form-group mt-4 ">
                                 <label for="paypalemail" class="form-label">PayPal</label>
                                 <input type="email" id="paypalemail" name="paypalemail" placeholder="Enter your PayPal email" class="form-control" required>
                             </div>
                             <button type="submit" class="btn btn-primary">PayPal Checkout</button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-12 col-12">
                 <!-- Card -->
                 <div class="card  border-0 mb-3">
                     <!-- Card body -->
                     <div class="p-5 text-center">
                         <span class="badge badge-warning">Selected Plan</span>
                         <div class="mb-5 mt-3">
                             <div class="d-flex justify-content-center position-relative rounded py-15 border-white border rounded-lg bg-cover" style="background-image: url(<?= base_url('assets/images/mobil/' . $mobil['gambar']) ?>);">
                             </div>
                             <h1 class="font-weight-bold"><?= $mobil['nama_mobil'] ?></h1>
                         </div>
                         <div class="d-flex justify-content-center">
                             <span class="h3 mb-0 font-weight-bold text-primary">IDR</span>
                             <div class="display-4 font-weight-bold text-primary" id="harga"><?= number_format($mobil['harga'], 0, ',', '.') ?></div>
                             <span class=" align-self-end mb-1">/day</span>
                         </div>
                     </div>
                     <hr class="m-0">
                     <div class="form-group col-12">
                         <select class="selectpicker" id="hari" data-width="100%" onchange="test(<?= $mobil['harga'] ?>)">
                             <option value="1">1 Day</option>
                             <option value="2">2 Day</option>
                             <option value="3">3 Day</option>
                         </select>
                     </div>
                 </div>
                 <!-- Card -->
                 <div class="card border-0 mb-3 mb-lg-0">
                     <!-- Card body -->
                     <div class="card-body">
                         <h3 class="mb-2">Discount Codes</h3>
                         <div id="mutiara"></div>
                         <form class="form-header" action="http://127.0.0.1/rpl/source-code/kupon/" role="form" method="POST" id="#">
                             <div class="input-group">
                                 <input type="hidden" name="harganow" value="<?= $mobil['harga'] ?>" id="harganow">
                                 <input type="text" class="form-control" placeholder="Enter your code" name="kode" id="kode">
                                 <div class="input-group-append">
                                     <button class="btn btn-secondary" type="submit">Apply</button>
                                 </div>
                             </div>
                         </form>
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
                 <span>© 2021 Rental Kuy. All Rights Reserved.</span>
             </div>
             <!-- Links -->
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
 <script>
     function numberWithCommas(x) {
         return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
     }
     $(document).ready(function() {
         $("form").submit(function() {
             if ($('#kode').val().length > 3) {
                 var pdata = $(this).serialize();
                 var purl = $(this).attr('action');
                 $.ajax({
                     url: purl,
                     data: pdata,
                     timeout: false,
                     type: 'POST',
                     dataType: 'JSON',
                     success: function(hasil) {
                         $("#kode").removeAttr("disabled", "disabled");
                         $("button").removeAttr("disabled", "disabled");
                         $("#btn-login").html('Masuk');
                         $("#mutiara").html(hasil.result ? "<div class='alert alert-success' role='alert'>" + hasil.content + "</div>" : "<div class='alert alert-warning' role='alert'>" + hasil.content + "</div>")
                         var harga_sekarang = $('#harga').attr("value");
                         $("#harga").html(harga_sekarang - hasil.price);
                         console.log(harga_sekarang);
                         console.log(hasil.price);
                     },
                     error: function(a, b, c) {
                         $("#kode").removeAttr("disabled", "disabled");
                         $("button").removeAttr("disabled", "disabled");
                         $("#mutiara").html('<div class="alert alert-warning" role="alert">' + c + '</div>')
                     }
                 })
             }
             return false
         })
     });

     function test(harga_awal) {
         var total = 0;
         var day = document.getElementById('hari').value;
         var harga = document.getElementById('harga').innerHTML;
         total = day * harga_awal;
         $("#harga").html(numberWithCommas(total));
         $('#harga').attr('value', total);
     }
 </script>


 <!-- clipboard -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


 <!-- Theme JS -->
 <script src="<?= base_url() ?>assets/js/theme.min.js"></script>
 </body>

 </html>