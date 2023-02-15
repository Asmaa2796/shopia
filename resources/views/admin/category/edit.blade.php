@extends('layouts.admin')
@section('content')
    <div class="card py-5 rounded shadow-sm bg-white p-4">
        <div class="card-header">
            <h3>Edit category</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('updateCategory/'.$category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-12">
                        <label class="mx-0">Name</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Slug</label>
                        <input type="text" name="slug" id="slug" required value="{{ $category->slug }}" class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Meta title</label>
                        <input type="text" name="meta_title" id="meta_title" required value="{{ $category->meta_title }}" class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Meta description</label>
                        <input type="text" name="meta_description" id="meta_description" value="{{ $category->meta_description }}" required class="form-control my-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mx-0">Meta keywords</label>
                        <input type="text" name="meta_keywords" id="meta_keywords" required value="{{ $category->meta_keywords }}" class="form-control my-2">
                    </div>
                    <div class="col-md-12">
                        <label class="mx-0">Description</label>
                        <textarea type="text" rows="3" name="description" id="description" required class="form-control my-2">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="d-block mx-0">Status</label>
                        <input type="checkbox" name="status" class="my-2" {{ $category->status == "1" ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6">
                        <label class="d-block mx-0">Popular</label>
                        <input type="checkbox" name="popular" class="my-2" {{ $category->popular == "1" ? 'checked' : ''}}>
                    </div>
                    @if ($category->photo)
                        <img class="my-2" src="{{asset("uploads/category/".$category->photo)}}" style="width:100px;" alt="">
                    @endif
                    <div class="col-md-12">
                        <label class="d-block mx-0">Update photo</label>
                        <input type="file" name="photo" class="my-2">
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection