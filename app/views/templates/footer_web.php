<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <!-- ...existing code... -->

  <!-- Section: Links -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <img src="<?= BASEURL; ?>/assets_web/img/wikrama.png" alt="SMK Wikrama Bogor" width="50" height="50" class="me-3">SMK WIKRAMA BOGOR
          </h6>
          <h5>Alamat </h5>
          <p>
            Jl. Raya Wangun, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146
          </p>
          <h5>Kontak</h5>
          <p>
            Telepon: (0251) 8242411
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Lainnya
          </h6>
          <ul class="list-unstyled">
            <li>
              <a href="<?=BASEURL;?>/Web/profil" class="text-reset">Profil</a>
            </li>
            <li>
              <a href="<?=BASEURL;?>/Web/partner" class="text-reset">Kerjasama Pihak Masjid</a>
            </li>
            <li>
              <a href="<?=BASEURL;?>/Web/donasi" class="text-reset">Donasi</a>
            </li>
            <li>
              <a href="<?=BASEURL;?>/Web/contact" class="text-reset">Kontak</a>
            </li>
            <li>
              <a href="<?= BASEURL; ?>/login/" class="text-reset">Login</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
          <!-- Feedback -->
          <h6 class="text-uppercase fw-bold mb-4">KIRIM PESAN</h6>
          <form action="/" method="post" class="row g-2">
            <div class="col-md-12 col-lg-6">
              <input type="text" class="form-control" placeholder="Nama" required>
            </div>
            <div class="col-md-12 col-lg-6">
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-12">
              <textarea class="form-control" placeholder="Pesan Anda" rows="5" required></textarea>
            </div>
            <div class="col-md-12 text-start">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links -->

  <!-- Section: Footer -->
  <section class="text-center p-4" style="background-color: #1F3984; color: white;">
    © 2023 SMK Wikrama Bogor. All Rights Reserved.
  </section>
  <!-- Section: Footer -->
</footer>







    <!-- JS here -->
    <script src="<?= BASEURL; ?>/assets_web/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/popper.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/bootstrap.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/owl.carousel.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/isotope.pkgd.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/ajax-form.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/waypoints.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.counterup.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/scrollIt.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.scrollUp.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/wow.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/nice-select.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.slicknav.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/plugins.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?= BASEURL; ?>/assets_web/js/contact.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.form.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/jquery.validate.min.js"></script>
    <script src="<?= BASEURL; ?>/assets_web/js/mail-script.js"></script>

    <script src="<?= BASEURL; ?>/assets_web/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>
