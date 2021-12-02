@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action=" {{route('category.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="text" class="form-control" name="category">
                        @error('category')
                            <small class="text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create Category">
                </form>
            </div>
            <div class="col-md-6">
                <form action=" {{route('article.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                        @error('title')
                            <small class="text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-select">
                            @foreach (\App\Models\Category::all() as $category)
                                <option value=" {{$category->id}} ">  {{$category->category}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Photo Upload</label>
                        <input type="file" name="photo" id="" class="form-control">
                        @error('photo')
                            <small class="text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Description</label>
                        <textarea name="description" id="" rows="5" class="form-control"></textarea>
                        @error('description')
                            <small class="text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-info" value="Create Article">
                </form>
            </div>
        </div>
    </div>
@endsection