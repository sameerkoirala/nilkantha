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

            <!-- Page content -  member list  -->
            <div class="col-sm-8 page-content  " id="content">
            <!-- start of  members table -->
                <table class="table">
                    <tbody>

                    @foreach($members as $member)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $member->first_name .
                                    ( isset( $member->middle_name) ? (' ' . $member->middle_name) : ' ') .
                                    $member->last_name  }}</td>
                            <td>{{ $member->designation }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            <div class="pagination-wrapper text-center"> {!! $members->render() !!} </div>

        </div>

    </div>

</section>
