@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-8">
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input type="text" name="title" class="form-control" id="postTitle" aria-describedby="emailHelp" placeholder="Enter Post Title">
            </div>
            <div class="form-group">
                <label for="postTitle">Select Category</label>
                <select name="category_id" class="form-control">
                   @foreach ($categories as $category )
                   <option value="{{$category->id}}">{{$category->name}}</option>
                   @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="postContent">Post Content</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="postTitle">Featured Image</label>
                <input type="file" name="image"class="form-control" id="postImage" aria-describedby="uploadImage" placeholder="Upload Image">
                </div>
            <button type="submit" class="btn btn-success">Crate Post</button>
        </form>
    </div>
</div>
@endsection
  