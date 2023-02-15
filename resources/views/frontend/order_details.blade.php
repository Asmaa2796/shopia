@extends('layouts.app')
@section('title')
    Order details
@endsection

@section('content')
    {{-- orders --}}
    <div class="orders py-4">
        <div class="container">
            <div>
                <a href={{ url('/') }}>Home</a> \ <a href={{ url('my_orders') }}>Orders</a> \ Order details
            </div>
            <h4 class="title">Order details</h4>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 text-right">
                    <div class="p-3 border my-2 rounded d-inline-block bg-light">
                        <h4 class="text-success mb-0">Total price: {{number_format($orders->total_price)}} EGP</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="list-group mb-2">
                        <li class="list-group-item">
                            <b class="d-block">Name:</b>
                            {{$orders->fName}} {{$orders->lName}}
                        </li>
                        <li class="list-group-item">
                            <b class="d-block">Email:</b>
                            {{$orders->email}}
                        </li>
                        <li class="list-group-item">
                            <b class="d-block">Phone:</b>
                            {{$orders->phone}}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="list-group mb-2">
                        <li class="list-group-item">
                            <b class="d-block">Zip code:</b>
                            {{$orders->pincode}}
                        </li>
                        <li class="list-group-item">
                            <b class="mb-2 d-block">Shipping address:</b>
                            <div class="mb-2">{{$orders->address1}},</div>
                            <div class="mb-2">{{$orders->address2}},</div>
                            <div>{{$orders->city}},{{$orders->state}},{{$orders->country}}</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-center shadow-sm border bg-white rounded my-3">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->orderitems as $order)
                            <tr>
                                <td><img src="{{asset('uploads/product/'.$order->products->photo)}}" width="60px" class="mx-auto" alt=""></td>
                                <td>{{$order->products->name}}</td>
                                <td>{{$order->product_qty}}</td>
                                <td class="text-success">{{number_format($order->product_price)}} EGP</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection