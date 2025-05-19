<template>
    <nav class="navbar navbar-expand-lg shadow-sm bg-white sticky-top">
        <div class="container d-flex justify-content-evenly">
            <a href="#"><img src="assets/img/logo.png" alt="Bootstrap" width="140px" class="my-2"></a>
            <!--<a class="nav-link mx-3 text-info" aria-current="page" href="#">Product</a>-->
            <a class="nav-link mx-3 text-info" href="#about">About Us</a>
            <!--<a class="nav-link mx-3 text-info" href="#">Products</a>-->
            <a class="nav-link mx-3 text-info" href="#services" aria-disabled="true">Services</a>
            <a class="nav-link mx-3 text-info" aria-disabled="true">Careers</a>
            <a class="nav-link mx-3 text-info" href="#contact" aria-disabled="true">Contact Us</a>
        </div>
    </nav>
    <section id="home" class="hero pt-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row flex-wrap align-items-center">
                <!-- Text Section -->
                <div class="col-md-6 px-4">
                    <h1 class="pe-5"><b>Cooling Care on the Go, AC Pro You Should Know</b></h1>
                    <p class="description pe-5" style="font-size: 12px;">
                        Unlock Cool Comfort and Superior AC Solutions with 
                        <span style="color: blue;"><b>SNS</b></span>: Ride in Style!
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#about" class="btn-get-started" style="text-decoration: none;">Our Service</a>
                        <a href="#about" class="btn-get-started" style="text-decoration: none;">Our Products</a>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-md-6 text-center text-md-end px-4">
                    <img src="assets/img/illus.png" alt="Profile" class="img-fluid mt-4 mx-auto d-md-block" />
                </div>
            </div>
        </div>
    </section>
    
    <section>       
        <div class="hero" id="about">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-body rounded px-4" style="background: linear-gradient(180deg, rgba(0,129,177,1) 25%, rgba(63,167,241,1) 86%); padding:0%;">
                                <div class="d-flex flex-column flex-md-row flex-wrap">
                                    <!-- Kolom teks dengan lebar lebih kecil untuk memberi ruang bagi gambar di kanan -->
                                    <div class="col-md-8 mt-4">
                                        <h1 style="color:white; font-size: 40px;">Tentang SNS.AC</h1>
                                        <div class="row">
                                            <div class="col">
                                                <p class="description" style="color:white; font-size: 16px;">SNS.AC adalah perusahaan SNS (PT. Surya Nusantara Sentosa) yang bergerak dibidang jasa service AC Mobil & Service AC Mobil dan pendirian perusahaan. Sejak 2017, SNS.AC telah membantu lebih dari 8000 costumer dalam segi otomotif di Indonesia.</p>
                                                <p class="description" style="color:white; font-size: 16px;"><i class="bi bi-play-fill">Sekilas tentang SNS.AC</i></p>
                                            </div>
                                        </div>
                                        <div class="row mx-5 mb-4">
                                            <div class="col-md-4 text-center">
                                                <h1 class="fs-1" style="color:white;">7</h1>
                                                <p style="font-size: 16px; color:white;"><b>Tahun Pengalaman</b></p>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <h1 class="fs-1" style="color:white;">20+</h1>
                                                <p style="font-size: 16px; color:white;"><b>Lokasi Dealer</b></p>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <h1 class="fs-1" style="color:white;">200+</h1>
                                                <p style="font-size: 16px; color:white;"><b>Cabang</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Kolom gambar di sisi kanan -->
                                    <div class="col-md-4 d-flex align-items-end justify-content-end order-md-last">
                                        <img src="assets/img/Reta2.png" alt="Tentang SNS.AC" class="img-fluid responsive-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container text-center" id="services">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mt-5">
                            <h1 class="fs-1">Perawatan mobil berkualitas kini semakin mudah dan praktis</h1>
                            <p class="px-5 mb-5">Kepuasan pelanggan adalah prioritas kami. Oleh karena itu, kami berusaha memberikan layanan perawatan mobil yang sederhana, nyaman, dan terjangkau.</p>
                            <a class="fs-4 mb-5" style="text-decoration:none;" href="">Discover our Services <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-6">
                            <img src="assets/img/Container.png" class="me-5" alt="...">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <h1 style="font-size: 40px;" class="ms-5">Kualitas Prima dalam Setiap Pelayanan</h1>
                                <div class="row">
                                    <div class="col ms-5">
                                        <p class="description" style="font-size: 16px;">Setiap pekerjaan kami dikerjakan dengan ketelitian, menggunakan spare part berkualitas, dan selalu meninggalkan area kerja dalam kondisi bersih.</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12 ms-5">
                                        <p class="description" style="font-size: 16px;">Saya sangat puas dengan spare part yang digunakan untuk memperbaiki AC mobil saya. Ternyata spare part asli bisa didapatkan dengan harga yang terjangkau. Terima kasih banyak!</p>
                                    </div>
                                    <div class="col-lg-12 mt-1 ms-5">
                                        <p class="description" style="font-size: 16px;"><b>SNS.AC Customer.</b></p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" style="margin-top:10%;">
                        <div class="col-md-6 col-lg-6">
                            <h1 style="font-size: 40px;" class="me-5">Mengutamakan Kepuasan Pelanggan</h1>
                                <div class="row">
                                    <div class="col-lg-11 me-5">
                                        <p class="description" style="font-size: 16px;">Get quick answers to your tech questions, get feedback on your landing page, or have one of our experts create an entire marketing campaign for you. Whatever you need, we got you.</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-10 me-5">
                                        <p class="description" style="font-size: 16px;">Terima kasih atas pelayanan yang cepat dan teknisi yang sangat ramah. AC mobil saya kembali dingin setelah diperbaiki. Sangat rekomendasi!</p>
                                    </div>
                                    <div class="col-lg-12 mt-1 me-5">
                                        <p class="description" style="font-size: 16px;"><b>SNS.AC Customer.</b></p>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <img src="assets/img/Background.png" class="me-5" alt="...">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" style="margin-top:10%;">
                        <div class="col-md-6 col-lg-6">
                            <img src="assets/img/Container.png" class="me-5" alt="...">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <h1 style="font-size: 40px;" class="ms-5">Keberlanjutan dan Tanggung Jawab Sosial</h1>
                                <div class="row">
                                    <div class="col ms-5">
                                        <p class="description" style="font-size: 16px;">All your marketing necessities are in one place. With Pijar, you can build landing pages, deliver lead magnets, track your analytics, manages your leads, sell your product and services, and more.</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12 ms-5">
                                        <p class="description" style="font-size: 16px;">Awalnya saya pikir masalah AC mobil saya sangat rumit, tapi teknisi dari SNS.AC berhasil menemukan solusi yang tepat. Terima kasih atas pelayanan yang profesional.</p>
                                    </div>
                                    <div class="col-lg-12 mt-1 ms-5">
                                        <p class="description" style="font-size: 16px;"><b>SNS.AC Customer.</b></p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" style="margin-top:10%;">
                        <div class="col-md-6 col-lg-6">
                            <h1 style="font-size: 40px;" class="me-5">Kepercayaan dari Semua Dealer di Indonesia</h1>
                                <div class="row">
                                    <div class="col-lg-11 me-5">
                                        <p class="description" style="font-size: 16px;">All our tools are designed with both beginners and experts in mind. Whether you’re looking for your 1,000th lead or your first, you’ll feel right at home at Pijar.</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-10 me-5">
                                        <p class="description" style="font-size: 16px;">Selain AC mobil saya kembali dingin, saya juga sangat terkesan dengan kebersihan dan kerapihan pekerjaan teknisi Anda. Tidak ada bekas pekerjaan yang berantakan.</p>
                                    </div>
                                    <div class="col-lg-12 mt-1 me-5">
                                        <p class="description" style="font-size: 16px;"><b>SNS.AC Customer.</b></p>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <img src="assets/img/Background.png" class="me-5" alt="...">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" style="margin-top:10%;">
                        <div class="col-md-6 col-lg-6">
                            <img src="assets/img/illustrasi.png" class="me-5 mt-5" alt="...">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <h1 style="font-size: 40px;" class="ms-5">Why Choose Us</h1>
                                <div class="row">
                                    <div class="col ms-5 mb-3">
                                        <p class="description" style="font-size: 16px;">Enjoy a different experience after the AC service and find a fresh feeling of coolness, of course.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 ms-5">
                                        <div class="card border-0 shadow rounded mb-3">
                                            <div class="card-body rounded bg-white">
                                                <div class="row">
                                                    <div class="col-sm-2 text-center">
                                                        <img src="assets/img/flight.png" alt="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <p style="color: black; font-size: 18px;"><b>Tentang SNS.AC</b></p>
                                                        <p style="font-size: 12px;">We have been serving customers for years and have mastered various car makes and models.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 border-0 shadow rounded mb-3">
                                            <div class="card-body rounded bg-white">
                                                <div class="row">
                                                    <div class="col-sm-2 text-center">
                                                        <img src="assets/img/flight (1).png" alt="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <p style="color: black; font-size: 18px;"><b>Quality Products</b></p>
                                                        <p style="font-size: 12px;">We use high-quality, genuine AC parts to ensure reliability and performance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 border-0 shadow rounded mb-3">
                                            <div class="card-body rounded bg-white">
                                                <div class="row">
                                                    <div class="col-sm-2 text-center">
                                                        <img src="assets/img/flight (2).png" alt="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <p style="color: black;  font-size: 18px;"><b>Quick and Efficient Service</b></p>
                                                        <p style="font-size: 12px;">We are committed to providing fast and efficient service to minimize your vehicle's downtime</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 border-0 shadow rounded mb-3">
                                            <div class="card-body rounded bg-white">
                                                <div class="row">
                                                    <div class="col-sm-2 text-center">
                                                        <img src="assets/img/flight (3).png" alt="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <p style="color: black; font-size: 18px;"><b>Competitive Pricing</b></p>
                                                        <p style="font-size: 12px;">We offer competitive prices for automotive AC service and parts replacement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column justify-content-center" style="margin-top: 128px;">
                            <h1 style="font-size: 64px;">Dealer yang sudah beroperasi di Indonesia</h1>
                            <div class="mt-4">
                                <a href="#about" class="btn-get-started" style="text-decoration: none;">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center" style="margin-top: 128px;">
                            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                                
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
                                </ol>
            
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/SSM.jpg" class="d-block w-100 img-fluid" alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/Tunas.png" class="d-block w-100 img-fluid" alt="Slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/Agung.png" class="d-block w-100 img-fluid" alt="Slide 3">
                                    </div>
                                </div>
            
                                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->            
        </section>
            <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
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
        <div class="col-md-2 mb-4">
          <!-- Content -->
          <img src="/assets/img/logo.png" alt="Bootstrap" width="140px" class="my-2">
        </div>
        <!-- Grid column -->

        <div class="col-md-2 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Mengapa SNS.AC
          </h6>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Dukungan Seluruh Dealer Mobil</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Klien kami</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Produk
          </h6>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon A</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon B</a>
          </p>
          <!--<p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon C</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon D</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon E</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon F</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Freon G</a>
          </p>-->
        </div>
        <!-- Grid column -->
        <div class="col-md-2 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Service
          </h6>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Body Repair</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">AC</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">CPC</a>
          </p>
        </div>
        <div class="col-md-2 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Perusahaan
          </h6>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Tentang SNS.AC</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">SIGNUS</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">ANS</a>
          </p>
          <!--<p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Hubungi kami</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Pusat bantuan</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Kebijakan Privasi</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Syarat & Ketentuan</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Keamanan</a>
          </p>
          <p>
            <a href="#!" class="text-reset" style="text-decoration: none;">Blog</a>
          </p>
        </div>
        <div class="col-md-1 mb-4">-->
          <!-- Links -->
        </div>

        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <div class="text-center p-4 border-top" style="background-color: white;" id="contact">
    <div class="row mt-3">
        <div class="col-md-4 mb-4">
            <a href="https://www.linkedin.com/company/pt-surya-nusantara-sentosa/" target="_blank"><img src="assets/img/Linkedin.png" alt=""></a>
            <a href="https://www.instagram.com/snsacofficial?igsh=MXBuM3JhOXR2bWs2ZA==" target="_blank"><img src="assets/img/Instagram.png" class="mx-4" alt=""></a>
            <a href="https://wa.me/628119712589" target="_blank"><img src="assets/img/whatsapp-square 1.png" class="rounded me-4" width="50px" alt=""></a>
            <a href="mailto:career@snsac.id" target="_blank"><img src="assets/img/Gmail (1).png" class="rounded" width="64px" alt=""></a>
        </div>
        <div class="col-md-8 mb-4">
            <div class="row">
                <div class="col-md-2 text-left">
                    <h4><b>Tangerang</b></h4>
                </div>
                <div class="col-md-8 text-left">
                    <p>Kebayoran Square Business Park, Jl. Boulevard Bintaro Jaya No.C09, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15229</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 text-left">
                    <h4><b>Bogor</b></h4>
                </div>
                <div class="col-md-8 text-left">
                    <p>Jalan Kh. Sholeh Iskandar Gang Sahabat No.13, RT.1/RW.04, Cibadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16166</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 text-left">
                    <h4><b>Makassar</b></h4>
                </div>
                <div class="col-md-8 text-left">
                    <p>Jl. Onta Lama No.90, Mandala, Kec. Mamajang, Kota Makassar, Sulawesi Selatan 90132</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © Copyright 2017 PT Surya Nusantara Sentosa
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</template>

<script>
export default {
    name: 'PortfolioComponent',
    data() {
        return {
        };
    },
};
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.navbar .nav-link');
    if (window.scrollY === 0) { // Jika di atas halaman
        navLinks.forEach(link => {
            link.classList.add('hover-transparent');
        });
    } else {
        navLinks.forEach(link => {
            link.classList.remove('hover-transparent');
        });
    }
});
</script>
