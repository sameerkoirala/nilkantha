@include('display.header')

@include('display.navbar')

<!-- start of the Featured Alumni section -->
<section class="alumni">

    <div class="container">
        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ 'Featured Alumni'   }}</h3>


        <div class="row">

            <!-- start of vertical side navbar -->
            @include('display.alumniSidebar')
            <!-- end of vertical side navbar -->


            <!-- Page content - profile of few best performing ex-students  -->
            <div class="col-sm-9 page-content  " id="content">

{{--                <p > Some of the best performing ex-students of the school.  </p>--}}

                @for ($index = 0; $index < sizeof($alumni); $index++)
                    @if( ($index) % 3 === 0)
                        <div class="row ">
                            @endif
                            <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto alumni_img">
                                <div class="card">
                                    <img src="{{ url($alumni[$index]->image_path) }}" class="img-fluid">
                                    <div class="text-content alumni_text">
                                        <h6>{{ $alumni[$index]->first_name .
                                ( isset( $alumni[$index]->middle_name) ? (' ' . $alumni[$index]->middle_name) : ' ') .
                                $alumni[$index]->last_name  }}</h6>
                                        <p>{{'Batch' . $alumni[$index]->batch}}<br>
                                            {{ $alumni[$index]->current_involvement }}</p>
                                    </div>
                                </div>
                            </div>
                            @if( ($index + 1) % 3 === 0)
                        </div>
                    @endif
                @endfor

            </div>
            <!-- end of page content -->
            <div class="pagination-wrapper text-center"> {!! $alumni->render() !!} </div>

        </div>

    </div>

</section>
<!-- end of Fetaured Alumni section -->


@include('display.footer')
