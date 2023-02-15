@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <div class="row">
            <div class="col-md-9">
                <h4>Categories</h4>
            </div>
            <div class="col-md-3">
                <a href="{{ url('addCategory') }}" class="btn btn-info btn-sm mb-0 me-3" style="float: right">Add category</a>
            </div>
        </div>
        <hr class="bg-dark">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Photo</th>
                        {{-- <th>Created at</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td><img src="{{asset("uploads/category/".$item->photo)}}" style="width:60px" alt=""></td>
                        {{-- <td>{{ $item->created_at }}</td> --}}
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ url('editCategory/'.$item->id) }}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ url('deleteCategory/'.$item->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection