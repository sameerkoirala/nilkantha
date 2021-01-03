<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-4">{{ isset($type) ? $type : 'Post WIth Gallery' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

                <p class="text-gray font-weight-bold  ">Related Links</p>

                <ul class="nav flex-column bg-white mb-0">

                </ul>
                <ul class="nav flex-column bg-white mb-0">

                    @foreach($recentPosts as $post)
                        <li class="nav-item ">
                            <a href="{{ url('/posts') . '/' . $type . '/' . $post['id']}}" class="nav-link text-dark bg-light {{ $postId == $post['id'] ? 'current' : ''}}"><i class="fa fa-chevron-right mr-3 "></i>{{ $post['title'] }}</a>
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
                    @if(isset($post->image_path))
                        <td><img src=" {{ url($post->image_path)}}" width="100%" height="200px"/></td>
                    @endif
                    {!! $post->description !!}
                    @if(isset($post->video_link))
                        <td>Video Link: </td><td><a href="{{ $post->video_link }}" target="_blank"><button class="btn"><i class="fa fa-download"></i> {{ $post->video_link }}</button></a></td>
                    @endif
                    <br/>
                    @if(isset($post->file_path))
                        <a href="{{ url($post->file_path) }}" target="_blank"><button class="btn"><i class="fa fa-download"></i> {{ $post->title }}</button></a>
                    @endif

                    @if(sizeof($post->images) > 0)
                        <h3>Photo Gallery</h3>

                        @for ($index = 0; $index < sizeof($post->images); $index++)
                            @if( $index % 3 === 0)
                                <div class="row">
                            @endif
                                    <div class="col-sm-4 news_article">
                                        <div class="card">
                                            <a href="#">
                                                <div class="image-wrapper image">
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
