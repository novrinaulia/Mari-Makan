@extends('backend.layouts.admin')

@section('content')
<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1>Tambah Restauran</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ route('restaurant.index') }}">Restaurant</a></div>
              <div class="breadcrumb-item">Tambah Restaurant</div>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <form method="POST" action="{{ route('restaurant.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>Form Tambah Restaurant</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Restaurant</label>
                    <input type="text" class="form-control" name="nama" required="">
                  </div>
                  <div class="form-group mb-0">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" required=""></textarea>
                  </div><div class="form-group">
                    <label>Jam Buka</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-clock"></i>
                        </div>
                      </div>
                      <input type="time" class="form-control" name="jambuka" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jam Tutup</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-clock"></i>
                        </div>
                      </div>
                      <input type="time" class="form-control" name="jamtutup" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="d-block">Rating</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating1" value="1">
                      <label class="form-check-label" for="rating1">
                        Rate 1
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                      <label class="form-check-label" for="rating2">
                        Rate 2
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                      <label class="form-check-label" for="rating3">
                        Rate 3
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                      <label class="form-check-label" for="rating4">
                        Rate 4
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                      <label class="form-check-label" for="rating5">
                        Rate 5
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" required=""></textarea>
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="gambar_resto">
                      <label class="custom-file-label" for="customFile">Choose File</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-left">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
  </section>
</div>
      
@endsection