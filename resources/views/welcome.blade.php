<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            ul {
                list-style: none;
            }

            .full-height {
                /*height: 100vh;*/
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }


            .content {
                text-align: center;
                margin: 20px;
            }

            .intro {
                color: #b83955;
                font-weight: 600;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .title
            {
                background-color: white;
                color:black;
                display:block;

            }
            .carousel-caption {
                left: 0;
                right: 0;
                bottom:0
            }
            .carousel-item .title {
                background-color: #b83955;
                color: #ffffff;
            }
            .news-item {
                border-bottom: 1px solid #DADDD8;
                font-weight: bold;
            }

            .right-news-sec ul li {
                background-color: #b83955;
                color: #ffffff;
                margin-bottom: 16px;
                padding: 8px;
                font-weight: bold;
            }
            .right-news-sec h3 {
                color: #b83955;
            }
            ul.newsticker {
                margin:10px;
                list-style: none;
                font-weight: bold;
                font-size: 20px;
                vertical-align: middle;
                line-height: 52px;
            }
             .news-section {
                 background-color: #b83955;
                 color: #ffffff;
                 line-height: 44px;
                 vertical-align: middle;
             }
            .news-section h2 {
                background-color: #3b7296;
                line-height: 52px;
                text-align: center;
                vertical-align: middle;
                margin-top: 4px;
                margin-left: 4px;
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref">
            <div class="m-md-4">

                <div class="col-md-12 intro d-inline-block text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid float-left">

                    <h1>{{ $setting->org_name }}</h1>
                    <p>{{ $setting->address }}</p>
                    <p id="clock"></p>
                </div>
            </div>

            <div class="content">
                <div class="dispaly-section row">
                    <div class="left col-md-6">
                        @if($notices->count() > 0)
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                $i = 1;
                                @endphp
                                @foreach($notices as $notice)
                                <div class="carousel-item {{ ($i++ == 1) ? 'active': '' }}" data-interval="500">
                                    <img src="{{ asset('uploads/notices/'. '/'. $notice->image) }}" class="d-block w-100" alt="...">
                                    <div class="title carousel-caption d-none d-md-block">
                                        <h5 class="text-lg-center" >{{ $notice->title }}</h5>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if ($setting->video == 1)
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $video->video_id
                        }}?rel=0&controls=0&disablekb=1&autoplay=1&version=3&showinfo=0&loop=1"
                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @else
                        <div class="right-news-sec">
                            <h3>ताजा समाचार तथा सन्देश</h3>
                            @if($news->count() > 0)
                                <ul>
                                    @foreach($news as $item)
                                        <li>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        @endif
                    </div>
                </div>
                <div class="news-section row mt-4">
                    <h2 class="">सूचन तथा समाचार</h2>
                    <div class="d-block">
                        @if($news->count() > 0)
                            <ul class="newsticker float-left" style="display: inline-block">
                                @foreach($news as $item)
                                    <li>{{ $item->title }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('js/jquery.newsTicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.time-to.min.js') }}"></script>
        <script>
            $('.newsticker').newsTicker({
                row_height: 52,
                max_rows: 1,
                speed: 600,
                direction: 'up',
                duration: 4000,
                autostart: 1,
                pauseOnHover: 0
            });
        </script>
    </body>
</html>
