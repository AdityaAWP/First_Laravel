@extends('template/main')

@section('title','Data Buku')
@section('head')
<style>
  body{
    background-color: #434547;
    color: white;
  }
</style>
@endsection
@section('content')
    <div class="row">
        <div class="col-10">
            <h1>Books Data</h1>
            
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($book as $item)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$item->title}}</td>
                      <td>{{$item->author}}</td>
                      <td>{{$item->price}}</td>
                      <td>
                          <a href="" class="badge badge-primary">Update</a>
                          <a href="" class="badge badge-danger">Delete</a>
                      </td>
                    </tr>    
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection