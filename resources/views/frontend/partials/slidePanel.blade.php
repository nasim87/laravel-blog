<aside id="eskimo-panel" class="eskimo-panel">
    <div class="eskimo-panel-inner">
        <!-- CLOSE SLIDE PANEL BUTTON -->
        <a href="#" class="eskimo-panel-close"><i class="fa fa-times"></i></a>
        <!-- AUTHOR BOX -->
        <div class="eskimo-author-box eskimo-widget">
            <div class="eskimo-author-img">
                <img src="{{asset ( 'https://scontent.fcgp3-1.fna.fbcdn.net/v/t1.0-9/59809751_2146742375413089_1631343404971458560_n.jpg?_nc_cat=105&_nc_sid=7aed08&_nc_eui2=AeG0zCjciqMqPR9QvpigbSEHcWmBQAoOwDpxaYFACg7AOkEOBbXIZg0lpgh-vjvvbgNDXwracKf5e0TglZJN5Pr8&_nc_ohc=2K-WfG40YaIAX_DSaXv&_nc_ht=scontent.fcgp3-1.fna&oh=0adab52affa1b4de8b7431c04434c32c&oe=5F45431C' ) }}" alt="JOHN DOE" />
            </div>
            <h3><span>Nasim Amjad</span></h3>
            <p class="eskimo-author-subtitle">WEB DESIGNER &amp; DEVELOPER</p>
            <p class="eskimo-author-description">I'm a Web Developer and Designer with a strong passion for UX/UI design. I have experience building websites, web applications, and brand assets. Contact me if you have any questions!</p>
            <div class="eskimo-author-box-btn">
                <a class="btn btn-default" href="{{route('about')}}">CONTACT ME</a>
            </div>
        </div>
        <!-- RECENT POSTS -->
        <div class="eskimo-recent-entries eskimo-widget">
            <h5 class="eskimo-title-with-border"><span>Recent Posts</span></h5>
            <ul>
                @foreach ($recentPosts as $r_post )    
                <li>
                    <a href="{{route('post.single',$r_post->id)}}">{{$r_post->title}}</a>
                    <span class="post-date">{!! date("F j, Y, g:i a") !!}</span>
                </li>
                @endforeach
               
            </ul>
        </div>
        <!-- CATEGORIES -->
        <div class="eskimo-categories eskimo-widget">
            <h5 class="eskimo-title-with-border"><span>Categories</span></h5>
            <ul>
                @foreach ($slideCats as $cat )    
                <li>
                    <a href="{{route('post.category',$cat->id)}}" title="The best restaurants, cafes, bars and shops in town.">{{$cat->name}}</a> <span class="badge badge-pill badge-default">5</span>
                </li>
                @endforeach
                
            </ul>
        </div>
        <!-- TAGS -->
        <div class="eskimo-widget">
            <h5 class="eskimo-title-with-border"><span>Tags</span></h5>
            <div class="eskimo-tag-cloud">
                <a href="category.html">aute<span>7</span></a>
                <a href="category.html">enim<span>7</span></a>
                <a href="category.html">commodo<span>7</span></a>
                <a href="category.html">voluptatibus<span>7</span></a>
                <a href="category.html">culpa<span>7</span></a>
                <a href="category.html">offendit<span>7</span></a>
                <a href="category.html">magna<span>7</span></a>
                <a href="category.html">quorum<span>7</span></a>
                <a href="category.html">mandaremus<span>7</span></a>
                <a href="category.html">ingeniis<span>7</span></a>
                <a href="category.html">tempor<span>7</span></a>
                <a href="category.html">summis<span>7</span></a>
                <a href="category.html">consequat<span>6</span></a>
                <a href="category.html">iudicem<span>6</span></a>
                <a href="category.html">expetendis<span>6</span></a>
                <a href="category.html">deserunt<span>6</span></a>
            </div>
        </div>
    </div>
</aside>