@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- Body start  -->
<!-- header -->
<div class="page-header">
            <h3 class="page-title">  </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                {{-- <button type="button" class="btn btn-info btn-icon-text" 
                onclick="window.location.href='client_form.php';" >
                          <i class="mdi mdi-plus-circle-outline"></i>
                          Add new Role </button> --}}
              </ol>
            </nav>
          </div>
          <!-- header end -->

<!-- form start -->
<div class="col-md-6 grid-margin stretch-card">

<div class="card">
<div class="card-body">
  <h4 class="card-title">Roles</h4>
  <p class="card-description"> Edit Roles fields </p>
  <form class="forms-sample"  method="POST" action="{{ route('roles.update', $role->id) }}">
    @method('patch')
    @csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Role Name</label>
      <input type="text" name="name" value="{{ $role->name }}"  class="form-control" id="" placeholder="Name">
    </div>

    {{-- drop down option --}}
    <div class="form-group">
      <label for="exampleInputUsername1">Assign Permissions</label>
      <table class="table table-striped">
        <thead>
            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
            <th scope="col" width="20%">Name</th>
            <th scope="col" width="1%">Guard</th> 
        </thead>

        @foreach($permissions as $permission)
            <tr>
                <td>
                    <input type="checkbox" 
                    name="permission[{{ $permission->name }}]"
                    value="{{ $permission->name }}"
                    class='permission'
                    {{ in_array($permission->name, $rolePermissions) 
                        ? 'checked'
                        : '' }}>
                </td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->guard_name }}</td>
            </tr>
        @endforeach
    </table>
    </div> 

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a href="{{ route('roles.index') }}"  class="btn btn-dark">Cancel</a>
  </form>
</div>
</div>

</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }

            });
        });
    </script>
@endsection