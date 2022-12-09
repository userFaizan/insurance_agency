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
                          Add new user </button> --}}
              </ol>
            </nav>
          </div>
          <!-- header end -->

<!-- form start -->
<div class="col-md-6 grid-margin stretch-card">

<div class="card">
<div class="card-body">
  <h4 class="card-title">Add User</h4>
  <p class="card-description"> User Details </p>
  <form class="forms-sample" method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Name</label>
      <input type="text" name="name" class="form-control" id="" placeholder="Name">
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="" placeholder="Email">
      @if ($errors->has('email'))
      <span class="text-danger">{{ $errors->first('email') }}</span>
     @endif
    </div>
    {{-- <div class="form-group">
      <label for="exampleInputUsername1">Role</label>
      <select class="form-control">
        <option>Client</option>
        <option>Admin</option>
      </select>
    </div> --}}   
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="" placeholder="Password">
      @if ($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"> Confirm_Password</label>
      <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Password">
      @if ($errors->has('password_confirmation'))
      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
     @endif
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a href="{{ route('users.index') }}" class="btn btn-dark">Cancel</a>
  </form>
</div>
</div>




@endsection
