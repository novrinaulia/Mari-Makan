@extends('backend.layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Makanan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></div>
          <div class="breadcrumb-item">Makanan</div>
        </div>
      </div>
      <div class="section-
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Makanan</h4>
                <div class="card-header-action">
                  <a href="{{ route('menu.create') }}" class="btn btn-primary">
                    Add New
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm">
                    <thead>
                      <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Restaurant</th>
                        <th scope="col">Makanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($menus as $menu)
                      <tr align="center">
                          <td>{{ $no++ }}</td>
                          <td>{{ $menu->nama_resto }}</td>
                          <td>{{ $menu->makanan }}</td>
                          <td>Rp. {{ $menu->harga }}</td>
                          <td>{{ $menu->rating_makanan }}</td>
                          <td>{{ Str::limit($menu->desk_makanan, 50) }}</td>
                          <td><a href="{{ asset('upload/makanan/' . $menu->gambar_mkn) }}" target="__blank">{{ $menu->gambar_mkn }}</a></td>
                          <td>
                            <a href="{{route('menu.edit', $menu->id_menu)}}" class="btn btn-primary btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                          </td>
                          <td>
                            <form action="{{route('menu.destroy', $menu->id_menu)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></button>
                            </form>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection