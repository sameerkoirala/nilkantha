<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Nilkantha School') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href={{ url('css/fixed.css') }}>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>

<header>
{{--    <div class="row">--}}

{{--        <!-- Top NavBar Starts: Displaying Address and Login, No Display on Mobile View smart-scroll -->--}}

{{--        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar top-bar">--}}
{{--            <div class="container">--}}
{{--                <ul class="list-inline mb-0 py-2" >--}}
{{--                    <li class="list-inline-item" >--}}
{{--                        <a href="#" style="color: white">--}}
{{--                            <span aria-hidden="true" class="fas fa-phone fa-sm" ></span>--}}
{{--                            {{ isset(Config::get('contact')->phone) ? Config::get('contact')->phone : '01-2038382' }}--}}

{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item" >--}}
{{--                        <a href="#" style="color: white">--}}
{{--                            <span aria-hidden="true" class="far fa-envelope fa-sm" ></span>--}}
{{--                            {{ isset(Config::get('contact')->email) ? Config::get('contact')->email : 'info@nilkantha.com' }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item" >--}}
{{--                        <a href="#" style="color: white">--}}
{{--                            <span aria-hidden="true" class="fas fa-map-marker-alt fa-sm" ></span>--}}
{{--                            {{ isset(Config::get('contact')->address) ? Config::get('contact')->address : 'Nilkantha, Dhading, Nepal' }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <!-- Collapse for mobile view -->--}}
{{--                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                  <span class="navbar-toggler-icon"></span>--}}
{{--              </button> -->--}}

{{--                <!-- Links -->--}}
{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Item for Top Nav -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}

{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ url('/login') }}" target="_blank"><button type="button" class="btn btn-outline-light text-light top-btn">Login</button></a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--    <!--End of Top Nav Bar-->--}}

{{--    <!--Start of Bottom / Main Nav Bar -->--}}
{{--    <div class="row">--}}

{{--        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar down-bar">--}}
{{--            <div class="container">--}}

{{--                <!-- Brand -->--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}" >--}}
{{--                    <strong>{{ isset(\Illuminate\Support\Facades\Config::get('configurations')->imape_path) ? \Illuminate\Support\Facades\Config::get('configurations')->image_path : \Illuminate\Support\Facades\Config::get('configurations')->title ?? 'Nilkantha School '}}</strong>--}}
{{--                </a>--}}

{{--                <!-- Collapse -->--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                        aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <!-- Links -->--}}
{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

{{--                    <!-- Left -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{ url('/') }}">Home--}}
{{--                                <span class="sr-only">(current)</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ url('/view/about_us') }}">About Us</a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item  dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Academics--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="{{ url('/academics/managements') }}">Management</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/academics/faculties') }}">Faculty Members</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/academics/others') }}">Other Staffs</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/students/alumni') }}">Alumni</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/alumni') }}">Students</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/courses') }}">Courses</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/admission') }}">Admission</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Notice--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/news') }}">News</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/notices') }}">Notices</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/events') }}">Events</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Articles--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/community') }}">Community</a>--}}
{{--                                <a class="dropdown-item" href="{{ url('/view/nccs') }}">NCCS Description</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}


{{--                        --}}{{--                    <li class="nav-item dropdown">--}}
{{--                        --}}{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        --}}{{--                            Gallery--}}
{{--                        --}}{{--                        </a>--}}

{{--                        --}}{{--                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                        --}}{{--                            <a class="dropdown-item" href="#">Action</a>--}}
{{--                        --}}{{--                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                        --}}{{--                            <div class="dropdown-divider"></div>--}}
{{--                        --}}{{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                        --}}{{--                        </div>--}}
{{--                        --}}{{--                    </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ url('/view/galleries') }}">Gallery</a>--}}
{{--                        </li>--}}


{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ url('/contacts') }}">Contact</a>--}}
{{--                        </li>--}}



{{--                    </ul>--}}




{{--                </div>--}}

{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
    <!--End of Bottom/ Main Nav Baar-->


    @include('display.navbar')
    <!--Carousel Start / Index Page Main View-->
    <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators -->
        <!-- <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
       -->
        <!-- The slideshow -->
        <div class="carousel-inner">
            @if( $posts['carousel']->isEmpty() )
                <div class="carousel-item active">
                    <img src="{{ url('img/testb.jpg') }}" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('img/testc.jpg') }}" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('img/testb.jpg') }}" alt="New York">
                </div>
            @else
                @foreach($posts['carousel'] as $key => $value)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ url('/') . '/' . $value['path'] }}" alt="{{ $value['title'] }} " width="1300px" height="550px">
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <!--Carousel End-->

