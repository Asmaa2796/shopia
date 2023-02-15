@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <div class="row">
            <div class="col-md-12">
                <h4>Registered users</h4>
            </div>
        </div>
        <hr class="bg-dark">
        @if ($users->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped text-center border bg-white rounded">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role as</th>
                        <th>address</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}} {{$user->lName}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @if ($user->role_as == '1')
                                    <div class="badge bg-warning text-white">
                                        Admin
                                    </div>
                                @else
                                    <div class="badge bg-success text-white">
                                        User
                                    </div>
                                @endif
                            </td>
                            <td>{{$user->address1}}</td>
                            <td>{{date('d-m-Y',strtotime($user->created_at))}}</td>
                            <td><a class="btn btn-sm btn-info mt-2" href="{{url('view_user/'.$user->id)}}">View user</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <div class="container">
                <div class="text-center">
                    <h4 class="my-0">No users exists</h4>
                </div>
            </div>
        @endif
    </div>
@endsection