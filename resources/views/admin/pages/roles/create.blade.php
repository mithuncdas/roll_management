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
                                            <div class="form-check">
                                              <input type="checkbox" class="form-check-input"  id="checkpermissionall">
                                              <label class="form-check-label" for="checkpermissionall}">All</label>
                                            </div>
                                            <hr>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($permission_groups as $group)
                                             <div class="row">
                                              <div class="col-3">
                                                <div class="form-check">
                                                  <input type="checkbox" class="form-check-input" name="permissions[]" id="{{ $i }}management" value="{{ $group->group_name }}" onclick="checkPermissonByGroup('rol-1{{ $i }}-management-checkbox',this)">
                                                  <label class="form-check-label" for="checkpermission{{ $group->group_name }}">{{ $group->group_name }}</label>
                                                </div>
                                              </div>
                                              <div class="col-9 rol-1{{ $i }}-management-checkbox">
                                                @php
                                                  $j = 1;
                                                    $permissions = App\user::getpermissionByGroupname($group->group_name)
                                                @endphp
                                                @foreach ($permissions as $permission)
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="permissions[]" id="checkpermission{{ $permission->id }}" value="{{ $permission->name }}">
                                                    <label class="form-check-label" for="checkpermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                  </div>
                                                  @php
                                                      $j++;
                                                  @endphp
                                                @endforeach
                                              </div>
                                             </div>

                                             <hr>
                                             @php
                                                 $i++;
                                             @endphp
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
@section('admin_scripts')
    <script>
      $("#checkpermissionall").click(function(){
        if ($(this).is(':checked')) {
          $('input[type=checkbox]').prop('checked',true);
        }
        else{
          $('input[type=checkbox]').prop('checked',false);
        }
      });
      function checkPermissonByGroup(className, checkThis){
        const groupIdName = $("#"+checkThis.id);
        const checkBox = $('.'+className+' input');
        if (groupIdName.is(':checked')) {
          checkBox.prop('checked',true);
        }
        else{
          checkBox.prop('checked',false);
        }
      }

    </script>
@endsection
@endsection
