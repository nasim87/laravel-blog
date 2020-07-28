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
            <h1><span>Nasim Amjad</span></h1>
            <p class="eskimo-page-subtitle">Web Designer &amp; Developer</p>
        </div>
        <!-- ABOUT ME -->
        <div class="row">
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <p>
                    Hey, I’m Nasim. I’m a Web Developer working on the following technologies- Laravel, WordPress, js, jquery, VueJs, Bootstrap, Git, Nodejs, ReactJs, sql. I have also pure experience in Digital Marketing & Google Analytics, Social Media Marketing.
                </p>
                <p>
                    I love my city - Chittagong, Bangladesh. I am a fan of the latest technology. I love music and traveling around the world. I’m also interested in programming with a team. You can hire me with a click on the button above.
                .</p>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>PHP</span> 80%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>Laravel</span> 85%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>Javascript</span> 65%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>Vue Js</span> 90%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>WordPress</span> 80%</div>
                </div>
            </div>
            <div class="col-12 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
                <img src="images/600x600.png" alt="Jane Doe" class="img-fluid mx-auto d-block eskimo-img-shadow" />
            </div>
        </div>
        <!-- DIVIDER -->
        <hr />
        <!-- TABS -->
        <h2>EXPERIENCE &amp; EDUCATION</h2>
        <!-- ACCORDION -->
        <div id="mp-accordion-1" data-children=".mp-accordion-item" class="mp-accordion">
            <!-- ACCORDION ITEM 1 -->
            <div class="mp-accordion-item">
                <a class="mp-accordion-title" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-1" aria-expanded="false" aria-controls="mp-accordion-item-1">2014 to Present</a>
                <div id="mp-accordion-item-1" class="collapse show" role="tabpanel">
                    <div class="mp-accordion-content">
                        <h5> Developer - IT-Bangla Soft</h5>
                        Work as a freelancer developer, marketer and technical project adviser. 
                    </div>
                </div>
            </div>
            <!-- ACCORDION ITEM 2 -->
            <div class="mp-accordion-item">
                <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-2" aria-expanded="false" aria-controls="mp-accordion-item-2">2014 - 2010</a>
                <div id="mp-accordion-item-2" class="collapse" role="tabpanel">
                    <div class="mp-accordion-content">
                        <h5>Art Director - Designs Ltd</h5>
                        Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                    </div>
                </div>
            </div>
            <!-- ACCORDION ITEM 3 -->
            <div class="mp-accordion-item">
                <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-3" aria-expanded="false" aria-controls="mp-accordion-item-3">2010 - 2008</a>
                <div id="mp-accordion-item-3" class="collapse" role="tabpanel">
                    <div class="mp-accordion-content">
                        <h5>Web Designer - Freelance</h5>
                        Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                    </div>
                </div>
            </div>
            <!-- ACCORDION ITEM 4 -->
            <div class="mp-accordion-item">
                <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-4" aria-expanded="false" aria-controls="mp-accordion-item-4">2008 - 2004</a>
                <div id="mp-accordion-item-4" class="collapse" role="tabpanel">
                    <div class="mp-accordion-content">
                        <h5>University - Cambridge</h5>
                        Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                    </div>
                </div>
            </div>
        </div>
        <!-- DIVIDER -->
        <hr />
        <h2>PORTFOLIO</h2>
        <p>This is the Demo Images for project portfolio .</p>
        <!-- IMAGE GALLERY -->
        <div class="eskimo-masonry-grid eskimo-gallery">
            <div class="eskimo-three-columns" data-columns>
                <!-- GALLERY ITEM 1 -->
                @foreach ($portfolios as $portfolio )    
                <div class="eskimo-gallery-item">
                    <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                        <img src="{{$portfolio->image}}" class="img-thumbnail" width="900" height="600" alt="" />
                    </a>
                </div>
                @endforeach
               
            </div>
        </div>
        <!-- DIVIDER -->
        <hr />
        <h2>CONTACT ME</h2>
        <p>Contact Me if you have any queries or your custom package</p>
        <!-- CONTACT FORM -->
        <form id="ajax-form" action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p>
                        <label>Your Name</label><br />
                        <input type="text" name="name" id="sendername" class="form-control" required="required" maxlength="50" />
                    </p>
                    <p>
                        <label>Your Email</label><br />
                        <input type="email" name="email" id="senderemail" class="form-control" required="required" maxlength="50" />
                    </p>
                    <p>
                        <label>Phone Number</label><br />
                        <input type="text" name="phone" id="senderphone" class="form-control" maxlength="50" />
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <p>
                        <label>Your Message</label><br />
                        <textarea name="message" id="sendermessage" required="required" class="form-control form-fixed-height"></textarea>
                    </p>
                    <button id="sendbutton" type="submit" class="btn btn-lg w-100">Send Message</button>
                </div>
            </div>
        </form>
        <div id="form-messages"></div>
    </div>
</main>
@endsection