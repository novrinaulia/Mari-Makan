@extends('backend.layouts.admin')

@section('content')
<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1>Edit Makanan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ route('menu.index') }}">Makanan</a></div>
              <div class="breadcrumb-item">Edit Makanan</div>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <form method="POST" action="{{ route('menu.edit',$menu->id_menu) }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="oldImage" value="{{ $menu->gambar_mkn }}">  

                <div class="card-header">
                  <h4>Form Edit Restaurant</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-group">
                      <label>Restoran</label>
                      <input type="text" class="form-control" name="resto" required="" value="{{ $resto->nama_resto }}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Makanan</label>
                    <input type="text" class="form-control" name="makanan" required="" value="{{ $menu->makanan }}">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="number" class="form-control" name="harga" value="{{ $menu->harga }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="d-block">Rating</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating_makanan" id="rating" value="1" {{ ( $menu->rating_makanan == "1" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating1">
                        Rate 1
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating_makanan" id="rating" value="2"  {{ ( $menu->rating_makanan == "2" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating2">
                        Rate 2
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating_makanan" id="rating" value="3"  {{ ( $menu->rating_makanan == "3" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating3">
                        Rate 3
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating_makanan" id="rating" value="4"  {{ ( $menu->rating_makanan == "4" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating4">
                        Rate 4
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rating_makanan" id="rating" value="5"  {{ ( $menu->rating_makanan == "5" ) ? 'checked' : '' }}>
                      <label class="form-check-label" for="rating5">
                        Rate 5
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="desk_makanan" required="">{{ $menu->desk_makanan }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="gambar_mkn">
                      <label class="custom-file-label" for="customFile">{{ $menu->gambar_mkn }}</label>
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