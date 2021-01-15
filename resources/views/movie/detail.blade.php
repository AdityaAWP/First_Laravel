@extends('template/main')

@section('title','Movies')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$movie->release_date}}</h6>
              <p class="card-text">{{$movie->viewers}}</p>
              <p class="card-text">Created {{$movie->created_at->diffForHumans()}}</p>
              <div class="d-flex">
              <a href="/movie/{{$movie->id}}/edit" class="btn btn-primary">Update</a>
              <form action="/movie/{{$movie->id}}/delete" method="POST">
                @csrf
                @method('delete')
              <button type="submit" onclick="confirm('sure ?')" class="btn btn-danger ml-2">Delete</button>
              </form>
            </div>
            </div>
          </div>
    </div>
</div>

@endsection