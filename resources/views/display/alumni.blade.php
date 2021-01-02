<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>{{ $type ?? config('app.name', 'Nilkantha School') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/AlumniStudentList.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>


<body>

<header>

    @include('display.navbar')
    <div class="bgimg"></div>
</header>

<!-- start of the Alumni student's list section -->
<section class="studentlist">

    <div class="container">

        <h3 class="text-capitalize">{{ isset($type) ? $type : 'Alumni' }}</h3>


        <div class="row">

            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                <p class="text-gray font-weight-bold  ">Related Links</p>

                <ul class="nav flex-column bg-white mb-0">

                    <li class="nav-item ">
                        <a href="{{ url('/students/alumni') }}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>Featured Alumni </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{ url('/view/alumni') }}" class="nav-link text-dark bg-light current"><i class="fa fa-chevron-right mr-3 "></i>Alumni List</a>
                    </li>

                </ul>

            </div>
            <!-- end of vertical side navbar -->

            <!-- middle space between side navbar and table -->
            <div class="col-sm-1"></div>

            <!-- Page content - alumni student list for disfferent batches  -->
            <div class="col-sm-8 page-content  " id="content">

                <h5 class="text-gray text-uppercase">Alumni Student List</h5>
                <p class="py-4">Here, you can view our alumni student list for respective batches. </p>


                <table class="table">
                    <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ url($post->file_path) }}" target="_blank">View</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="pagination-wrapper text-center"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>

        </div>

    </div>

</section>

@include('display.footer')

