@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Your Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action=" {{route('home.update')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <img src=" {{asset('storage/img/'.Auth::user()->photo)}} " alt="" width="25%" class="my-2">
                                <label for="" class="form-label">Photo Upload</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" value="{{Auth::user()->phone}}">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Upload Profile">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection