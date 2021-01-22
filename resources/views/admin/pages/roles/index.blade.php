@extends('admin.layouts.app_admin')
@section('title')
  Roles
@endsection
@section('roles')
  active
@endsection
@section('admin_content')
  <!-- page title area start -->
  <div class="page-title-area">
      <div class="row align-items-center">
          <div class="col-sm-6">
              <div class="breadcrumbs-area clearfix">
                  <h4 class="page-title pull-left">Dashboard</h4>
                  <ul class="breadcrumbs pull-left">
                      <li><a href="{{ route('admin.home') }}">Home</a></li>
                      <li><span>All Roles</span></li>

                      <a class="btn btn-primary btn-sm text-white ml-4" href="{{ route('admin.roles.create') }}"> Create Role </a>
                  </ul>
              </div>
          </div>
          @include('admin.layouts.partial.logout')
      </div>
  </div>
  <!-- page title area end -->
  <div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Default</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($roles as $role)

                                            <tr>
                                              <td>{{ $loop->index + 1 }}</td>
                                              <td>{{ $role->name }}</td>
                                              <td>

                                              </td>

                                            </tr>
                                          @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->

  </div>
  </div>

@endsection
