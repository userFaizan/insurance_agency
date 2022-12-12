@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

    <!-- form start  -->
    
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Client Personal</h4>
    
              <form class="form-sample">
    
                <p class="card-description">Add Client Information </p>
    <!-- row  -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Middle Name</label>
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
                      <label class="col-sm-3 col-form-label">Last Name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Salutation</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
                </div>
    <!-- row -->
    <!-- for drop down -->
    <div class="row">
      
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-9">
            <select class="form-control" required>
              <option>ex</option>
              <option>ex</option>
            </select>
          </div>
        </div>
      </div>
    
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Type of Customer</label>
          <div class="col-sm-9">
            <select class="form-control" required>
              <option>ex</option>
              <option>ex</option>
            </select>
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
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Type</label>
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
                      <label class="col-sm-3 col-form-label">Phone  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone Type</label>
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
                      <label class="col-sm-3 col-form-label">Social Media   </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Social Media Type</label>
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
                      <label class="col-sm-3 col-form-label">Occupation  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Employer</label>
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
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <select class="form-control" required>
                        <option>ex</option>
                        <option>ex</option>
                        </select>
                    </div>
                    </div>
                </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">SS#  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">ID#</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">ID Type  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Medicare #</label>
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
                      <label class="col-sm-3 col-form-label">Part A Start Date </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required  />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Part B Start Date</label>
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
                      <label class="col-sm-3 col-form-label">Medicaid # </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Add Policy</label>
                      <div class="col-sm-9">
                      <button type="submit" class="btn btn-primary mr-2">Add</button>
                      <button type="submit" class="btn btn-primary mr-2">Make Payment </button>
                      </div>
                    </div>
                  </div>
            </div>
    <!-- row -->
    <p class="card-description"> Spouse </p>
    <div class="row">
      
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Referral Source</label>
          <div class="col-sm-9">
            <select class="form-control" required>
              <option>ex</option>
              <option>ex</option>
            </select>
          </div>
        </div>
      </div>
    
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Marital Status</label>
          <div class="col-sm-9">
            <select class="form-control" required>
              <option>ex</option>
              <option>ex</option>
            </select>
          </div>
        </div>
      </div>
    
    </div>
    <!-- row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Spouse First Name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required  />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Spouse Middle Name</label>
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
                      <label class="col-sm-3 col-form-label">Spouse Last Name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Salutation</label>
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
                      <label class="col-sm-3 col-form-label">Email  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required  />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Type</label>
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
                      <label class="col-sm-3 col-form-label">Phone </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required  />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone Type</label>
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
                      <label class="col-sm-3 col-form-label">Social Media   </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Social Media Type</label>
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
                      <label class="col-sm-3 col-form-label">Occupation  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Employer</label>
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
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <select class="form-control" required>
                        <option>ex</option>
                        <option>ex</option>
                        </select>
                    </div>
                    </div>
                </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">SS#  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">ID#</label>
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
                      <label class="col-sm-3 col-form-label">ID Type  </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Medicare #</label>
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
                      <label class="col-sm-3 col-form-label">Part A Start Date </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Part B Start Date</label>
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
                      <label class="col-sm-3 col-form-label">Medicaid # </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Next Due Date </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required />
                      </div>
                    </div>
                  </div>
            </div>
            <!-- row -->
            <p class="card-description"> Address Details </p>
        <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address  required</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Physical City</label>
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
                      <label class="col-sm-3 col-form-label">Physical State </label>
                      <div class="col-sm-9">
                      <select class="form-control" required>
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
                      <label class="col-sm-3 col-form-label">Physical Zip Code</label>
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
                    <label class="col-sm-3 col-form-label">Rent or Own</label>
                    <div class="col-sm-9">
                        <select class="form-control" required>
                        <option>ex</option>
                        <option>ex</option>
                        </select>
                    </div>
                    </div>
                </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address Note</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
        </div>
    <!-- row -->

              </form>
            </div>
          </div>
        </div>
        <!-- form end -->
      </div>
@endsection