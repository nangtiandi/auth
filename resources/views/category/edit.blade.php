@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                <form action=" {{route('category.update',$category->id)}} " method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{$category->category}}">
                        @error('category')
                            <small class="text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update Category">
                </form>
            </div>
            <div class="col-md-7">
                <div class="my-2">
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection