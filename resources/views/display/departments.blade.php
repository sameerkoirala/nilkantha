<section class="academics">

    <div class="container">

        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ 'About Us' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
        @include('display.aboutUsSidebar')
        <!-- end of vertical side navbar -->

            <!-- middle space between side navbar and table -->
            <div class="col-sm-1"></div>

            <!-- Page content - nepali department  -->
            <div class="col-sm-8 page-content  " id="content">

            {{--                <p class="py-4"> Please download the admission form for the respective grades and submit to the school with specified documents. The last day for form submission is December 30,2020 </p>--}}

            <!-- start of Department table -->
                <table class="table">
                    <tbody>

                    @foreach($departments as $department)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{--                                <td></td>--}}
                            {{--                                <td></td>--}}
                            <td><a href="{{ url('/academics/faculty') . '/' . $department->name  }}" class="text-dark ">{{ ucfirst($department->name) . ' Department' }} </a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            <div class="pagination-wrapper text-center"> {!! $departments->render() !!} </div>

        </div>

    </div>

</section>
