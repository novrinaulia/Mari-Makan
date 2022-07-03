{{-- Header --}}
@include('backend.layouts.header')
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      {{-- Navbar --}}
    @include('backend.layouts.navbar')
      {{-- Sidebar --}}
    @include('backend.layouts.sidebar')
      {{-- Content --}}
    @yield('content')
      {{-- Footer --}}
    @include('backend.layouts.footer')