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
                          Add new Module </button> --}}
              </ol>
            </nav>
          </div>
          <!-- header end -->

<!-- form start -->
<div class="col-md-6 grid-margin stretch-card">

<div class="card">
<div class="card-body">
  <h4 class="card-title">Modules</h4>
  <p class="card-description"> Add Modules fields </p>
  <form class="forms-sample" method="POST" action="{{ route('permissions.store') }}">
@csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Modules Name</label>
      <input type="text" name="name" class="form-control" id="" placeholder="Name">
      @if ($errors->has('name'))
      <span class="text-danger text-left">{{ $errors->first('name') }}</span>
  @endif
    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a  href = "{{ route('permissions.index') }}" class="btn btn-dark">Cancel</a>
  </form>
</div>
</div>

</div>

@endsection
