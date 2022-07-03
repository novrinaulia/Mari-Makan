@extends('backend.layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Restaurant</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></div>
          <div class="breadcrumb-item">Restaurant</div>
        </div>
      </div>
      <div class="section-
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            {{-- <div class="card">
              <div class="card-header">
                <h4>Data Restaurant</h4>
                <div class="card-header-action">
                  <a href="{{ route('restaurant.create') }}" class="btn btn-primary">
                    Add New
                  </a>
                </div>
              </div>
              
              <div class="card-body">
                <table class="table-responsive">
                  <thead>
                    <tr align="center">
                      <th scope="col">No</th>
                      <th scope="col">Restaurant</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Jam Buka</th>
                      <th scope="col">Jam Tutup</th>
                      <th scope="col">Rating</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Gambar</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($restaurants as $resto)
                    <tr align="center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $resto->nama }}</td>
                        <td>{{ $resto->alamat }}</td>
                        <td>{{ $resto->jambuka }}</td>
                        <td>{{ $resto->jamtutup }}</td>
                        <td>{{ $resto->rating }}</td>
                        <td>{{ Str::limit($resto->deskripsi, 50) }}</td>
                        <td><a href="{{ asset('upload/' . $resto->gambar) }}" target="__blank">{{ $resto->gambar }}</a></td>
                        <td>
                          <a class="btn btn-primary btn-action" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <td>
                          <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach



                  </tbody>
                </table>
              </div>
            </div> --}}
            <div class="card">
              <div class="card-header">
                <h4>Data Restaurant</h4>
                <div class="card-header-action">
                  <a href="{{ route('restaurant.create') }}" class="btn btn-primary">
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
                        <th scope="col">Alamat</th>
                        <th scope="col">Jam Buka</th>
                        <th scope="col">Jam Tutup</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($restaurants as $resto)
                      <tr align="center">
                          <td>{{ $no++ }}</td>
                          <td>{{ $resto->nama_resto }}</td>
                          <td>{{ $resto->alamat }}</td>
                          <td>{{ $resto->jambuka }}</td>
                          <td>{{ $resto->jamtutup }}</td>
                          <td>{{ $resto->rating_resto }}</td>
                          <td>{{ Str::limit($resto->desk_resto, 50) }}</td>
                          <td><a href="{{ asset('upload/' . $resto->gambar_resto) }}" target="__blank">{{ $resto->gambar_resto }}</a></td>
                          <td>
                            <a href="{{route('restaurant.edit', $resto->id_restaurants)}}" class="btn btn-primary btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                          </td>
                          <td>
                            <form action="{{route('restaurant.destroy', $resto->id_restaurants)}}" method="POST">
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