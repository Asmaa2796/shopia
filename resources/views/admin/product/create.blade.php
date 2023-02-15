@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <div class="card-header">
            <h3>Add product</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('insertProduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="mx-0">Name</label>
                        <input type="text" name="name" id="name" required class="form-control my-2">
                    </div>
                    <div class="col-md-12">
                        <label class="mx-0">Slug</label>
                        <input type="text" name="slug" id="slug" required class="form-control my-2">
                    </div>
                    <div class="col-md-12">
                        <label class="mx-0">Small description</label>
                        <input type="text" name="small_description" id="small_description" required class="form-control my-2">
                    </div>
                    <div class="col-md-12">
                        <label class="mx-0">Description</label>
                        <textarea type="text" rows="5" name="description" id="description" required class="form-control my-2"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Category</label>
                        <select name="category_id" id="category_id" class="form-control my-2">
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Original price</label>
                        <input type="number" name="original_price" id="original_price" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Selling price</label>
                        <input type="number" name="selling_price" id="selling_price" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Quantity</label>
                        <input type="number" name="qty" id="qty" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Tax</label>
                        <input type="number" name="tax" id="tax" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Meta title</label>
                        <input type="text" name="meta_title" id="meta_title" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Meta description</label>
                        <input type="text" name="meta_description" id="meta_description" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Meta keywords</label>
                        <input type="text" name="meta_keywords" id="meta_keywords" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="d-block mx-0">Status</label>
                        <input type="checkbox" name="status" class="my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="d-block mx-0">Trending</label>
                        <input type="checkbox" name="trending" class="my-2">
                    </div>
                    <div class="col-md-12">
                        <label class="d-block mx-0">Upload photo</label>
                        <input type="file" name="photo" accept="image/*" class="my-2">
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection