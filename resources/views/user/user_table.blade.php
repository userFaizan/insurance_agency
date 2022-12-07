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
                  onclick="window.location.href='#';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New User </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Table</h4>
                    <p class="card-description"> All User's Details <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Password </th>
                            <th> Roll </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td> Edward </td>
                            <td> Edward@gmail </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td><label class="badge badge-info">Edit</label>
                            <label class="badge badge-danger">Delete</label>
                          </td>
                          </tr>

                          <tr>
                            <td> Edward </td>
                            <td> Edward@gmail </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td><label class="badge badge-info">Edit</label>
                            <label class="badge badge-danger">Delete</label>
                          </td>
                          </tr>

                          <tr>
                            <td> Edward </td>
                            <td> Edward@gmail </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td><label class="badge badge-info">Edit</label>
                            <label class="badge badge-danger">Delete</label>
                          </td>
                          </tr>
                        

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection
