@extends('layouts.master')
@section('content')

@include('frontend.partials.main')
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