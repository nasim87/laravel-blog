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
            <h1><span>{{$post->title}}</span></h1>
            <div class="eskimo-page-title-meta">
                <div class="eskimo-author-meta">
                    By <a class="author-meta" href="author.html">Egemenerd</a>
                </div>
                <div class="eskimo-cat-meta">
                    In <a href="{{route('post.category',$post->category->id)}}">{{$post->category->name}}</a>
                </div>
                <div class="eskimo-date-meta">{!! date("F j, Y, g:i a") !!}</div>
            </div>
        </div>
        <!-- FEATURED IMAGE -->
        <div class="eskimo-featured-img">
            <img src="{{$post->image}}" width="100%" height="400" alt="{{$post->title}}" />
        </div>
        <!-- POST CONTENT -->
        <div class="eskimo-page-content">
            
            <p>{{strip_tags($post->description) }}</p>
           
            <div class="clearfix"></div>
            <!-- TAGS -->
            <div class="eskimo-meta-tags">
                <span class="badge badge-default"><a href="category.html">commodo</a></span>
                <span class="badge badge-default"><a href="category.html">culpa</a></span>
                <span class="badge badge-default"><a href="category.html">enim</a></span>
                <span class="badge badge-default"><a href="category.html">magna</a></span>
                <span class="badge badge-default"><a href="category.html">mandaremus</a></span>
                <span class="badge badge-default"><a href="category.html">quorum</a></span>
                <span class="badge badge-default"><a href="category.html">voluptatibus</a></span>
            </div>
            
            <!-- POST NAVIGATION -->

            @if($relatedPosts)
            @foreach ($relatedPosts as $rel_post )
            <div class="eskimo-post-nav-wrapper">
                <!-- PREVIOUS POST -->
                <div class="eskimo-post-nav-left-row">
                    <div class="eskimo-post-nav-table">
                        <a class="eskimo-post-nav" href="{{route('post.single',$rel_post->id)}}">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <div class="eskimo-post-nav-link">
                            <a class="eskimo-post-nav" href="{{route('post.single',$rel_post->id)}}">{{$rel_post->title}}</a>
                        </div>
                    </div>
                </div>
                <!-- NEXT POST -->
                <div class="eskimo-post-nav-right-row">
                    <div class="eskimo-post-nav-table">
                        <div class="eskimo-post-nav-link">
                            <a class="eskimo-post-nav" href="{{route('post.single',$rel_post->id)}}">{{$rel_post->title}}</a>
                        </div>
                        <a class="eskimo-post-nav" href="{{route('post.single',$rel_post->id)}}">
                            <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="clearfix"></div>
        <!-- COMMENTS -->
        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-localhost-8000-veeyczgywb.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
        {{-- <div id="eskimo-comments-wrapper">
            <div id="eskimo_comments_block" class="eskimo_comments_block">
                <h3 class="eskimo-title-with-border">
                    <span>Comments</span>
                </h3>
                <div class="eskimo_commentlist">
                    <!-- COMMENT 1 -->
                    <div class="eskimo_comment_wrapper">
                        <div class="eskimo_comments">
                            <div class="eskimo_comment">
                                <div class="eskimo_comment_inner">
                                    <div class="eskimo_comment_left">
                                        <img alt='' src='images/100x100.png' />
                                    </div>
                                    <div class="eskimo_comment_right">
                                        <div class="eskimo_comment_right_inner ">
                                            <cite class="eskimo_fn">
                                                <a href='author.html'>Egemenerd</a>
                                            </cite>
                                            <div class="eskimo_comment_links">
                                                <i class="fa fa-clock-o"></i> May 23, 2018 at 9:57 pm - <a href="#">Reply</a>
                                            </div>
                                            <div class="eskimo_comment_text">
                                                <p>Tempor cillum nostrud ex sunt expetendis et ipsum quis. Ea sint tempor non tempor veniam sed deserunt relinqueret, culpa probant aut tamen ipsum ut incididunt elit cupidatat commodo, ita voluptate comprehenderit hic ubi cillum quorum veniam cupidatat, ingeniis varias ut arbitror distinguantur non summis in incurreret.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COMMENT 1 REPLY -->
                        <div class="eskimo_comment_wrapper">
                            <div class="eskimo_comments">
                                <div class="eskimo_comment">
                                    <div class="eskimo_comment_inner">
                                        <div class="eskimo_comment_left">
                                            <img alt='' src='images/100x100.png' />
                                        </div>
                                        <div class="eskimo_comment_right">
                                            <div class="eskimo_comment_right_inner ">
                                                <cite class="eskimo_fn">
                                                    <a href='author.html'>Egemenerd</a>
                                                </cite>
                                                <div class="eskimo_comment_links">
                                                    <i class="fa fa-clock-o"></i> May 23, 2018 at 9:57 pm - <a href="#">Reply</a>
                                                </div>
                                                <div class="eskimo_comment_text">
                                                    <p>Incurreret elit ab excepteur praetermissum. In dolor expetendis cernantur a expetendis noster amet e quorum in fugiat cupidatat quo tamen minim sed ex quo quae irure aute. Aut ipsum mentitum, malis fabulas aut esse noster est se lorem praetermissum, quem admodum litteris.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COMMENT 2 -->
                    <div class="eskimo_comment_wrapper">
                        <div class="eskimo_comments">
                            <div class="eskimo_comment">
                                <div class="eskimo_comment_inner">
                                    <div class="eskimo_comment_left">
                                        <img alt='' src='images/100x100.png' />
                                    </div>
                                    <div class="eskimo_comment_right">
                                        <div class="eskimo_comment_right_inner ">
                                            <cite class="eskimo_fn">
                                                <a href='author.html'>Egemenerd</a>
                                            </cite>
                                            <div class="eskimo_comment_links">
                                                <i class="fa fa-clock-o"></i> May 23, 2018 at 10:12 pm - <a href="#">Reply</a>
                                            </div>
                                            <div class="eskimo_comment_text">
                                                <p>Probant qui sint expetendis sed quamquam esse aute ad dolor te voluptate quid hic cupidatat exercitation, fabulas a lorem ingeniis, litteris nulla veniam a sunt id arbitror de malis ne nam quem quid quo coniunctione.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="eskimo_comment_form" class="eskimo_comment_form">
            <h3>Leave a Reply</h3>
            <form action="single-post.html" method="post" id="commentform">
                <p><textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea></p>
                <input name="submit" type="submit" id="submit" class="btn btn-default" value="Post Comment" />
            </form>
        </div> --}}
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