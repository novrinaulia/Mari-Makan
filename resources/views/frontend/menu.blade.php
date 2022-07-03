@extends('frontend.layouts.app')

@section('content') 
  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Check Our <span>Restaurants</span></p>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="row gy-5">
                @foreach ($restaurants as $resto)
              <div class="col-lg-4 menu-item">
                <a href="{{ asset('upload/' . $resto->gambar_resto) }}" class="glightbox"><img src="{{ asset('upload/' . $resto->gambar_resto) }}" class="menu-img img-fluid" alt="Logo Restoran"></a>
                <h4>{{ $resto->nama_resto }}</h4>
                <p class="ingredients">
                  {{ $resto->alamat }}
                </p>
                <p class="ingredients">
                  {{ $resto->jambuka }} - {{ $resto->jamtutup }}
                </p>
                <p class="ingredients">
                  {{ $resto->desk_resto }}
                </p>
                <p class="price">
                  Rating {{ $resto->rating_resto }}
                </p>
              </div>
              @endforeach
            </div>
        </div>

      </div>
    </section><!-- End Menu Section -->

  </main>
  <!-- End #main -->
  @endsection