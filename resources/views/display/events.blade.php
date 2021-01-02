<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>{{ $type ?? config('app.name', 'Nilkantha School') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/aboutUs.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>


<body>
<header>

    @include('display.navbar')
    <div class="bgimg"></div>
</header>


<!-- start of the academics section -->
<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-5">{{ isset($type) ? $type : 'Events' }}</h3>

        <div class="row">
            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                <p class="text-gray font-weight-bold  ">Related Links</p>

                <ul class="nav flex-column bg-white mb-0">

                    @foreach($recentPosts as $post)
                        <li class="nav-item ">
                            <a href="{{ url('/posts'). "/$type" . '/' . $post["id"]}}" class="nav-link text-dark current "><i class="fa fa-chevron-right mr-3 "></i>{{ $post["title"] }}</a>
                        </li>
                    @endforeach

                </ul>

            </div>
            <!-- end of vertical side navbar -->

            <!-- middle space between side navbar and table -->
            <div class="col-sm-1"></div>

            <!-- Page content - nepali department  -->
            <div class="col-sm-8 page-content  " id="content">

                @foreach($posts as $post)
                    <h5 class="text-gray text-uppercase">{{ $post->title }}</h5>
                    <!--  <p class="py-4">First Semester Exam - Grade I to X</p> -->

                    <p></p>
                    @if(isset($post->image_path))
                        <td><img src=" {{ url($post->image_path)}}" width="100%" height="200px"/></td>
                    @endif
                    <table class="table">
                        <tbody>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ $post->date }}</td>
                                </tr>
                                <tr>
                                    <td>Start Time</td>
                                    <td>{{ $post->start_time }}</td>
                                </tr><tr>
                                    <td>End Time</td>
                                    <td>{{ $post->end_time }}</td>
                                </tr><tr>
                                    <td>Location</td>
                                    <td>{{ $post->location }}</td>
                                </tr><tr>
                                    <td>Date</td>
                                    <td>{{ $post->date }}</td>
                                </tr>

                        </tbody>
                    </table>
                    {!! $post->description !!}

                    @if(isset($post->file_path))
                        <td><a href="{{ url($post->file_path)}}">Download</a></td>
                    @endif
                @endforeach


            </div>

        </div>

    </div>

</section>

<!-- footer -->

@include('display.footer')
