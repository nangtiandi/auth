@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card my-2">
                    <div class="card-body">
                        <h2>{{$article->title}}</h2>
                        <p class="badge bg-info">{{$article->category->category}}</p>
                        <img src=" {{asset('storage/images/'.$article->photo)}} " alt="" class="img-fluid">
                        <p>{{$article->description}}</p>
                        <div class="d-flex">
                            <a href="{{route('article.create')}}" class="mx-1 btn btn-info">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection