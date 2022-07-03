@extends('backend.layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Kritik & Saran</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></div>
          <div class="breadcrumb-item">Kritik & Saran</div>
        </div>
      </div>
      <div class="section-
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Kritik & Saran</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm">
                    <thead>
                      <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kritik</th>
                        <th scope="col">Saran</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($kritiks as $kritik)
                      <tr align="center">
                          <td>{{ $no++ }}</td>
                          <td>{{ $kritik->nama_pengguna }}</td>
                          <td>{{ $kritik->email }}</td>
                          <td>{{ Str::limit($kritik->kritik, 50) }}</td>
                          <td>{{ Str::limit($kritik->saran, 50) }}</td>
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