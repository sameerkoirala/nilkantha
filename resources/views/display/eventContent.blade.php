@include('display.header')
@include('display.navbar')
<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-5">{{ isset($type) ? $type : 'Events' }}</h3>

        <div class="row">
            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                <ul class="nav flex-column bg-white mb-0">
                    @foreach($recentPosts as $post)
                        <li class="nav-item {{ $postId == $post['id'] ? 'sidebar-active' : ''}}">
                            <a href="{{ url('/posts'). "/$type" . '/' . $post["id"]}}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>{{ $post["title"] }}</a>
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
                        <td style="height: 300px !important; overflow: hidden;"><img src=" {{ url($post->image_path)}}" width="100%"/></td>
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
                        <a href="{{ url($post->file_path) }}" target="_blank"><button class="btn"><i class="fa fa-download"></i> {{ $post->title }}</button></a>
                    @endif
                @endforeach


            </div>

        </div>

    </div>

</section>
@include('display.footer')
