@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- form start  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Agency Fields</h4>
          <form class="form-sample"  method="POST"  action="{{ route('agency.update',$agency->id) }}" enctype="multipart/form-data">
            @method('patch')
              @csrf
            <p class="card-description"> Agency Info </p>

            <!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agency Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" value="{{ $agency->name }}" class="form-control" />
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD LOGO</label>
                  <div class="col-sm-9">
                    <input type="file" name="logo" class="form-control" />
                    @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                   @endif
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
                    <input type="text" name="principal_agent" value="{{ $agency->principal_agent }}" class="form-control" />
                       @if ($errors->has('principal_agent'))
                    <span class="text-danger">{{ $errors->first('principal_agent') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <input type="text" name="address" value="{{ $agency->address }}" class="form-control" required />
                    @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                   @endif
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
                    <input type="tel" name="phone"   value="{{ $agency->phone }}" class="form-control" required/>
                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <input type="tel" name="fax" value="{{ $agency->fax }}" class="form-control" required />
                    @if ($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                   @endif
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
                    <input type="email" name="email" value="{{ $agency->email }}" class="form-control" required />
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="url" name="webiste" value="{{ $agency->webiste }}" class="form-control" required />
                    @if ($errors->has('webiste'))
                    <span class="text-danger">{{ $errors->first('webiste') }}</span>
                   @endif
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
                    <input type="text" name="notes" value="{{ $agency->notes }}" class="form-control" />
                    @if ($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD FILE(S)</label>
                  <div class="col-sm-9">
                    <input type="file" name="file" class="form-control" />
                     @if ($errors->has('file'))
                    <span class="text-danger">{{ $errors->first('file') }}</span>
                   @endif
                  </div>
                </div>
              </div>
            </div>
  <!-- agency end  -->

 <p class="card-description"> Accounting Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload EIN letter</label>
                  <div class="col-sm-9">
                    <input type="file" name="ein_letter" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload VOID Check (s)</label>
                  <div class="col-sm-9">
                    <input type="file" name="void_checks" class="form-control" />
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
                    <input type="text" name="tax_id"  value="{{ $agency->agencyAccountingInfo->tax_id }}" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Business Type</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="business_type">
                      <option>ex</option>
                      <option>ex</option>
                    </select>
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
                    <select class="form-control" name="fiscal_month_start">
                      <option>ex</option>
                      <option>ex</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fiscal Month End</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="fiscal_month_end">
                      <option>ex</option>
                      <option>ex</option>
                    </select>
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
                    <input type="date" class="form-control" name="income_tax" value="{{ $agency->agencyAccountingInfo->income_tax }}" name="income_tax" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Franchise Tax Due </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="franchise_tax_due" value="{{ $agency->agencyAccountingInfo->franchise_tax_due }}"  />
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
                    <input type="date" class="form-control"  value="{{ $agency->agencyAccountingInfo->sales_tax_due }}"  name="sales_tax_due" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Routing #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required value="{{ $agency->agencyAccountingInfo->routing_no }}"  name="routing_no"/>
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
                    <input type="text" class="form-control" value="{{ $agency->agencyAccountingInfo->type_of_account }}"  name="type_of_account" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required value="{{ $agency->agencyAccountingInfo->account_no }}"  name="account_no"/>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new Accounting Info end -->

  <p class="card-description"> E&O Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload E&O</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control " name="file" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{ $agency->agencyEandOInfo->policy_no }}" name="policy_no" />
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
                    <input type="date" class="form-control" value="{{ $agency->agencyEandOInfo->effective_date }}" name="effective_date" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control"  value="{{ $agency->agencyEandOInfo->expiration_date }}" name="expiration_date" />
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
                    <input type="text" class="form-control" value="{{ $agency->agencyEandOInfo->policy_limits }}"  name="policy_limits" />
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
                               <label class="col-sm-3 col-form-label">Upload License(s)</label>
                               <div class="col-sm-9">
                                 <input type="file" name="file" class="form-control" />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Resident State:</label>
                               <div class="col-sm-9">
                                 <select class="form-control" name="resident_state">
                                   <option>Alabama</option>
                                   <option>Alaska</option>
                                   <option>Arizona</option>
                                   <option>Arkansas</option>
                                   <option>California</option>
                                   <option>Colorado</option>
                                   <option>Connecticut</option>
                                   <option>Delaware</option>
                                   <option>Florida</option>
                                   <option>Georgia</option>
                                   <option>Hawaii</option>
                                   <option>Idaho</option>
                                   <option>Illinois</option>
                                   <option>Indiana</option>
                                   <option>Iowa</option>
                                   <option>Kansas</option>
                                   <option>Kentucky</option>
                                   <option>Louisiana</option>
                                   <option>Maine</option>
                                   <option>Maryland</option>
                                   <option>Massachusetts</option>
                                   <option>Michigan</option>
                                   <option>Minnesota</option>
                                   <option>Mississippi</option>
                                   <option>Missouri</option>
                                   <option>Montana</option>
                                   <option>Nebraska</option>
                                   <option>Nevada</option>
                                   <option>New Hampshire</option>
                                   <option>New Jersey</option>
                                   <option>New Mexico</option>
                                   <option>New York</option>
                                   <option>North Carolina</option>
                                   <option>North Dakota</option>
                                   <option>Ohio</option>
                                   <option>Oklahoma</option>
                                   <option>Oregon</option>
                                   <option>Pennsylvania</option>
                                   <option>Rhode Island</option>
                                   <option>South Carolina</option>
                                   <option>South Dakota</option>
                                   <option>Tennessee</option>
                                   <option>Texas</option>
                                   <option>Utah</option>
                                   <option>Vermont</option>
                                   <option>Virginia</option>
                                   <option>Washington</option>
                                   <option>West Virginia</option>
                                   <option>Wisconsin</option>
                                   <option>Wyoming</option>
                                 </select>
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
                                 <input type="text" class="form-control" value="{{ $agency->agencyLicenseInfo->npn_no }}" name="npn_no" />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">License # </label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" value="{{ $agency->agencyLicenseInfo->license_no }}"   name="license_no" />
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
                                 <input type="text" class="form-control" value="{{ $agency->agencyLicenseInfo->license_type }}"   name="license_type" />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Expiration Date </label>
                               <div class="col-sm-9">
                                 <input type="date" class="form-control" value="{{ $agency->agencyLicenseInfo->expiration_date }}"  name="expiration_date" />
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
                                 <input type="date" class="form-control" value="{{ $agency->agencyLicenseInfo->upload_date }}" name="upload_date" />
                               </div>
                             </div>
                           </div>
             
                           {{-- <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Non-resident States </label>
                               <div class="col-sm-9">
                               <select class="form-control">
                                   <option>Alabama</option>
                                   <option>Alaska</option>
                                   <option>Arizona</option>
                                   <option>Arkansas</option>
                                   <option>California</option>
                                   <option>Colorado</option>
                                   <option>Connecticut</option>
                                   <option>Delaware</option>
                                   <option>Florida</option>
                                   <option>Georgia</option>
                                   <option>Hawaii</option>
                                   <option>Idaho</option>
                                   <option>Illinois</option>
                                   <option>Indiana</option>
                                   <option>Iowa</option>
                                   <option>Kansas</option>
                                   <option>Kentucky</option>
                                   <option>Louisiana</option>
                                   <option>Maine</option>
                                   <option>Maryland</option>
                                   <option>Massachusetts</option>
                                   <option>Michigan</option>
                                   <option>Minnesota</option>
                                   <option>Mississippi</option>
                                   <option>Missouri</option>
                                   <option>Montana</option>
                                   <option>Nebraska</option>
                                   <option>Nevada</option>
                                   <option>New Hampshire</option>
                                   <option>New Jersey</option>
                                   <option>New Mexico</option>
                                   <option>New York</option>
                                   <option>North Carolina</option>
                                   <option>North Dakota</option>
                                   <option>Ohio</option>
                                   <option>Oklahoma</option>
                                   <option>Oregon</option>
                                   <option>Pennsylvania</option>
                                   <option>Rhode Island</option>
                                   <option>South Carolina</option>
                                   <option>South Dakota</option>
                                   <option>Tennessee</option>
                                   <option>Texas</option>
                                   <option>Utah</option>
                                   <option>Vermont</option>
                                   <option>Virginia</option>
                                   <option>Washington</option>
                                   <option>West Virginia</option>
                                   <option>Wisconsin</option>
                                   <option>Wyoming</option>
                                 </select>
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
                               <select class="form-control" name="state">
                                   <option>Alabama</option>
                                   <option>Alaska</option>
                                   <option>Arizona</option>
                                   <option>Arkansas</option>
                                   <option>California</option>
                                   <option>Colorado</option>
                                   <option>Connecticut</option>
                                   <option>Delaware</option>
                                   <option>Florida</option>
                                   <option>Georgia</option>
                                   <option>Hawaii</option>
                                   <option>Idaho</option>
                                   <option>Illinois</option>
                                   <option>Indiana</option>
                                   <option>Iowa</option>
                                   <option>Kansas</option>
                                   <option>Kentucky</option>
                                   <option>Louisiana</option>
                                   <option>Maine</option>
                                   <option>Maryland</option>
                                   <option>Massachusetts</option>
                                   <option>Michigan</option>
                                   <option>Minnesota</option>
                                   <option>Mississippi</option>
                                   <option>Missouri</option>
                                   <option>Montana</option>
                                   <option>Nebraska</option>
                                   <option>Nevada</option>
                                   <option>New Hampshire</option>
                                   <option>New Jersey</option>
                                   <option>New Mexico</option>
                                   <option>New York</option>
                                   <option>North Carolina</option>
                                   <option>North Dakota</option>
                                   <option>Ohio</option>
                                   <option>Oklahoma</option>
                                   <option>Oregon</option>
                                   <option>Pennsylvania</option>
                                   <option>Rhode Island</option>
                                   <option>South Carolina</option>
                                   <option>South Dakota</option>
                                   <option>Tennessee</option>
                                   <option>Texas</option>
                                   <option>Utah</option>
                                   <option>Vermont</option>
                                   <option>Virginia</option>
                                   <option>Washington</option>
                                   <option>West Virginia</option>
                                   <option>Wisconsin</option>
                                   <option>Wyoming</option>
                                 </select>
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">License # </label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" value="{{ $agency->agencyNonResidentialState[0]->license_no }}" name="license_no" />
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
                                 <input type="text" class="form-control" value="{{ $agency->agencyNonResidentialState[0]->license_type }}"   name="license_type"/>
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Expiration Date </label>
                               <div class="col-sm-9">
                                 <input type="date" class="form-control" value="{{ $agency->agencyNonResidentialState[0]->expiration_date }}" name="expiration_date" />
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
                                 <input type="text" name="company" value="{{ $agency->agencyLoginInfo[0]->company }}"   class="form-control" require />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Website </label>
                               <div class="col-sm-9">
                                 <input type="text" name="website" class="form-control" value="{{ $agency->agencyLoginInfo[0]->website }}"   require />
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
                                 <input type="text" name="user_name" class="form-control" value="{{ $agency->agencyLoginInfo[0]->user_name }}" require />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Password </label>
                               <div class="col-sm-9">
                                 <input type="text" name="password"  value="{{ $agency->agencyLoginInfo[0]->password }}" class="form-control" require />
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
                                 <input type="text" name="pin" value="{{ $agency->agencyLoginInfo[0]->pin }}"  class="form-control" require />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Notes </label>
                               <div class="col-sm-9">
                                 <input type="text" name="notes" value="{{ $agency->agencyLoginInfo[0]->notes }}" class="form-control" />
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
                                 <input type="text" class="form-control" value="{{ $agency->agencyDbaAdd[0]->dba }}" name="dba" />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">DBA Name</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control"  value="{{ $agency->agencyDbaAdd[0]->dba_name }}"   name="dba_name" />
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
                                 <select class="form-control"  name="doi_registered">
                                   <option>ex</option>
                                   <option>ex</option>
                                 </select>
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Exp. Date</label>
                               <div class="col-sm-9">
                                 <input type="date" class="form-control" value="{{ $agency->agencyDbaAdd[0]->exp_date }}"   name="exp_date"/>
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
                                 <input type="text" class="form-control" value="{{ $agency->agencyAdditionalLocation[0]->manager }}"  name="manager" />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Address </label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" value="{{ $agency->agencyAdditionalLocation[0]->address }}" name="address" />
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
                                 <input type="tel" class="form-control" value="{{ $agency->agencyAdditionalLocation[0]->phone }}" name="phone" />
                               </div>
                             </div>
                           </div>
             
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Fax </label>
                               <div class="col-sm-9">
                                 <input type="tel" class="form-control"   value="{{ $agency->agencyAdditionalLocation[0]->fax }}" name="fax" />
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
                                 <input type="email" class="form-control" value="{{ $agency->agencyAdditionalLocation[0]->email }}" name="email" />
                               </div>
                             </div>
                           </div>
             
                           {{-- <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Website </label>
                               <div class="col-sm-9">
                                 <input type="url" class="form-control" nam />
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
                                 <input type="text" class="form-control"  value="{{ $agency->agencyAdditionalLocation[0]->notes }}"  name="notes" />
                               </div>
                             </div>
                           </div>
             
                        
                           
                         </div> 
                          <!-- row end -->
             
                          <div class="col-md-6">
                           <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Submit Form </label>
                             <div class="col-sm-9">
                             <button type="submit" class="btn btn-primary mr-2">Submit</button>
             
                             </div>
                           </div>
                         </div>
             <!-- form end -->
                       </form>
        </div>
      </div>
    </div>
    <!-- form end -->
  </div>


@endsection