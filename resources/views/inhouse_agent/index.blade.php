@extends('admin_frontend.master')
@section('content')
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
                  onclick="window.location.href='" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New House Agent </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">House Agent List</h4>
                    <p class="card-description"> All House Agent  Details <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> DOB </th>
                            <th> Tax Id </th>
                            <th> DL / ID  </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th> Address </th>
                            <th> Notes </th>
                            <th> Action </th>
                            <th> View </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                          <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td> Edward </td>
                            <td>
                              <div class="row">
                                <a href="">
                                <button class="badge badge-info">Edit</button> 
                                </a> 
                           
                              </div>
                              {{-- <a href="{{route('agency.destroy',1)}}"> <label class="badge badge-danger">Delete</label> </a> --}}
                          </td>
                            <td><a href=""><button class="badge badge-info">View details</button></a></td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
                           <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Employees Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form >
        @method('delete')
        @csrf
      <div class="modal-body">
        Are you sure you want to delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">delete</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@endsection