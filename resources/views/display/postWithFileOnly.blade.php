<!-- start of the academics section -->
<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-4">{{ isset($type) ? $type : 'Post With File Only'   }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
        @include('display.academicsSidebar')
        <!-- end of vertical side navbar -->

            <!-- middle space between side navbar and table -->
            <div class="col-sm-1"></div>

            <!-- Page content - nepali department  -->
            <div class="col-sm-8 page-content table-responsive " id="content">

                @if(isset($type))
                    @if($type === 'courses')
                        <p class="py-4">Here, you can view the courses of Schools</p>
                    @elseif($type === 'alumni')
                        <p class="py-4">Here, you can view our alumni student list for respective batches. </p>
                    @elseif($type === 'admission')
                        <p class="py-4"> Please download the admission related form</p>
                    @endif
                @endif

            {{--                <p class="py-4"> Please download the admission form for the respective grades and submit to the school with specified documents. The last day for form submission is December 30,2020 </p>--}}

            <!-- start of faculty members table -->
                <table class="table">
                    <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ url($post->file_path) }}" target="_blank"><button class="btn"><i class="fa fa-download"></i> {{ 'Download' }}</button></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="pagination-wrapper text-center"> {!! $posts->render() !!} </div>

            </div>

        </div>

    </div>

</section>




















