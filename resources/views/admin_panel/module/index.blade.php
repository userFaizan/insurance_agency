@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <a href="{{ route('permissions.create') }}" type="button" class="btn btn-info btn-icon-text" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New Module </a>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Module Table</h4>
                    <p class="card-description"> All Module Details <code></code>
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
                            <th> ID </th>
                            <th> Module </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($Permission as $permissions)
                          <tr>
                            <td> {{ $permissions->id  }}</td>
                            <td> {{ $permissions->name  }} </td>
                            <td>
                              
                              <a href="{{ route('permissions.edit', $permissions->id) }}"> <label class="badge badge-info">Edit</label></a> 
                              {{-- <a href="{{ route('permissions.destroy', $permissions->id) }}"> <label class="badge badge-danger">Delete</label> --}}
                                <form method="post" action="{{route('permissions.destroy',$permissions->id)}}">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="badge badge-danger">Delete</button>
                              </form>
                              </td>
                          </tr>
                        </tbody>
                        @endforeach

                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection
