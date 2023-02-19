@extends('layouts.app')
@section('title')
    Cart
@endsection

@section('content')
    {{-- cart --}}
    <div class="cart-section">
        @if ($cart->count() > 0)
            <div class="cart py-4">
                <div class="container">
                    <div>
                        <a href={{ url('/') }}>Home</a> \ <a href={{ url('cart') }}>Cart</a>
                    </div>
                    <h4 class="title">Cart</h4>
                    <div class="table-responsive">
                        <table class="table text-center shadow-sm border bg-white rounded">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($cart as $cartItem)
                                    <tr class="product_data">
                                        <td><img width="50px" class="mx-auto"
                                                src="{{ asset('uploads/product/' . $cartItem->products->photo) }}" alt="">
                                        </td>
                                        <td>{{ $cartItem->products->name }}</td>
                                        <td class="text-success">{{ number_format($cartItem->products->selling_price) }} EGP</td>
                                        <td>
                                            @if ($cartItem->products->qty >= $cartItem->product_qty)
                                                <div class="input-group mt-3 mb-3 mx-auto" style="width:120px;">
                                                    <input type="hidden" value="{{ $cartItem->product_id }}" class="product_id">
                                                    <input type="hidden" value="{{ $cartItem->products->qty }}" class="productQty">
                                                    <a href="{{ url('update_qty') }}" class="update_qty" hidden></a>
                                                    <div class="input-group-prepend">
                                                        <button class="decrement-btn change_qty"><i
                                                                class="fas fa-minus fa-sm"></i></button>
                                                    </div>
    
                                                    <input type="text" value="{{ $cartItem->product_qty }}" disabled
                                                        class="bg-white mt-0 no-style form-control text-center input-qty">
                                                    <div class="input-group-append">
                                                        <button class="increment-btn change_qty">
                                                            <i class="fas fa-plus fa-sm"></i>
                                                        </button>
                                                    </div>
                                                    @php
                                                        $total += $cartItem->products->selling_price * $cartItem->product_qty;
                                                    @endphp
                                                @else
                                                    <div class="badge bg-danger text-white">Out of stock</div>
                                                </div>
                                            @endif
                                            
                                        </td>
                                        <td>
                                            @if ($cartItem->products->qty >= $cartItem->product_qty)
                                            <a href="{{ url('delete_cart_item') }}"
                                                class="delete_cart_item btn btn-sm btn-danger text-white">
                                                <i class="fas fa-trash-alt fa-sm"></i>
                                            </a>
                                            @else
                                            <a href="{{ url('all_categories') }}"
                                                class="btn btn-sm btn-secondary text-white">
                                                Shop Now
                                                <i class="fas fa-angle-right fa-sm"></i>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="my-3">
                        <hr>
                        <h5>Total price : <span class="text-success">{{ number_format($total) }} EGP</span></h5>
                        <a href="{{ url('checkout') }}" class="custom-btn1">
                            Proceed to checkout <i class="fas fa-angle-double-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="bg-white shadow-sm px-5 py-3 border rounded my-5 text-center">
                    <img src="{{asset('images/empty-cart.gif')}}" class="d-block mx-auto my-2" width="220px">
                    <h4 class="my-0">Cart is empty</h4>
                    <a href="{{url('all_categories')}}" class="btn btn-md bg-color text-white shadow-sm my-4">Continue shopping</a>
                </div>
            </div>
        @endif
    </div>
@endsection
