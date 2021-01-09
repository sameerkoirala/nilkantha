<!DOCTYPE html>
<html>
<head>
    <title>Nilkantha School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(window).scroll(function()
        {

            $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
        });
    </script>
    <script >

        $(document).ready(function(){
            $('.gallerys').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });

        });
        //navbar scroll effect
        // $(window).scroll(function()
        //       {
        //
        //         $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
        //       });


    </script>
</head>
<body>
