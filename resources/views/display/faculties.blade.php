<section class="academics">

    <div class="container">

        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
                @if($type === 'faculties')
                    <i class="fa fa-angle-right"></i>
                    <a href="{{url("/academics/departments")}}">Departments</a>

                @endif
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ 'About Us' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
        @include('display.aboutUsSidebar')
        <!-- end of vertical side navbar -->
            <!-- middle space between side navbar and table -->
            <div class="col-sm-1"></div>

            <!-- Page content -  member list  -->
            <div class="col-sm-8 page-content  " id="content">
            <!-- start of  members table -->
                @for ($index = 0; $index < sizeof($members); $index++)
                    @if( ($index) % 3 === 0)
                        <div class="row">
                            @endif
                            <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                                <div class="card">
                                    <img src="{{ url($members[$index]->image_path) }}" class="img-fluid">
                                    <div class="text-content">
                                        <h6 class="m-2">{{ $members[$index]->first_name .
                                ( isset( $members[$index]->middle_name) ? (' ' . $members[$index]->middle_name) : ' ') .
                                $members[$index]->last_name  }}</h6>
                                        <p class="m-2">{{'Designation: ' . $members[$index]->designation}}</p>
                                        <p class="m-2">{{'Education: ' . $members[$index]->education}}</p>
                                    </div>
                                </div>
                            </div>
                            @if( ($index + 1) % 3 === 0)
                        </div>
                    @endif
                @endfor
            </div>
            <div class="pagination-wrapper text-center"> {!! $members->render() !!} </div>

        </div>

    </div>

</section>
