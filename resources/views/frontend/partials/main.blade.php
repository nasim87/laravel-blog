 <!-- MAIN CONTAINER -->
 <main id="eskimo-main-container">
    <div class="container">
        <!-- SIDEBAR -->
        @include('frontend.partials.sidebar')
        <!--End of SIDEBAR -->
        
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
        <!-- SLIDER -->
        <div class="eskimo-carousel-container eskimo-bg-loader">
            <div id="eskimo-post-slider" class="eskimo-slider">
                <!-- SLIDE 1 -->
                @if($sliderPost)
                @foreach ($sliderPost as $slider )    
                <div>
                    <a class="eskimo-slider-img" href="{{route('post.single',$slider->id)}}"></a>
                    <ul class="eskimo-slider-image-meta eskimo-image-meta-post">
                        <li><a href="{{route('post.single',$slider->id)}}"><span class="badge badge-default">{!! date("F j, Y, g:i a") !!}</span></a></li>
                        <li><a href="category.html"><span class="badge badge-default">{{$slider->category->name}}</span></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <img src="{{$slider->image}}" width="1200" height="600" alt="Ketchup Flavored Ice Cream!" />
                    <div class="eskimo-slider-desc">
                        <div class="eskimo-slider-desc-inner">
                            <h2 class="card-title">{{$slider->title}}</h2>
                            <p>{{strip_tags($slider->description)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <!-- BLOG POSTS -->
        <!-- POST 1 -->
        @if($posts )
        @foreach ($posts as $post )    
        <div class="card card-horizontal">
            <div class="card-body">
                <div class="card-horizontal-left">
                    <div class="card-category">
                        <a href="category.html">{{$post->category->name}}</a> </div>
                    <h3 class="card-title"><a href="{{route('post.single',$post->id)}}">{{$post->title}}</a></h3>
                    <div class="card-excerpt">
                        <p>{!! strip_tags($post->description) !!}...</p>
                    </div>
                    <div class="card-horizontal-meta">
                        <div class="eskimo-author-meta">
                            By <a class="author-meta" href="author.html">Egemenerd</a>
                        </div>
                        <div class="eskimo-date-meta">
                            <a href="{{route('post.single',$post->id)}}">
                                {!! date("F j, Y, g:i a") !!}</a>
                        </div>
                    </div>
                </div>
                <div class="card-horizontal-right" data-img="{{ $post->image }}">
                    <a class="card-featured-img" href="{{route('post.single',$post->id)}}"></a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <!-- VIEW ALL BUTTON -->
        <div class="eskimo-view-more">
            <a class="btn btn-default" href="blog.html">VIEW ALL POSTS</a>
        </div>
        
        <!-- DIVIDER -->
        <hr class="section-divider" />

        <!-- CAROUSEL -->
        <div class="eskimo-widget-title">
            <h3 class="eskimo-carousel-title"><span>POPULAR POSTS</span></h3>
        </div>

        <div class="eskimo-carousel-container">
            <div class="eskimo-carousel-view-more">
                <a href="blog.html">VIEW ALL</a>
            </div>

            <div id="eskimo-post-carousel" class="eskimo-carousel">
                <!-- CAROUSEL ITEM 1 -->
               @if($popularPost)
               @foreach ($popularPost as $popular )    
               <div>
                   <div class="card-masonry card-small">
                       <div class="card">
                           <a href="{{route('post.single',$popular->id)}}">
                               <img class="card-vertical-img" src="{{$popular->image}}" alt="Ketchup Flavored Ice Cream!" />   
                           </a>
                           <div class="card-border">
                               <div class="card-body">
                                   <div class="card-category">
                                       <a href="{{route('post.single',$popular->id)}}">
                                        {!! date("F j, Y, g:i a") !!}</a>
                                   </div>
                                   <h5 class="card-title"><a href="/">{{$popular->title}}!</a></h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               @endforeach
               @endif
            </div>
        </div>
    </div>
</main>