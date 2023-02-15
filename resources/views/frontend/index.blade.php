@extends('layouts.app')
@section('title')
    Shopia
@endsection

@section('content')
    <header class="py-5">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6">
                    <div class="text">
                        <h1>SHOPIA <small>Online Store</small></h1>
                        <h2 class="mb-4">Get up to 30% off <br> New <span class="typed text-white"></span></h2>
                        <p>
                            A new Online Shop experience
                        </p>
                        <p class="mb-4">
                            We Provide Best Ecommerce Services All Over World
                        </p>
                        <form action="{{ url('search_product') }}" class="input-group mb-3 no-style-group" method="POST">
                            @csrf
                            <input required name="search" id="tags" type="search" class="form-control no-style"
                                placeholder="Search products">
                            <div class="input-group-prepend">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- services --}}
    <div class="services py-5">
        <div class="container">
            <h4 class="title">Services</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" data-wow-offset="100">
                    <div class="service">
                        <div class="service-label" data-num="1">
                            <div>
                                <h5>Fast delivery <i class="fas fa-truck"></i></h5>
                            </div>
                        </div>
                        <div class="service-txt">
                            <p>
                                Fast delivery through Shopia trucks wherever you are,
                                On-time every time,
                                Delight customers with speed, quality, & reliability
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" data-wow-offset="100">
                    <div class="service">
                        <div class="service-label" data-num="2" style="border-color: #64b5f6">
                            <div style="background-color:#64b5f6;">
                                <h5>Tracking order <i class="fas fa-box-open"></i></h5>
                            </div>
                        </div>
                        <div class="service-txt" style="border-color: #64b5f6">
                            <p>
                                You can follow the status of your order at any time to know its status,
                                Track a package with your tracking number 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s" data-wow-offset="100">
                    <div class="service">
                        <div class="service-label" data-num="3" style="border-color: var(--sub-color)">
                            <div style="background-color: var(--sub-color)">
                                <h5>Cash on delivery <i class="fas fa-wallet"></i></h5>
                            </div>
                        </div>
                        <div class="service-txt" style="border-color: var(--sub-color)">
                            <p>
                                COD shipping offers customers an advantage in that they have time to save and make a full payment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s" data-wow-offset="100">
                    <div class="service">
                        <div class="service-label" data-num="4" style="border-color: #ffb74d">
                            <div style="background-color: #ffb74d">
                                <h5>Online support <i class="fas fa-comments"></i></h5>
                            </div>
                        </div>
                        <div class="service-txt" style="border-color: #ffb74d">
                            <p>
                                The possibility of technical support through multiple means of communication, and you can chat with the Shopia admin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- categories --}}
    <img src="{{asset('images/wave1.svg')}}" class="w-100 d-block" alt="">
    <div class="categories pt-1 pb-3">
        <div class="container">
            <h4 class="title">Trending Categories</h4>
            <div class="owl-carousel owl-theme" id="categories">
                @if ($categories->count() > 0)
                    @foreach ($categories as $popularCat)
                        <div class="item text-center">
                            <a href="{{ url('view-category/' . $popularCat->slug) }}"
                                class="card bg-white rounded border my-2 cat-img d-block overflow-hidden">
                                <img src="{{ asset('uploads/category/' . $popularCat->photo) }}" alt=""
                                    >
                                <h5 class="mb-0"> <i class="fas fa-angle-double-right text-sm"></i> {{ $popularCat->name }}</h5>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
    <img src="{{asset('images/wave2.svg')}}" class="w-100 d-block" alt="">

    {{-- products --}}
    <div class="products py-4">
        <div class="container">
            <h4 class="title">Products</h4>
            <div class="owl-carousel owl-theme" id="products">
                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="item product_data">
                            <div class="product-card bg-white rounded shadow-sm border my-2 overflow-hidden">
                                <input type="hidden" value="{{ $product->id }}" class="product_id">
                                <input type="hidden" value="1" class="input-qty">
                                <a href="{{ url('add_to_wishlist') }}" data-toggle="tooltip" data-placement="left"
                                    title="Add to wishlist" class="add_to_wishlist"><img
                                        src="{{ asset('images/heart.png') }}" alt=""></a>
                                <a href="{{ url('add_to_cart') }}"data-toggle="tooltip" data-placement="left"
                                    title="Add to cart" class="add_to_cart"><img src="{{ asset('images/add-to-cart.png') }}"
                                        alt=""></a>
                                <div class="p-3"><img src="{{ asset('uploads/product/' . $product->photo) }}" alt="" class="main"></div>
                                <div class="content">
                                    @if ($product->trending == 1)
                                        <div class="badge bg-danger float-right text-white">Trending</div>
                                    @endif
                                    <h5>{{ $product->name }}</h5>
                                    <small class="tag">{{ $product->category->name }} <i class="fas fa-tag"></i>
                                    </small>
                                    <p class="my-2">{{ $product->small_description }}</p>
                                    <div class="mb-1">
                                        @php
                                            $stars_count = number_format($product->ratings->count());
                                            $stars = number_format($product->totalRatings());
                                        @endphp
                                        @if ($product->ratings->count() > 0)
                                            @php
                                                $stars_num = $stars / $stars_count;
                                            @endphp
                                        @else
                                            @php
                                                $stars_num = 0;
                                            @endphp
                                        @endif
                                        @for ($j = number_format($stars_num) + 1; $j <= 5; $j++)
                                            <i class="fas fa-star text-secondary"></i>
                                        @endfor
                                        @for ($i = 1; $i <= number_format($stars_num); $i++)
                                            <i class="fas fa-star text-warning"></i>
                                        @endfor
                                    </div>
                                    <div>
                                        <b class="text-success">{{ number_format($product->selling_price) }} EGP</b>
                                        <del class="text-danger text-sm">{{ number_format($product->original_price) }}
                                            EGP</del>
                                    </div>
                                    <div>
                                        <a class="shadow-sm view_details"
                                            href="{{ url('details/' . $product->category->slug . '/' . $product->slug) }}">View
                                            details</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    {{-- sale --}}
    <img src="{{asset('images/wave1.svg')}}" class="w-100 d-block" alt="">
    <div class="sale pt-4 pb-1">
        <img src="{{asset('images/sale.gif')}}" class="sale-gif" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="{{asset('images/sale.png')}}" class="w-100 d-block" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="txt">
                        <h1>
                            Weekly Sale on 60% Off All Products <br> <small class="custom-text1">With SHOPIA</small>
                        </h1>
                    </div>
                    <form action="" class="input-group mb-3 no-style-group" method="POST">
                        @csrf
                        <input required class="form-control no-style"
                            placeholder="Enter your email">
                        <div class="input-group-prepend">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('images/wave2.svg')}}" class="w-100 d-block" alt="">

    {{-- testimonials --}}
    <div class="testimonials py-5">
        <div class="container">
            <h4 class="title">Testimonials</h4>
            <div class="owl-carousel owl-theme" id="testimonials">
                <div class="item">
                    <div class="test my-4 text-center bg-white rounded shadow-sm border p-4">
                        <img src="{{asset('images/left-quotes.png')}}" class="quotes" alt="">
                        <div class="img">
                            <img src="{{asset('images/avatar.png')}}" alt="">
                        </div>
                        <p class="my-4 line-height text-secondary text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, eum.
                        </p>
                        <b class="d-block font-italic">Asmaa Saad</b>
                    </div>
                </div>
                <div class="item">
                    <div class="test my-4 text-center bg-white rounded shadow-sm border p-4">
                        <img src="{{asset('images/left-quotes.png')}}" class="quotes" alt="">
                        <div class="img">
                            <img src="{{asset('images/avatar.png')}}" alt="">
                        </div>
                        <p class="my-4 line-height text-secondary text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, eum.
                        </p>
                        <b class="d-block font-italic">Asmaa Saad</b>
                    </div>
                </div>
                <div class="item">
                    <div class="test my-4 text-center bg-white rounded shadow-sm border p-4">
                        <img src="{{asset('images/left-quotes.png')}}" class="quotes" alt="">
                        <div class="img">
                            <img src="{{asset('images/avatar.png')}}" alt="">
                        </div>
                        <p class="my-4 line-height text-secondary text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, eum.
                        </p>
                        <b class="d-block font-italic">Asmaa Saad</b>
                    </div>
                </div>
                <div class="item">
                    <div class="test my-4 text-center bg-white rounded shadow-sm border p-4">
                        <img src="{{asset('images/left-quotes.png')}}" class="quotes" alt="">
                        <div class="img">
                            <img src="{{asset('images/avatar.png')}}" alt="">
                        </div>
                        <p class="my-4 line-height text-secondary text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, eum.
                        </p>
                        <b class="d-block font-italic">Asmaa Saad</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- tracking --}}
     <img src="{{asset('images/wave1.svg')}}" class="w-100 d-block" alt="">
     <div class="tracking pt-1 pb-3">
        <img src="{{asset('images/location.gif')}}" class="d-block location" alt="">
         <div class="container">
             <h4 class="title">Tracking Order</h4>
             <ul class="p-0 list-unstyled">
                <li class="shadow-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" data-wow-offset="100">
                    <img src="{{asset('images/inventory-management.png')}}" alt="">
                    <div>
                        <h5 class="mb-0">Order Processed</h5>
                    </div>
                </li>
                <li class="shadow-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" data-wow-offset="100">
                    <img src="{{asset('images/checklist.png')}}" alt="">
                    <div>
                        <h5 class="mb-0">Order Designing</h5>
                    </div>
                </li>
                <li class="shadow-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s" data-wow-offset="100">
                    <img src="{{asset('images/fast-delivery.png')}}" alt="">
                    <div>
                        <h5 class="mb-0">Order Shipped</h5>
                    </div>
                </li>
                <li class="shadow-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s" data-wow-offset="100">
                    <img src="{{asset('images/order-tracking.png')}}" alt="">
                    <div>
                        <h5 class="mb-0">Order En Route</h5>
                    </div>
                </li>
                <li class="shadow-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="100">
                    <img src="{{asset('images/package-delivered.png')}}" alt="">
                    <div>
                        <h5 class="mb-0">Order Arrived</h5>
                    </div>
                </li>
            </ul>
         </div>
     </div>
     <img src="{{asset('images/wave2.svg')}}" class="w-100 d-block" alt="">

     {{-- banner --}}
     <div class="banner">
        <div class="container">
            <img src="{{asset('images/banner.png')}}" class="d-block mx-auto bannerimg" alt="">
        </div>
     </div>

@endsection
