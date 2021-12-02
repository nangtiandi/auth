@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                @if (session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                @if (session('update'))
                    <p class="alert alert-success">{{session('update')}}</p>
                @endif
                <form action=" {{route('category.store')}} " method="POST">
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
            <div class="col-md-7">
                <div class="my-2">
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection