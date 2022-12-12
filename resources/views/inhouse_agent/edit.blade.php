@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

    <!-- form start  -->
    
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Edit House Agent</h4>
              <form class="form-sample">
                <p class="card-description">Agent Details </p>
    
                <!-- row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
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
                <!-- new row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tax Id #</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DL / ID # </label>
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
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email </label>
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
                      <label class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
                <div class="row">
                <!--   <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" />
                      </div>
                    </div>
                  </div> -->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">UPLOAD FILE(S)</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
      <!-- agency end  -->
    
      <p class="card-description">Reporting to</p>
    
      <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Job Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
    
             
    
                   <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type of Agent</label>
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
                      <label class="col-sm-3 col-form-label">Pay type</label>
                  <div class="col-sm-9">
                        <input type="text" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                </div>
                <!-- row new -->
    
                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Amount</label>
                     <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Frequency</label>
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
                      <label class="col-sm-3 col-form-label">Payment Method +</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Reminder </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
    
    
                
                <!-- row new Accounting Info end -->
    
      <p class="card-description">Pay History</p>
    
      <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Amount</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Description</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Confirmation #</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
                
                <p class="card-description">Work History</p>
    
      <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Previous Company</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Job Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">End Date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
                
              
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Description</label>
                      <div class="col-sm-9">
                        <input type="text"  class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                   <!--  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">End Date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" />
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- row new -->
    
                <p class="card-description">Education History</p>
    
      <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Degree</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Field of study</label>
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
                      <label class="col-sm-3 col-form-label">Year of completion</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
                
    
    
                <p class="card-description">Family Information</p>
    
      <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type of Relationship</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- row new -->
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">text field</label>
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
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                  <!--   <div class="form-group row">
                      <label class="col-sm-3 col-form-label">text field</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- row new -->
                
              
                
    
    
    
    <!-- form end -->
              </form>
            </div>
          </div>
        </div>
        <!-- form end -->
      </div>
@endsection