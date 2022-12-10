@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- form start  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Agency Fields</h4>
          <form class="form-sample">
            <p class="card-description"> Agency Info </p>

            <!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agency Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD LOGO</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
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
                    <input type="tel" class="form-control" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required />
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
                    <input type="email" class="form-control" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control" required />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD FILE(S)</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" />
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
                    <input type="file" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload VOID Check (s)</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Business Type</label>
                  <div class="col-sm-9">
                    <select class="form-control">
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
                    <select class="form-control">
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
                    <select class="form-control">
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
                    <input type="date" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Franchise Tax Due </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" />
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
                    <input type="date" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Routing #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
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
                    <input type="date" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" />
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
                    <input type="text" class="form-control" />
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
                    <input type="file" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Resident State:</label>
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
              </div>

            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NPN #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License # </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" />
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
                    <input type="date" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
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
              </div>

            </div>
             <!-- row new -->

  <p class="card-description"> Non-resident 1</p>
<!-- Non-resident 1 -->

<div class="row">
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">State</label>
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
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License # </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" />
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
                    <input type="text" class="form-control" require />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" require />
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
                    <input type="text" class="form-control" require />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" require />
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
                    <input type="text" class="form-control" require />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

  <p class="card-description"> DBA 1</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DBA Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DOI Registered State(s) </label>
                  <div class="col-sm-9">
                    <select class="form-control">
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
                  <label class="col-sm-3 col-form-label">Exp. Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
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
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
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
                    <input type="tel" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" />
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
                    <input type="email" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control" />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Submit Form </label>
                  <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>

                  </div>
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