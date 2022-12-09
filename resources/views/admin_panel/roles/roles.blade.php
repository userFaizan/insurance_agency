@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- Body start  -->
<!-- header -->
<div class="page-header">
            <h3 class="page-title">  </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <button type="button" class="btn btn-info btn-icon-text" 
                onclick="window.location.href='client_form.php';" >
                          <i class="mdi mdi-plus-circle-outline"></i>
                          Add new user </button>
              </ol>
            </nav>
          </div>
          <!-- header end -->

<!-- form start -->
<div class="col-md-6 grid-margin stretch-card">

<div class="card">
<div class="card-body">
  <h4 class="card-title">Roles</h4>
  <p class="card-description"> Add Roles fields </p>
  <form class="forms-sample">

    <div class="form-group">
      <label for="exampleInputUsername1">Role Name</label>
      <input type="text" class="form-control" id="" placeholder="Name">
    </div>

    <!-- drop down option
    <div class="form-group">
      <label for="exampleInputUsername1">Roll</label>
      <select class="form-control">
        <option>Client</option>
        <option>Admin</option>
      </select>
    </div> -->

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-dark">Cancel</button>
  </form>
</div>
</div>

</div>
@endsection
