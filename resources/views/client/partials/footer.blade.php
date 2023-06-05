<!-- Footer -->
<footer class="text-center text-lg-start  text-muted" style="background-color: rgb(32, 30, 30);">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span class="text-light">GETVOUCHER </span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/profile.php?id=100091454106607" class="me-4 text-light">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="mailto:getvoucher842@gmail.com" class="me-4 text-light">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com/get_voucher123/" class="me-4 text-light">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase text-light fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>GETVOUCHER
          </h6>
          <p class="text-light" >
              Di GETVOUCHER terdapat beragam penawaran menarik yang dapat anda dapatkan disini.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase text-light fw-bold mb-4">
          VOUCHER
          </h6>
          @foreach($kategori_footer as $kategori_footer)
          <p>
            <a href="/products?kategori={{ $kategori_footer->id }}" class="text-light" style="text-decoration: none">{{ $kategori_footer->Kategori }}</a>
          </p>
          @endforeach
        </div> 
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase text-light  fw-bold mb-4">KONTAK</h6>
          <p class="text-light ">
            <a href="/dashboard"><i class="fas fa-home me-3"></i></a>
            GETVOUCHER
          </p>
          <p class="text-light">
            <a href="mailto:getvoucher842@gmail.com"><i class="fas fa-envelope me-3"></i></a>
            getvoucher842@gmail.com
          </p>
          <p class="text-light">
            <a href="https://wa.me/6281252464430"><i class="fa-brands fa-whatsapp fa-lg me-3"></i></a>
            081252464430
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(152, 136, 136, 0.05);">
   <span class="text-light"> © 2023 Copyright : </span>
    <a class="text-light fw-bold" href="/dashboard">GETVOUCHER.COM</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


