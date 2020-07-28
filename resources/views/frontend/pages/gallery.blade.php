@extends('layouts.master')
@section('content')
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
            <h1><span>Galleries</span></h1>
            <p class="eskimo-page-subtitle">Here is a list of projects Galleries.</p>
        </div>
        <h2>Portfolio Galleries</h2>
        <p>Some project portfolio Galleries.</p>
        <!-- IMAGE GALLERY -->
        <div class="eskimo-masonry-grid eskimo-gallery">
            <div class="eskimo-three-columns" data-columns>
                <!-- GALLERY ITEM 1 -->
               @foreach ($images as $image )    
               <div class="eskimo-gallery-item">
                   <a href="#" data-featherlight="{{$image->image}}" class="eskimo-lightbox">
                       <img src="{{$image->image}}" alt="Portfolio" />
                   </a>
               </div>
               @endforeach
                
            </div>
        </div>
        <!-- DIVIDER -->
        <hr />
        <h2>Portfolio Galleries</h2>
        <p>Some Projects Portfolio Galleries.</p>
        <!-- IMAGE GALLERY -->
        <div class="eskimo-masonry-grid eskimo-gallery">
            <div class="eskimo-four-columns" data-columns>
                <!-- GALLERY ITEM 1 -->
               @foreach ($imageEight as $gall )    
               <div class="eskimo-gallery-item">
                   <a href="#" data-featherlight="{{$gall->image}}" class="eskimo-lightbox">
                       <img src="{{$gall->image}}" alt="" />
                   </a>
               </div>
               @endforeach
                
            </div>
        </div>
    </div>
</main>

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