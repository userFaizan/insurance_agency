@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- form start  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Carrier Fields</h4>

          <form class="form-sample">

            <p class="card-description"> Carrier Details </p>
<!-- row  -->
<div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                        <option>Active</option>
                        <option>Inactive</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Carrier Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Line(s) of Business </label>
                    <div class="col-sm-9">
                        <select class="form-control" required>
                        <option>Commercial Auto</option>
                        <option>Personal Auto</option>
                        <option>Home Owners</option>
                        <option>General Liability </option>
                        <option>Medicare</option>
                        <option>Business Owners</option>
                        <option>Worker's Compensation</option>
                        <option>Agriculture Liability</option>
                        <option>Agriculture Package</option>
                        <option>Agriculture Property</option>
                        <option>Agriculture Scheduled & Unscheduled Personal Property</option>
                        <option>Boiler Machinery</option>
                        <option>Bond</option>
                        <option>BOP Property</option>
                        <option>BOP Liability</option>
                        <option>Commercial Articles</option>
                        <option>Commercial Fire</option>
                        <option>Commercial Inland Marine</option>
                        <option>Commercial Package</option>
                        <option>Commercial Property</option>
                        <option>Commercial Umbrella</option>
                        <option>Computers</option>
                        <option>Comtractor's Equipment Floater</option>
                        <option>Crime</option>
                        <option>Dental</option>
                        <option>Directors Officers</option>
                        <option>Dwelling Fire</option>
                        <option>Earthquake</option>
                        <option>Employers Liability</option>
                        <option>Employment Practices Liability</option>
                        <option>Errors And Omission</option>
                        <option>Fiduciary</option>
                        <option>Fine Arts</option>
                        <option>Flood</option>
                        <option>Garage And Dealers</option>
                        <option>Glass</option>
                        <option>Hail</option>
                        <option>Health</option>
                        <option>Installation/Builders Risk</option>
                        <option>Internet Liability</option>
                        <option>Kidnap And Ransom</option>
                        <option>Life</option>
                        <option>Liquor Liability</option>
                        <option>Miscellaneous Professional Liability</option>
                        <option>Mobile Home Owners</option>
                        <option>Motor Carrier</option>
                        <option>Motor Truck Cargo</option>
                        <option>Ocean Marine Commercial</option>
                        <option>Personal Inland Marine</option>
                        <option>Personal Package</option>
                        <option>Personal Umbrella</option>
                        <option>Physicians And Surgeons</option>
                        <option>Recreational Vehicle</option>
                        <option>Renters</option>
                        <option>Scheduled Property</option>
                        <option>Small Farm/Ranch</option>
                        <option>Special Multi-peril</option>
                        <option>Surety</option>
                        <option>Transportation</option>
                        <option>Valuable Papers</option>
                        <option>Watercraft (Small Boat)</option>
                        <option>Wind Policies</option>
                        <option>Workplace Violence</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">State(s) Appointed </label>
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
                    <label class="col-sm-3 col-form-label">Type of Company </label>
                    <div class="col-sm-9">
                        <select class="form-control" required>
                        <option>Insurance Company</option>
                        <option>MGA</option>
                        </select>
                    </div>
                    </div>
                </div>
        </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tax ID</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NAIC</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone Type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax Type </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email  </label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email Type </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website  </label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD FILE(S)  </label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control"   />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Contracted  </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
            </div>
<!-- row -->
<p class="card-description"> Agency Information </p>

<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agent ID  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal Type  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User ID  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required/>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"required  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<p class="card-description"> Appointed Agents  </p>

<div class="row">
<div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Agent </label>
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
                  <label class="col-sm-3 col-form-label">Agent ID   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required  />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal Type  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User ID </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
<div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Commission Paid </label>
                    <div class="col-sm-9">
                        <select class="form-control">
                        <option>Direct to Agent</option>
                        <option>Direct to Agency</option>
                        <option>(Type In)</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<p class="card-description"> Certification </p>

<div class="row">
<div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Certification Req:  </label>
                    <div class="col-sm-9">
                        <select class="form-control">
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Certification Notes   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<p class="card-description"> Commission Info </p>
<div class="row">
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload</label>
                  <div class="col-sm-9">
                  <button type="button" class="btn btn-primary mr-2">Upload 1099</button>
                  <button type="button" class="btn btn-primary mr-2">Contract </button>

                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Schedules</label>
                  <div class="col-sm-9">
                  <button type="button" class="btn btn-primary mr-2">Commission Schedules </button>
                  </div>
                </div>
              </div>
        </div>
<!-- row -->

<p class="card-description"> Carrier Rep Info  </p>
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Name  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone  </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax</label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required/>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email  </label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control"required  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->   
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Submit Form </label>
                  <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
              
            </div>
             <!-- row end -->

          </form>
        </div>
      </div>
    </div>
@endsection
