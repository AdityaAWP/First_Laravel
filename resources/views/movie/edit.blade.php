@extends('template/main')

@section('title','Add Movie')

@section('content')
<div class="row">
    <div class="col-6">
        <form action="/movie/{{$movie->id}}/edit" method="POST">
            @method('patch')
            @csrf
              <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value="{{ old('title') ?? $movie->title}}" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    @error('title')
                        <div class="invalid-feedback">
                              {{$message}}
                        </div>
                    @enderror
              </div>
              <div class="form-group">
                    <label for="release_date">Release Date</label>
                    <input type="text" value="{{ old('release_date') ?? $movie->release_date}}" class="form-control  @error('release_date') is-invalid @enderror" id="release_date" name="release_date">
                    @error('release_date')
                    <div class="invalid-feedback">
                          {{$message}}
                    </div>
                    @enderror
              </div>
              <div class="form-group">
                    <label for="viewers">Viewers</label>
                    <input type="text"value="{{ old('viewers') ?? $movie->viewers}}"class="form-control  @error('viewers') is-invalid @enderror" id="viewers" name="viewers">
                    @error('viewers')
                    <div class="invalid-feedback">
                          {{$message}}
                    </div>
                    @enderror
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
    
@endsection