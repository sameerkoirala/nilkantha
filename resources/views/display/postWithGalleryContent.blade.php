<section class="academics">

    <div class="container">

        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ isset($type) ? $type : 'Post WIth Gallery' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                <ul class="nav flex-column bg-white mb-0">

                </ul>
                <ul class="nav flex-column bg-white mb-0">

                    @foreach($recentPosts as $post)
                        <li class="nav-item {{ $postId == $post['id'] ? 'sidebar-active' : ''}}">
                            <a href="{{ url('/posts') . '/' . $type . '/' . $post['id']}}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>{{ substr($post['title'], 0, 24) . '...' }}</a>
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
                    <p>{{ date('d-M-Y',strtotime($post->created_at))}}</p>

                    <p></p>
                    @if(!empty($post->image_path))
                        <td style="height: 300px !important; overflow: hidden;"><img src=" {{ url($post->image_path)}}" width="100%" height="auto"></td>
                        <p></p>
                    @endif
                    {!! $post->description !!}
                    @if(!empty($post->video_link))
                        <td>Video Link: </td><td><a href="{{ $post->video_link }}" target="_blank"></i> {{ $post->video_link }}</button></a></td>
                    @endif
                    <br/>
                    @if(!empty($post->file_path))
                        <a href="{{ url($post->file_path) }}" target="_blank"><button class="btn"><i class="fa fa-download"></i> {{ $post->title }}</button></a>
                    @endif

                    @if(sizeof($post->images) > 0)
                        <h3>Photo Gallery</h3>

                        @for ($index = 0; $index < sizeof($post->images); $index++)
                            @if( $index % 3 === 0)
                                <div class="row">
                            @endif
                                    <div class="col-sm-4 news_article">
                                        <div class="card postwithGallery_card">
                                            <a href="#">
                                                <div class="image-wrapper image_postGallery">
                                                    <img src="{{ url('/') . '/' . $post->images[$index]->path }}" class="img-fluid w-100"/>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            @if( ($index + 1) % 3 === 0)
                                </div>
                            @endif
                        @endfor

                    @endif
                @endforeach
            </div>

        </div>

    </div>

</section>
