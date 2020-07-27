@extends('admin.layouts.master')
@section('content')
<table class="table table-hover">
    <thead>
      <tr class="text-center">
        <th scope="col">#Id</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
      <tr class="text-center">
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>
            <img class="img-thumbnail" src="{{$post->image}}" width="100" height="100" alt="Image">
        </td>
        <td>
            <a href="" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-success">View</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection