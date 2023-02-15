@extends('layouts.app')
@section('title')
    My Orders
@endsection

@section('content')
    {{-- orders --}}
    @if ($orders->count() > 0)
        <div class="orders py-4">
            <div class="container">
                <div>
                    <a href={{ url('/') }}>Home</a> \ <a href={{ url('my_orders') }}>Orders</a>
                </div>
                <h4 class="title">My Orders</h4>
                <div class="table-responsive">
                    <table class="table table-striped text-center shadow-sm border bg-white rounded">
                        <thead>
                            <tr>
                                <th>Tracking Number</th>
                                <th>Status</th>
                                <th>Total price</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->trackingNumber}}</td>
                                    <td><span class="{{$order->status == '0' ? 'text-primary' : 'text-success'}}">{{$order->status == '0' ? 'Pending' : 'Completed'}}</span></td>
                                    <td>{{number_format($order->total_price)}} EGP</td>
                                    <td>{{date('d-m-Y',strtotime($order->created_at))}}</td>
                                    <td><a class="custom-btn1 shadow-sm" href="{{url('order_details/'.$order->id)}}">View details</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    @else
        <div class="container">
            <div class="bg-white shadow-sm p-5 border rounded my-5 text-center">
                <img src="{{asset('images/no-orders.gif')}}" class="d-block mx-auto my-2" width="220px">
                <h4 class="my-0">No orders exists</h4>
            </div>
        </div>
    @endif
@endsection