<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-4">{{ isset($type) ? $type : 'Post' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                <p class="text-gray font-weight-bold  ">Related Links</p>

                <ul class="nav flex-column bg-white mb-0">

                    @foreach($recentPosts as $post)
                        <li class="nav-item ">
                            <a href="{{ url('/posts'). "/$type" . '/' . $post["id"]}}" class="nav-link text-dark current bg-light"><i class="fa fa-chevron-right mr-3 "></i>{{ $post["title"] }}</a>
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
                    <p></p>

                    @if(!empty($post->image_path))
                        <div class="img-wrapper" style="height: 200px;">
                       ` <td><img src=" {{ url("$post->image_path")}}" width="100%" height="180px"/></td>

                        </div>
                    @endif
                    <p></p>

                    {!! $post->description !!}
                    <p></p>

                    @if(!empty($post->file_path))
                        <button class="btn"><i class="fa fa-download"></i> {{ 'Download' }}</button>
                    @endif

                @endforeach

            </div>

        </div>

    </div>

</section>
