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
                  onclick="window.location.href='{{ URL::TO('vendor/create') }}';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New Vendor </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Vendor List</h4>
                    <p class="card-description"> All Vendor Details <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> DISPLAY NAME </th>
                            <th> Vendor Name </th>
                            <th> Tax ID </th>
                            <th> Phone  </th>
                            <th> Email </th>
                            <th> Address </th>
                            <th> Fax </th>
                            <th> Website </th>
                            <th> Action </th>
                            <th> View </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td> Edward </td>
                            <td><button class="badge badge-info">Edit</button>
                          <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete
</button>                          </td>
                            <td><button class="badge badge-info">View details</button></td>
                          </tr>

                          <tr>
                            <td> Ed </td>
                            <td> Ed </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td> Edward </td>
                            <td>
                              <a href="{{ URL::TO('vendor/2/edit') }}">
                              <button class="badge badge-info">Edit</button>
                              </a>
                              <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete
</button>                          </td>
                            <td>
                              <a href="{{ URL::To('vendor/4') }}">
                              <button class="badge badge-info">View details</button>
                              </a>
                            </td>
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
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Agency Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">delete</button>
      </div>
    </div>
  </div>
</div>
@endsection
