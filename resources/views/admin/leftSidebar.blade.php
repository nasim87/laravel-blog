@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-4">
        <span class="admin-title">Admin</span>
    </div>
    <div class="col-md-8">Welcome to Admin Panel</div>
</div><hr>
<div class="col-md-4 bg-light">
    <h1 class="bg-dark p-1 text-center text-light">Admin Panel</h1>
    <ul class="list-group">
        <li class="list-group-item"><a href="{{route('post.create')}}">Create post</a></li>
        <li class="list-group-item"> <a href="" >Show Post</a></li>
        <li class="list-group-item"><a href="">Show Comments</a></li>
        <li class="list-group-item"><a href="">Show Users</a></li>
    </ul>
</div>
        
@endsection
