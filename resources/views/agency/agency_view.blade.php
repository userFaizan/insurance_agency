@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- form start  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Agency Details</h4>
          <form class="form-sample">
            <p class="card-description"> Agency Info </p>

            <!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agency Name</label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted" >{{ $agency->name }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">LOGO</label>
                  <div class="col-sm-9">
                  <div class="py-1 img-thumbnail">
                              <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- new row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Principal Agent</label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->principal_agent }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->address }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone </label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->phone }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->fax }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->email }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->webiste }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->notes }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">FILE(S)</label>
                  <div class="col-sm-9">
                  <div class="img-thumbnail">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                  </div>
                </div>
              </div>
            </div>
  <!-- agency end  -->

  <p class="card-description"> Accounting Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">EIN letter</label>
                  <div class="col-sm-9">
                  <div class="img-thumbnail">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">VOID Check (s)</label>
                  <div class="col-sm-9">
                  <div class="img-thumbnail">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tax ID #</label>
                  <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->tax_id }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Business Type</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->business_type }}</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->

            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fiscal Month Start</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->fiscal_month_start }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fiscal Month End</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->fiscal_month_end }}</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Income Tax Due</label>
                  <div class="col-sm-9">
                    <!-- class="form-control" -->
                    <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->income_tax }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Franchise Tax Due </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->franchise_tax_due }}</p>
                </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Sales Tax Due</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->sales_tax_due }}</p>
                </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Routing #</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->routing_no }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Type of account</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->type_of_account }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAccountingInfo->account_no }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new Accounting Info end -->

  <p class="card-description"> E&O Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">E&O</label>
                  <div class="col-sm-9">
                  <div class="img-thumbnail">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy #</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyEandOInfo->policy_no }}</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Effective Date</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyEandOInfo->effective_date }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyEandOInfo->expiration_date }}</p>
                </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy Limits</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyEandOInfo->policy_limits }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                </div> 
                </div>
               <!-- row new -->

  <p class="card-description"> License Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License(s)</label>
                  <div class="col-sm-9">
                  <div class="img-thumbnail">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Resident State:</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLicenseInfo->resident_state }}</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NPN #</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLicenseInfo->npn_no }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License # </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLicenseInfo->license_no }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License Type</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLicenseInfo->license_type }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLicenseInfo->expiration_date }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">update date</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLicenseInfo->upload_date }}</p>
                  </div>
                </div>
              </div>

              {{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Non-resident States </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">state</p>
                  </div>
                </div>
              </div> --}}

            </div>
             <!-- row new -->

  <p class="card-description"> Non-resident 1</p>
<!-- Non-resident 1 -->

<div class="row">
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">State</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyNonResidentialState[0]->state }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License # </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyNonResidentialState[0]->license_no }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License Type</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyNonResidentialState[0]->license_type }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyNonResidentialState[0]->expiration_date }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

  <p class="card-description"> Log In(s) Info</p>
<!-- Log In(s) Info -->
  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Company</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLoginInfo[0]->company }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLoginInfo[0]->website }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User Name</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLoginInfo[0]->user_name }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLoginInfo[0]->password }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">PIN</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLoginInfo[0]->pin }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyLoginInfo[0]->notes }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

  <p class="card-description"> DBA 1</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DBA </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyDbaAdd[0]->dba }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DBA Name</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyDbaAdd[0]->dba_name }}</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->


            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DOI Registered State(s) </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyDbaAdd[0]->doi_registered }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Exp. Date</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyDbaAdd[0]->exp_date }}</p>
                  </div>
                </div>
                </div> 
                </div>
               <!-- row new -->

  <p class="card-description"> Additional Location </p>
  <!-- row new -->

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Manager</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAdditionalLocation[0]->manager }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAdditionalLocation[0]->address }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAdditionalLocation[0]->phone }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAdditionalLocation[0]->fax }}</p>
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAdditionalLocation[0]->email }}</p>
                  </div>
                </div>
              </div>

              {{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">website</p>
                  </div>
                </div>
              </div> --}}

            </div>
             <!-- row new -->
             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes:</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $agency->agencyAdditionalLocation[0]->notes }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">                  
                </div>
              </div>
              
            </div>
             <!-- row end -->

             
<!-- form end -->
          </form>
        </div>
      </div>
    </div>
    <!-- form end -->
  </div>


@endsection