</header>

<!-- Notification Section Start-->
<div class="container-fluid notice-box">
    <div class="row">
        <div class="container content">
            <marquee>
                @if( $posts['notices']->isEmpty() )
                    <a href="#"> Scholarship Notice</a>	&nbsp;&nbsp;
                    <a href="#"> Result of Grade X</a>	&nbsp;&nbsp;
                    <a href="#"> Dashain Vacation Notice</a>&nbsp;&nbsp;
                    <a href="#"> Result of Semester and Unit Test</a>	&nbsp;&nbsp;
                    <a href="#"> Dashain Vacation Notice</a>
                @else
                    @foreach( $posts['notices'] as $notice )&nbsp;&nbsp;
                        <a href="{{ url('/') . '/view/notices/' . $notice['id'] }}">{{ $notice['title'] }}</a>
                    @endforeach
                @endif
            </marquee>
        </div>
    </div>
</div>
<!-- Notification Section End-->

<!-- Starts Here Section Start-->
<div class="container-fluid size size_a">
    <div class="row">
        <div class="col-12 narrow mb-4 nil_starts">
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <span aria-hidden="true" class="far fa-file-alt" ></span>
                        <p class="lead">Scholarships</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/') . '/view/galleries' }}">
                        <span aria-hidden="true" class="far fa-images" ></span>
                        <p class="lead">Gallery</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/') . '/contacts' }}">
                        <span aria-hidden="true" class="fas fa-phone" ></span>
                        <p class="lead">Contact Us</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Starts Here Section Ends-->

<!-- Scrolling  Section Starts-->
<div id="resources" class="offset">
    <div class="fixed-background">
        <div class="row dark text-center ">
            @if($posts['message']->isEmpty())
                <div class="col-12 narrow2 mb-2">
                    <b id="text3">DIRECTOR'S SPEAKS</b><br>
                </div>


                <div class="col-md-8 scroll-content">
                    <!-- <h3 id="text2">1:6</h3>
                    <div class="heading-underline"></div>   -->
                    <p class="lead text-left pl-5">The idea of establishing a model school that would provide quality all-round education to meritorious students coming from every walk of life in an environment that fosters unity in diversity was conceived in 1964.  The idea was initiated by the Late King Mahendra in consultation with the then British Council representative, Lynndon Clough. <br>

                        After much planning and forethought, Budhanilkantha School came into existence in 1972. As a joint venture between the Government of the United Kingdom and the Government of Nepal....<br><br><button type="button" class="btn btn-outline-light">Read More</button>

                    </p>


                </div>


                <div class="col-md-4">
                    <img class="rounded-circle z-depth-2" alt="200x200" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                         data-holder-rendered="true">
                </div>
            @else
                @foreach( $posts['message'] as $message)
                    <div class="col-12 narrow2 mb-2">
                        <b id="text3" class="text-capitalize">{{ $message['title'] }}</b><br>
                    </div>


                    <div class="col-md-8 scroll-content">
                        <!-- <h3 id="text2">1:6</h3>
                        <div class="heading-underline"></div>   -->
                        <p class="lead text-left pl-5">{!!  substr($message['description'], 0, ( strlen($message['description']) > 521 ? 521 : strlen($message['description']) ) ) . '....' !!}
                            <br><br><a href="{{ url('/') . '/view/aboutUs/' . $message['id'] }}" class="btn btn-outline-light">Read More</a>
                        </p>
                    </div>

                    @if( strlen($message['image_path']) > 0 )
                        <div class="col-md-4">
                            <img class="rounded-circle z-depth-2" alt="{{ $message['title'] }}" src="{{ url('/') . '/' . $message['image_path'] }}"
                                 data-holder-rendered="true" width="200" height="200">
                        </div>
                    @endif
                @endforeach
            @endif
        </div>

{{--        <div class="fixed-wrap">--}}
{{--            <div class="fixed scroll-image">--}}

