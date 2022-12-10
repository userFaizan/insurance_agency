@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <a href="{{ route('users.create') }}" type="button" class="btn btn-info btn-icon-text" >
                    <i class="mdi mdi-plus-circle-outline"></i>
                    Add New User </a>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Table</h4>
                    <p class="card-description"> All User's Details <code></code>
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
                            <th> Id </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $key => $user)

                          <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                              @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                   <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                              @endif
                            </td>
                            <td>
                              <a href="{{ route('users.edit', $user->id) }}"> <label class="badge badge-info">Edit</label></a> 
                                <form method="post" action="{{route('users.destroy',$user->id)}}">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="badge badge-danger">Delete</button>
                              </form>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection
