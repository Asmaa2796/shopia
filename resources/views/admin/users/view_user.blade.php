@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <div class="row">
            <div class="col-md-12">
                <h4>User details</h4>
            </div>
        </div>
        <hr class="bg-dark">
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <b class="d-block">Name:</b>
                {{$user->name}} {{$user->lName}}
                |
                @if ($user->role_as == '1')
                    <div class="badge bg-warning text-white">
                        Admin
                    </div>
                @else
                    <div class="badge bg-success text-white">
                        User
                    </div>
                @endif
            </li>
            <li class="list-group-item">
                <b class="d-block">Email:</b>
                {{$user->email}}
            </li>
            <li class="list-group-item">
                <b class="d-block">Phone:</b>
                {{$user->phone}}
            </li>
            <li class="list-group-item">
                <b class="d-block">Zip code:</b>
                {{$user->pincode}}
            </li>
            <li class="list-group-item">
                <b class="mb-2 d-block">Shipping address:</b>
                <div class="mb-2">{{$user->address1}},</div>
                <div class="mb-2">{{$user->address2}},</div>
                <div>{{$user->city}},{{$user->state}},{{$user->country}}</div>
            </li>
        </ul>
    </div>
@endsection