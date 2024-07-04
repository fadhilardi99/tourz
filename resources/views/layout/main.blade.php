<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('/assets/logo2.png')}}" style="width:100%; height:100%;">
    <!-- Import Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/ionicons.min.css')}}" />
    <script src="https://kit.fontawesome.com/cf80c9fa58.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Black Han Sans' rel='stylesheet'>

    <!-- Import Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
</head>
<body>
    @include('layout.navbar')
    <main>
        @yield('content')
    </main>
    @include('layout.footer')
    <script type="text/javascript" src="{{asset('frontend/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/swipe.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $('.logo-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots:true,
            arrows:true,
            autoplay:true,
            autoplaySpeed:2000,
            infinite:true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite:true,
                    dots:true
                }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    {{--  <script type="text/javascript">
        var count = 0;
        var button = document.getElementById("button");
        var disp = document.getElementById("display");
          
        button.onclick = function () {
            count++;
            disp.innerHTML = count;
        }
     </script>  --}}
</body>
</html>