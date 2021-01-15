@extends('template/main')

@section('title','Movies')

@section('content')
<div class="row">
    <div class="col-6">
        <h1>Movie Data</h1>
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
        @endif
        @if ($movies->count())
        <ul class="list-group">
            @foreach ($movies as $movie)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{Str::limit($movie->title,20)}} 
                <a href="/movie/{{$movie->id}}" class="badge badge-success">Detail</a>
            </li> 
            @endforeach
            <br>
            <a class="btn btn-primary" href="{{url('movie/create')}}">Add</a>
            <br>
            {{$movies->links()}}
        </ul>
        @else
            <h1>Don't Have Movie Data</h1>
        @endif

       
    </div>
</div>
@endsection