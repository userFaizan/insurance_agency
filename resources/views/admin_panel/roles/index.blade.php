@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->
  <!-- header -->
  <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <a href="{{ route('roles.create') }}" type="button" class="btn btn-info btn-icon-text" >
                    <i class="mdi mdi-plus-circle-outline"></i>
                    Add New Role </a>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Roles Table</h4>
                    <p class="card-description"> All Roles Details <code></code>
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
                            <th> Role </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($roles as $key => $role)

                          <tr>
                           
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                            <a href="{{ route('roles.edit', $role->id) }}"> <label class="badge badge-info">Edit</label></a> 
                              <form method="post" action="{{route('roles.destroy',$role->id)}}">
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
