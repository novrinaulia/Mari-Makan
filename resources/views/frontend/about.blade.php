@extends('frontend.layouts.app')

@section('content')
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>About Us</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: {{asset('frontend/assets/img/about.jpg')}} ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Mari Makan adalah sebuah Platform yang berfungsi untuk merekomendasikan restaurant dengan makanan terbaik bagi para penduduk lokal maupun mancanegara. Platform ini sangat mudah dipakai dan juga Website kami memberikan rekomendasi restoran terbaik sesuai review pelanggan tersebut.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Mudah Digunakan</li>
                <li><i class="bi bi-check2-all"></i> Tampilan Responsif</li>
                <li><i class="bi bi-check2-all"></i> Rekomendasi Restoran dan Makanan Terbaik</li>
              </ul>
              {{-- <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p> --}}
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Our <span>Teams</span></p>
        </div>

        <div class="row gy-3">

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('frontend/assets/img/chefs/Nopal.jpg') }}" class="img-fluid" alt="" width="300" height="200">
              </div>
              <div class="member-info">
                <h4>Naufal Hadi Chandira</h4>
                <span>F2009A038</span>
                <p>Universitas Gunadarma</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('frontend/assets/img/chefs/yaya.jpeg') }}" class="img-fluid" alt="" width="300" height="200">
              </div>
              <div class="member-info">
                <h4>Siska Prayustia</h4>
                <span>F7290A257</span>
                <p>Universitas Pancasila</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('frontend/assets/img/chefs/Leo.jpg') }}" class="img-fluid" alt="" width="300" height="250">
              </div>
              <div class="member-info">
                <h4>Leo Ariyanto </h4>
                <span>F2187A150</span>
                <p>Universitas Banten Jaya</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('frontend/assets/img/chefs/Novrin.jpg') }}" class="img-fluid" alt="" width="300" height="250">
              </div>
              <div class="member-info">
                <h4>Aulia Novrin Harleyanto</h4>
                <span>F2129A087</span>
                <p>Politeknik Negeri Jember</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

  </main><!-- End #main -->
  @endsection