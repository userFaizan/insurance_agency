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
                            Add New Agency </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Agency List</h4>
                    <p class="card-description"> All Agencies Details <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Logo </th>
                            <th> Agency Name </th>
                            <th> Principal Agent </th>
                            <th> Address </th>
                            <th> Website </th>
                            <th> Phone </th>
                            <th> Fax </th>
                            <th> Email </th>
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
                            <td><label class="badge badge-info">Edit</label>
                          <label class="badge badge-danger">Delete</label>
                          </td>
                            <td><label class="badge badge-info">View details</label></td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection
