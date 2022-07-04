{{-- @extends('layouts.app') --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>KairosCircle</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('displayPost') }}">
                    <h2>KairosCircle<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('displayPost') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog Entries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Post Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                @foreach ($tops as $top)
                    <div class="item">
                        <img src="{{ asset($top->file_path) }}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <a href="{{ route('readPost', [$top->id]) }}">
                                    <h4>{{ $top->title }}</h4>
                                </a>
                                <ul class="post-info">
                                    <li>Admin</li>
                                    <li>{{ $top->created_at }}</li>
                                    <li>{{ $counters }} Comments</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>KairosCircle</span>
                                <h4>Place an advert here with us</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a rel="nofollow" href="{{ route('contact') }}" target="_parent">Clck Here to
                                        begin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">

                            @foreach ($post as $post)
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="{{ asset($post->file_path) }}" alt=""
                                                style="height: 300px">
                                        </div>
                                        <div class="down-content">
                                            <span>Lifestyle</span>
                                            <a href="{{ route('readPost', [$post->id]) }}">
                                                <h4>{{ $post->title }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li>{{Auth::user()->role}}</li>
                                                <li>{{$post->created_at}}</li>

                                                <li>{{ $counters }} Comments</li>


                                            </ul>
                                            <p>{{ $post->description }}</p>
                                            <div class="post-options">
                                                <div class="col-12">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="facebook.com">Facebook</a>,</li>
                                                        <li><a href="twitter.com"> Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="blog.html">View All Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText"
                                            placeholder="type to search..." autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($recents as $recent)
                                                <li><a href="">
                                                        <h5>{{ $recent->title }}</h5>
                                                        <span>May 14, 2020</span>
                                                    </a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($cats as $cat)
                                                <li>-{{ $cat->category }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Most Read</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="{{ route('displayPost') }}">Blank for now</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

</body>

</html>
