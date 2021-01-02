<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>{{ $type ?? config('app.name', 'Nilkantha School') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/contactUs.css') }}">
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

        <h3 class="text-uppercase py-5">Admission</h3>
        <form method="POST" action="{{ url('/contacts/sendMail') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>

{{--                <div class="col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                        <label> Subject </label>--}}
{{--                        <input type="text" class="form-control" name="subject" placeholder="Subject">--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-md-12">
                    <div class="form-group">
                        <label> Message </label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Enter your query"></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>




</section>
<hr class="my-4">

<div class="container">
  <div class="row">
    <div class="col-md-12">
        @if(!$contacts->isEmpty())
            @foreach($contacts as $contact)
            <div class="row">
                <div class="col-sm-4">{{ $contact->address }}</div>
                <div class="col-sm-4">{{ $contact->phone }}</div>
                <div class="col-sm-4">{{ $contact->email }}</div>
            </div>
            <div>
                {!! $contact->googleMapUrl !!}
            </div>
            @endforeach
        @endif

    </div>



  </div>
</div>
@include('display.footer')
