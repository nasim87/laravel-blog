@extends('layouts.master')
@section('content')

 <!-- MAIN CONTAINER -->
 <main id="eskimo-main-container">
    <div class="container">
        <!-- SIDEBAR -->
        @include('frontend.partials.sidebar')
        <!-- TOP ICONS -->
        <ul class="eskimo-top-icons">
            <li id="eskimo-panel-icon">
                <a href="#eskimo-panel" class="eskimo-panel-open"><i class="fa fa-bars"></i></a>
            </li>
            <li id="eskimo-search-icon">
                <a id="eskimo-open-search" href="#"><i class="fa fa-search"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        <!-- PAGE TITLE -->
        <div class="eskimo-page-title">
            <h1 class="no-border text-center">Category: {{$category->name}}</h1>
        </div>
        <!-- BLOG POSTS -->
        <div class="eskimo-masonry-grid small-masonry">
            <div class="eskimo-three-columns" data-columns>
                <!-- POST 1 -->
                @foreach ($category->posts as $post )     
                <div class="card-masonry card-small">
                    <div class="card">
                        <a href="{{route('post.single',$post->id)}}">
                            <img class="card-vertical-img" src="{{$post->image}}" alt="{{$post->title}}" />   
                        </a>
                        <div class="card-border">
                            <div class="card-body">
                                <div class="card-category">
                                    <a href="{{route('post.single',$post->id)}}">{!! date("F j, Y, g:i a") !!}</a>
                                </div>
                                <h5 class="card-title">
                                    <a href="{{route('post.single',$post->id)}}">{{$post->title}}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- PAGINATION -->
        {{-- <div class="eskimo-pager">
            <ul class='pagination flex-wrap'>
                <li class='page-item active'><a class='page-link' href='#'>1</a></li>
                <li class='page-item'><a class='page-link' href='#'>2</a></li>
                <li class='page-item'><a class='page-link' href='#'>3</a></li>
                <li class='page-item'><a class='page-link' href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </div> --}}
        <div class="clearfix"></div>
    </div>
</main>
<!-- FOOTER -->
@include('frontend.partials.footer')
</div>
<!-- GO TO TOP BUTTON -->
<a id="eskimo-gototop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- SLIDE PANEL OVERLAY -->
<div id="eskimo-overlay"></div>
<!-- SLIDE PANEL -->
<div id="eskimo-panels">
    
@include('frontend.partials.slidePanel')
@include('frontend.partials.search')
@endsection