@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <h3>Shopia</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card flex-row justify-content-around align-itemc-center p-3 bg-primary rounded shadow-sm my-2">
                    <i class="material-icons opacity-10 text-white mt-1">apps</i>
                    <h5 class="text-white mb-0">Products</h5>
                    <p class="text-white mb-0">Total: {{$totalProducts}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card flex-row justify-content-around align-itemc-center p-3 bg-info rounded shadow-sm my-2">
                    <i class="material-icons opacity-10 text-white mt-1">table_view</i>
                    <h5 class="text-white mb-0">Categories</h5>
                    <p class="text-white mb-0">Total: {{$totalCategories}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card flex-row justify-content-around align-itemc-center p-3 bg-warning rounded shadow-sm my-2">
                    <i class="material-icons opacity-10 text-white mt-1">shopping_cart</i>
                    <h5 class="text-white mb-0">Orders</h5>
                    <p class="text-white mb-0">Total: {{$totalOrders}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card flex-row justify-content-around align-itemc-center p-3 bg-secondary rounded shadow-sm my-2">
                    <i class="material-icons opacity-10 text-white mt-1">person</i>
                    <h5 class="text-white mb-0">Users</h5>
                    <p class="text-white mb-0">Total: {{$totalUsers}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection