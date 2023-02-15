@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <div class="row">
            <div class="col-md-9">
                <h4>Products</h4>
            </div>
            <div class="col-md-3">
                <a href="{{ url('addProduct') }}" class="btn btn-info btn-sm mb-0 me-3" style="float: right">Add product</a>
            </div>
        </div>
        <hr class="bg-dark">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Small description</th>
                        <th>Photo</th>
                        <th>Selling price</th>
                        <th>Category</th>
                        {{-- <th>Created at</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->small_description }}</td>
                        <td><img src="{{asset("uploads/product/".$item->photo)}}" style="width:60px;" alt=""></td>
                        <td>{{ number_format($item->selling_price) }} EGP</td>
                        <td>{{ $item->category->name }}</td>
                        {{-- <td>{{ $item->created_at }}</td> --}}
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ url('editProduct/'.$item->id) }}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ url('deleteProduct/'.$item->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection