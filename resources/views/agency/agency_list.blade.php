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
                  onclick="window.location.href='{{ URL::TO('agency/create') }}'" >
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
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{ session()->get('message') }}
                   </div>
                   @endif
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Logo </th>
                            <th> Agency Name </th>
                            <th> Principal Agent </th>
                            <th> Address </th>
                            <th> Phone </th>
                            <th> Fax </th>
                            <th> Email </th>
                            <th> Website </th>
                            <th> Action </th>
                            <th> View </th>
                          </tr>
                        </thead>
                        <tbody>
@foreach ($data as $agency )
                          <tr>
                          <td class="py-1">
                              <img src="{{ asset('/storage/images/'.$agency->logo) }}" height="50px" width="50px">
                              {{-- <img src="/images/{{$agency ->logo}}" /> --}}


                            </td>
                            <td> {{ $agency->name }} </td>
                            <td> {{$agency->principal_agent  }} </td>
                            <td> {{ $agency->address }} </td>
                            <td> {{ $agency->phone }} </td>
                            <td> {{ $agency->fax }} </td>
                            <td> {{ $agency->email }} </td>
                            <td> {{ $agency->webiste }} </td>
                            <td>
                              <div class="row">
                                <a href="{{ route('agency.edit',$agency->id) }}">
                                <button class="badge badge-info">Edit</button> 
                                </a> 
                             
                                  <button class="badge badge-danger"  data-toggle="modal" data-target="#exampleModal">Delete</button> 
                              
                              </div>
                              {{-- <a href="{{route('agency.destroy',1)}}"> <label class="badge badge-danger">Delete</label> </a> --}}
                          </td>
                            <td><a href="{{ route('agency.show',$agency->id)}}"><button class="badge badge-info">View details</button></a></td>
                          </tr>

                          @endforeach
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
      <form method="post" action="{{route('agency.destroy',$agency->id)}}">
        @method('delete')
        @csrf
      <div class="modal-body">
        Are you sure you want to delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">delete</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
