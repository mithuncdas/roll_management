@extends('admin.layouts.app_admin')
@section('title')
  Roles Create
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
                      <li><span>Roles Create with Permission</span></li>
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
                                <h4 class="header-title">Roles Create</h4>

                                <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="{{ route('admin.roles.store') }}" method="post">
                                          @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Role</label>
                                                <input type="text" class="form-control" name="name"  placeholder="Enter role">
                                                @error ('name')
                                                  <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            @foreach ($permissions as $permission)

                                              <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="permissions[]" id="checkpermission{{ $permission->id }}" value="{{ $permission->name }}">
                                                <label class="form-check-label" for="checkpermission{{ $permission->id }}">{{ $permission->name }}</label>
                                              </div>
                                            @endforeach
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add Role</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->

  </div>
  </div>

@endsection
