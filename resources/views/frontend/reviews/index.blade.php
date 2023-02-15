@extends('layouts.app')
@section('title')
    Reviews
@endsection

@section('content')

{{-- add review --}}
<div class="add_review py-4">
    <div class="container">
        <h5 class="my-3 font-weight-bold">Review: {{$check_product->name}}</h5>
        <div class="card bg-white shadow-sm rounded border my-2 p-3">
            @if ($verified_purchase->count() > 0)
                <form action="{{'/add_review'}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $check_product->id }}" name="product_id" class="product_id">
                    <h5 class="font-weight-bold my-3">Add review</h5>
                    <textarea required name="review" class="p-2" placeholder="Give us a feedback about this product"></textarea>
                    <button type="submit" class="custom-btn1">Submit</button>
                </form>
                @else
                    <div class="alert alert-danger my-3 py-4 text-center" role="alert">
                        <h5 class="mb-7">You are not eligible to review this product</h5>
                        <p class="mb-0">
                            Only customers who purchased the product can write a review about the product.
                        </p>
                    </div>
            @endif
        </div>
    </div>
</div>
@endsection