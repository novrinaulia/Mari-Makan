@extends('backend.layouts.admin')

@section('content')
<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1>Edit Restauran</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ route('restaurant.index') }}">Restaurant</a></div>
              <div class="breadcrumb-item">Edit Restaurant</div>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <form method="POST" action="{{ route('restaurant.edit',$resto->id_restaurants) }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="oldImage" value="{{ $resto->gambar_resto }}">  

                <div class="card-header">
                  <h4>Form Edit Restaurant</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Restaurant</label>
                    <input type="text" class="form-control" name="nama" required="" value="{{ $resto->nama_resto }}">
                  </div>
                  <div class="form-group mb-0">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" required="" >{{ $resto->alamat }}</textarea>
                  </div><div class="form-group">
                    <label>Jam Buka</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-clock"></i>
                        </div>
                      </div>
                      <input type="time" class="form-control" name="jambuka" required="" value="{{ $resto->jambuka}}">
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
                      <input type="time" class="form-control" name="jamtutup" required="" value="{{ $resto->jamtutup}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="d-block">Rating</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating" value="1" {{ ( $resto->rating_resto == "1" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating1">
                        Rate 1
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating" value="2"  {{ ( $resto->rating_resto == "2" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating2">
                        Rate 2
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating" value="3"  {{ ( $resto->rating_resto == "3" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating3">
                        Rate 3
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating" value="4"  {{ ( $resto->rating_resto == "4" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating4">
                        Rate 4
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating" id="rating" value="5"  {{ ( $resto->rating_resto == "5" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating5">
                        Rate 5
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" required="">{{ $resto->desk_resto }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="gambar">
                      <label class="custom-file-label" for="customFile">{{ $resto->gambar_resto }}</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-left">
                  <button class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
  </section>
</div>
      
@endsection