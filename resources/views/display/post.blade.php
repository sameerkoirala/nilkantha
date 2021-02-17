<section class="academics">

    <div class="container">
        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ isset($type) ? ( ( sizeof( explode('_',$type) ) > 1 ) ? explode('_',$type)[0] . ' ' . explode('_',$type)[1] : $type ) : 'Post' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->

            @if($type === 'about_us')
                @include('display.aboutUsSidebar')
            @else
                <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                    <ul class="nav flex-column bg-white mb-0">

                        @foreach($recentPosts as $post)
                            <li class="nav-item {{ $postId == $post['id'] ? 'sidebar-active' : ''}}">
                                <a href="{{ url('/posts'). "/$type" . '/' . $post["id"]}}" class="nav-link text-dark current bg-light"><i class="fa fa-chevron-right mr-3 "></i>{{ $post["title"] }}</a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            @endif

            <!-- end of vertical side navbar -->

            <!-- middle space between side navbar and table -->
            <!-- <div class="col-sm-1"></div> -->

            <!-- Page content - nepali department  -->
            <div class="col-sm-8 page-content" id="content">

                @foreach($posts as $post)

                    <h5 class="text-gray text-uppercase">{{ $post->title }}</h5>
                    <p></p>

                    @if(!empty($post->image_path))
                        <div class="img-wrapper" style="height: 300px !important; overflow: hidden;">
                        <td><img src=" {{ url("$post->image_path")}}" width="100%" height="auto" /></td>

                        </div>
                    @endif
                    <p></p>

                    {!! $post->description !!}
                    <p></p>

                    @if(!empty($post->file_path))
                        <a href="{{ url($post->file_path) }}" target="_blank"><button class="btn"><i class="fa fa-download"></i> {{ 'Download' }}</button></a>
                    @endif

                @endforeach

            </div>

        </div>

    </div>

</section>
