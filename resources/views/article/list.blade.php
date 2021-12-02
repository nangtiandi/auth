
@if (session('delete'))
<p class="alert alert-danger">{{session('delete')}}</p>
@endif
@foreach ($articles as $article)
    <div class="col-md-6">
        <div class="card my-2">
            <div class="card-body">
                <h2>{{$article->title}}</h2>
                <p class="badge bg-info">{{$article->category->category}}</p>
                <img src=" {{asset('storage/images/'.$article->photo)}} " alt="" class="img-fluid">
                <p>{{$article->description}}</p>
                <div class="d-flex">
                    <a href=" {{route('article.show',$article->id)}} " class="mx-1 btn btn-info">See More</a>
                    <a href=" {{route('article.edit',$article->id)}} " class="mx-1 btn btn-warning">Edit</a>
                    <form action=" {{route('article.destroy',$article->id)}} " method="POST">
                        @csrf
                        @method('delete')
                        <button class="mx-1 btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach