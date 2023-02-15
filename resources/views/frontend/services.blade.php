@extends('layouts.app')
@section('title')
    Services
@endsection

@section('content')
{{-- services --}}
<div class="services py-5">
    <div class="container">
        <h4 class="title">Services</h4>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" data-wow-offset="100">
                <div class="service">
                    <div class="service-label" data-num="1">
                        <div>
                            <h5>Fast delivery <i class="fas fa-truck"></i></h5>
                        </div>
                    </div>
                    <div class="service-txt">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas vitae assumenda, aut illo incidunt dolores.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" data-wow-offset="100">
                <div class="service">
                    <div class="service-label" data-num="2" style="border-color: #64b5f6">
                        <div style="background-color:#64b5f6;">
                            <h5>Tracking order <i class="fas fa-box-open"></i></h5>
                        </div>
                    </div>
                    <div class="service-txt" style="border-color: #64b5f6">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas vitae assumenda, aut illo incidunt dolores.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s" data-wow-offset="100">
                <div class="service">
                    <div class="service-label" data-num="3" style="border-color: var(--sub-color)">
                        <div style="background-color: var(--sub-color)">
                            <h5>Cash on delivery <i class="fas fa-wallet"></i></h5>
                        </div>
                    </div>
                    <div class="service-txt" style="border-color: var(--sub-color)">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas vitae assumenda, aut illo incidunt dolores.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s" data-wow-offset="100">
                <div class="service">
                    <div class="service-label" data-num="4" style="border-color: #ffb74d">
                        <div style="background-color: #ffb74d">
                            <h5>Online support <i class="fas fa-comments"></i></h5>
                        </div>
                    </div>
                    <div class="service-txt" style="border-color: #ffb74d">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas vitae assumenda, aut illo incidunt dolores.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection