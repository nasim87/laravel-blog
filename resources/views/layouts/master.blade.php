<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Eskimo - HTML Template</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- READING POSITION INDICATOR -->
    <progress value="0" id="eskimo-progress-bar">
        <span class="eskimo-progress-container">
            <span class="eskimo-progress-bar"></span>
        </span>
    </progress>
    <!-- SITE WRAPPER -->
    <div id="eskimo-site-wrapper">
       @yield('content')
       
    </div>

    <!-- JS FILES -->
    <script src="{{asset ( 'js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset ( 'js/bootstrap.min.js')}}"></script>
    <script src="{{asset ( 'js/salvattore.min.js')}}"></script>
    <script src="{{asset ( 'js/slick.min.js')}}"></script>
    <script src="{{asset ( 'js/panel.js')}}"></script>
    <script src="{{asset ( 'js/reading-position-indicator.js')}}"></script>
    <script src="{{asset ( 'js/custom.js')}}"></script>
    <!-- POST SLIDER -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('#eskimo-post-slider').slick({
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    fade: true
                });
            });
            $(window).on('load', function() {
                $('#eskimo-post-slider').css('opacity', '1');
                $('#eskimo-post-slider').parent().removeClass('eskimo-bg-loader');
            });
        })(jQuery);
    </script>
    <!-- POST CAROUSEL -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('#eskimo-post-carousel').slick({
                    infinite: false,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false,
                    slidesToShow: 3,
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }]

                });
                $('#eskimo-post-carousel').css('opacity', '1');
            });
        })(jQuery);
    </script>
</body>

</html>