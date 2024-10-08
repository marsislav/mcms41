<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/LineIcons.2.0.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/main.css')}}">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="preloader" style="opacity: 0; display: none;">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--header-->
@include('includes.header')
<!--/header-->

<section class="page-banner-section pt-75 pb-75 img-bg"
         style="background-image: url({{ asset('app/img/bg/common-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="banner-content">
                    <h2 class="text-white">{{ $pfcategory->name }}</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Portfolio</li>
                                <li class="breadcrumb-item active" aria-current="page">{{$pfcategory->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section pt-130">
    <div class="container">
        <div class="row">
            @foreach($pfcategory->pfposts as $pfpost)
                <div class="col-xl-3">
                    <div class="row">
                        <div class="left-side-wrapper">
                            <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s"
                                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="blog-img">
                                    <a href="{{ route('pfpost.single', ['slug' => $pfpost->slug ]) }}">
                                        <img src="{{ asset($pfpost->featured) }}" alt="{{ $pfpost->title }}">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <a href="{{ route('pfpost.single', ['slug' => $pfpost->slug ]) }}">
                                        <h4 class="case-item__title">{{ $pfpost->title }}</h4>
                                    </a>
                                    {!! Illuminate\Support\Str::limit($pfpost->content, 150, '...') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="description mb-60">{!! $pfcategory->description !!}</div>
    </div>
</section>

<section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title mb-30">
                    <span class="text-white wow fadeInDown" data-wow-delay=".2s"
                          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Questions?</span>
                    <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Ask me!</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                @include('includes.form')
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('includes.footer')
<!-- End Footer -->

<a href="#" class="scroll-top">
    <i class="lni lni-arrow-up"></i>
</a>
<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('app/js/contact-form.js') }}"></script>
<script src="{{ asset('app/js/count-up.min.js') }}"></script>
<script src="{{ asset('app/js/tiny-slider.js') }}"></script>
<script src="{{ asset('app/js/isotope.min.js') }}"></script>
<script src="{{ asset('app/js/glightbox.min.js') }}"></script>
<script src="{{ asset('app/js/wow.min.js') }}"></script>
<script src="{{ asset('app/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
</body>
</html>
