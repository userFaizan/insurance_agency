@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  <div class="page-header">
              <h3 class="page-title"> Agency Details </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <button type="button" class="btn btn-info btn-icon-text" 
                  onclick="window.location.href='#';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Edit Details </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <h6 class="preview-subject">Agency Info</h6>

                    <!-- <p class="card-description"> All Agencies Details <code></code>
                    </p> -->
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
                            <th> Note </th>
                            <th> File </th>
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
                            <td>message</td>
                            <td><label class="badge badge-info">View file</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- new table -->
                    <br>
                    <h6 class="preview-subject">Accounting Info</h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> EIN letter </th>
                            <th> VOID Check (s) </th>
                            <th> Tax ID </th>
                            <th> Business Type </th>
                            <th> Fiscal Month Start </th>
                            <th> Fiscal Month End</th>
                            <th> Income Tax Due </th>
                            <th> Franchise Tax Due  </th>
                            <th> Sales Tax Due </th>
                            <th> Routing </th>
                            <th> Type of account </th>
                            <th> Account </th>
                            <th> Type of account </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td><label class="badge badge-info">View file</label></td>
                            <td><label class="badge badge-info">View file</label></td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward.123 </td>
                            <td> Admin </td>
                            <td> Edward </td>
                            <td>message</td>
                            <td>message</td>
                            <td>message</td>
                            <td>message</td>
                            <td>message</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->

                    <br>
                    <h6 class="preview-subject">E&O Info </h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> E&O </th>
                            <th> Policy </th>
                            <th> Effective Date </th>
                            <th> Expiration Date </th>
                            <th> Policy Limits </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td><label class="badge badge-info">View file</label></td>
                            <td>nice</td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward.123 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->
                    <br>
                    <h6 class="preview-subject">License Info </h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> License(s) </th>
                            <th> Resident State </th>
                            <th> NPN </th>
                            <th> License </th>
                            <th> License Type </th>
                            <th> Expiration Date </th>
                            <th> update date </th>
                            <th> Non-resident States </th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td><label class="badge badge-info">View file</label></td>
                            <td>nice</td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward.123 </td>
                            <td> Edward.123 </td>
                            <td> Edward.123 </td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->
                    <br>
                    <h6 class="preview-subject">Non-resident 1 </h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> State </th>
                            <th> License </th>
                            <th> License Type </th>
                            <th> Expiration Date </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>texus</td>
                            <td>nice</td>
                            <td> Edward </td>
                            <td> Edward </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->
                    <br>
                    <h6 class="preview-subject">Log In(s) Info </h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Company </th>
                            <th> Website </th>
                            <th> User Name </th>
                            <th> Password </th>
                            <th> PIN </th>
                            <th> Notes </th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>texus</td>
                            <td>nice</td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->
                    <br>
                    <h6 class="preview-subject">DBA 1 </h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> DBA Name </th>
                            <th> DOI Registered State(s)  </th>
                            <th> Exp. Date </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>texus</td>
                            <td>nice</td>
                            <td> Edward </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->
                    <br>
                    <h6 class="preview-subject">Additional Location  </h6>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Manager </th>
                            <th> Address </th>
                            <th> Phone </th>
                            <th> Fax </th>
                            <th> Email </th>
                            <th> Website </th>
                            <th> Notes: </th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>texus</td>
                            <td>nice</td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                            <td> Edward </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table -->

                  </div>
                </div>
              </div>
@endsection
