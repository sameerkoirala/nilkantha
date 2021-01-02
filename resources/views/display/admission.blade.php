<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>{{ $type ?? config('app.name', 'Nilkantha School') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style_admissionform.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>


<body>

<header>

    @include('display.navbar')
    <div class="bgimg"></div>
</header>

<!-- start of the academics section -->
<section class="admissionform">

    <div class="container">

        <h3 class="text-uppercase py-5">{{ isset($type) ? $type : 'Admissions' }}</h3>


        <div class="row">

            <!-- start of vertical side navbar -->
            @include('display.admissionSidebar')
            <!-- end of vertical side navbar -->

            <!-- middle space between side navbar and table -->
            <div class="col-sm-1"></div>

            <!-- Page content - nepali department  -->
            <div class="col-sm-8 page-content table-responsive" id="content">

                <h5 class="text-gray text-uppercase">{{ isset($type) ? $type : 'Admission' }} Related Form</h5>
                <p class="py-4"> Please download the admission related form</p>

                <!-- start of faculty members table -->
                <table class="table">
                    <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ url($post->file_path) }}" target="_blank">Download</a></td>
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



















