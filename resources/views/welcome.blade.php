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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row row1">
        <div class="col-xl-9">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-center h1" style="font-style:italic;"><b>
                            <marquee direction="left to right"> HOT NEWS/OFFER</marquee>
                        </b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-wrap slider-wrap1">
                        <div class="single-slide" id="slide-1" style="background-image: url(photo/slide1.jpeg);">
                            <div class="slider-text-inner text-center animated fadeInup">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-2" style="background-image: url(photo/slide2.jpeg);">
                            <div class="slider-text-inner text-center">

                            </div>
                        </div>
                        <div class="single-slide" id="slide-3" style="background-image: url(photo/slide3.jpeg);">
                            <div class="slider-text-inner text-center">


                            </div>
                        </div>
                        <div class="single-slide" id="slide-4" style="background-image: url(photo/slide4.jpg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-5" style="background-image: url(photo/slide5.jpg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 7px;">
                <div class="col-xl-2 ">
                    <h5 class="text-center h2" style="font-size: 28px;">Notice</h5>
                </div>
                <div class="col-xl-10">
                    <h4 class="text-center ter"><b>
                            <marquee direction="left to right">Aplus Engineering service give you a opportunity to work
                                softwarespinel tach give you a opportunity to work software
                            </marquee>
                        </b></h4>
                </div>
            </div>


        </div>
        <div class="col-xl-3 row2">
            <div class="row">
                <div class="col-xl-12">
                    <div class="clock border">
                        <p id="txt" style="font-size: xx-large;"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-wrap slider-wrap2 he">
                        <div class="single-slide" id="slide-1" style="background-image: url(photo/tool4.jpeg);">
                            <div class="slider-text-inner text-center animated fadeInup">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-2" style="background-image: url(photo/tool1.jpeg);">
                            <div class="slider-text-inner text-center">

                            </div>
                        </div>
                        <div class="single-slide" id="slide-3" style="background-image: url(photo/tool5.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-4" style="background-image: url(photo/t2.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-5" style="background-image: url(photo/b3.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-wrap slider-wrap2 he">
                        <div class="single-slide" id="slide-1" style="background-image: url(photo/tool5.jpeg);">
                            <div class="slider-text-inner text-center animated fadeInup">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-2" style="background-image: url(photo/b3.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-3" style="background-image: url(photo/t2.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-4" style="background-image: url(photo/tool1.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-5" style="background-image: url(photo/tool4.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-wrap slider-wrap2 he">
                        <div class="single-slide" id="slide-1"
                             style="background-image: url(photo/b3.jpeg); width: 100%">
                            <div class="slider-text-inner text-center animated fadeInup">

                            </div>
                        </div>
                        <div class="single-slide" id="slide-2" style="background-image: url(photo/tool5.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-3" style="background-image: url(photo/t2.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-4" style="background-image: url(photo/tool1.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                        <div class="single-slide" id="slide-5" style="background-image: url(photo/tool4.jpeg);">
                            <div class="slider-text-inner text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