{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>
<!-- Scrolling Section Ends-->



<!-- News Section Starts-->
<div class="container-fluid">
    <div class="row news-section">
        <div class="col-12 mb-2 news-top">
            <b id="text3">HAPPENINGS AT NILKANTHA </b><br>
        </div>

        <div class="col-md-6 featured-news">
            <h5>Featured News</h5>

            @if($posts['featured']->isEmpty())
                <a href="#"><h6>Sixth-Graders create unique way to rember the 13 colonies</h6></a>

                <p>Nilkantha sixth-graders took their Lower School peers on an engaging journey through history recently when they taught them how to remember the order of the 13 colonies in a unique way.   ...
                </p>
                <button type="button" class="btn btn-outline-primary">Read More</button>
            @else
                @foreach($posts['featured'] as $news)
                    <a href="{{ url('/') . '/view/news/' . $news['id'] }}"><h6>{{ $news['title'] }}</h6></a>
                    <p>{!!  substr($news['description'], 0, ( strlen($news['description']) > 521 ? 521 : strlen($news['description']) ) ) !!} ....</p>
                    <a href="{{ url('/') . '/view/news/' . $news['id'] }}" class="btn btn-outline-light">Read More</a>
                @endforeach
            @endif


        </div>

        <div class="col-md-6 upcoming-events">
            <h5>Upcoming Events</h5>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators news-indicator">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @if($posts['events']->isEmpty())
                        <div class="carousel-item active event-heading">
                            <!--  <img class="d-block w-100" src="..." alt="First slide"> -->
                            <h6>LPC Montly Meeting</h6>
                            <div class="eventContent">
                                <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; 8:15 am - 9:15 am</a><br>
                                <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; Nov 20, 2020</a><br>
                                <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; Dhading, School Premesis</a>
                            </div>

                            <hr>

                            <h6>First Terminal Examination</h6>
                            <div class="eventContent">
                                <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; 9:00 am - 12:00 pm</a><br>
                                <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; Dec 15, 2020</a><br>
                                <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; Dhading, School Premesis</a>
                            </div>
                            <hr>


                        </div>
                        <div class="carousel-item">
                            <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
                            <h6>Weekly Test</h6>
                            <div class="eventContent">
                                <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; 8:15 am - 9:15 am</a><br>
                                <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; Nov 20, 2020</a><br>
                                <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; Dhading, School Premesis</a>
                            </div>

                            <hr>

                            <h6>Orientation</h6>
                            <div class="eventContent">
                                <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; 9:00 am - 12:00 pm</a><br>
                                <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; Dec 15, 2020</a><br>
                                <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; Dhading, School Premesis</a>
                            </div>
                            <hr>
                        </div>
                        <div class="carousel-item">
                            <!--       <img class="d-block w-100" src="..." alt="Third slide"> -->
                            <h6>Weekly Test</h6>
                            <div class="eventContent">
                                <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; 8:15 am - 9:15 am</a><br>
                                <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; Nov 20, 2020</a><br>
                                <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; Dhading, School Premesis</a>
                            </div>

                            <hr>

                            <h6>Orientation</h6>
                            <div class="eventContent">
                                <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; 9:00 am - 12:00 pm</a><br>
                                <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; Dec 15, 2020</a><br>
                                <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; Dhading, School Premesis</a>
                            </div>
                            <hr>
                        </div>
                    @else
                        @foreach($posts['events'] as $key => $value)
                            @if( $key % 2 === 0)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }} event-heading">
                            @endif
                                    <h6><a href="{{ url('/'). '/view/events/' . $value['id'] }}">{{ $value['title'] }}</a></h6>
                                    <div class="eventContent">
                                        <a><span aria-hidden="true" class="fas fa-clock" > </span> &nbsp; {{ $value['start_time'] . ' - ' . $value['end_time'] }}</a><br>
                                        <a><span aria-hidden="true" class="far fa-calendar-minus" > </span> &nbsp; {{ $value['date'] }}</a><br>
                                        <a><span aria-hidden="true" class="far fas fa-map-marker-alt" > </span> &nbsp; {{ $value['location'] }}</a>
                                    </div>
                                    <hr>
                            @if( ($key + 1) % 2 === 0)
                                </div>
                            @endif
                            @endforeach
                    @endif

                </div>

            </div>

        </div>

    </div>
</div>

<!-- News Section Ends-->

<!-- footer -->

@include('display.footer')
