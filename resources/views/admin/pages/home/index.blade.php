@extends('admin.layouts.app_admin')
@section('title')
  Dashboard Home
@endsection
@section('home')
  active
@endsection
@section('admin_content')
  <!-- page title area start -->
  <div class="page-title-area">
      <div class="row align-items-center">
          <div class="col-sm-6">
              <div class="breadcrumbs-area clearfix">
                  <h4 class="page-title pull-left">home</h4>
                  <ul class="breadcrumbs pull-left">
                      <li><a href="index.html">Home</a></li>
                      <li><span>Dashboard</span></li>
                  </ul>
              </div>
          </div>
          @include('admin.layouts.partial.logout')
      </div>
  </div>
  <!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
      <div class="col-12 m-auto">
        <h1>sdlf</h1>

      </div>

    </div>
  </div>

@endsection
