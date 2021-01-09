@include('display.header')
@include('display.navbar')


<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-4">{{ isset($type) ? $type : 'Post With Files' }}</h3>

        <div class="row">

            <!-- start of vertical side navbar -->
            <div class="col-sm-3 vertical-nav bg-white " id="sidebar">

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
                    <p class="py-4">{{ $post->sub_title }}</p>

                    <p></p>
                    @if(!empty($post->image_path))
                        <td><img src=" {{ url($post->image_path)}}" width="100%" height="200px"/></td>
                    @endif
                    {!! $post->description !!}

                    @if(sizeof($post->files) > 0)
                        <table class="table">
                            <tbody>
                            @foreach ($post->files as $file)

                                <tr>
                                    <td>{{ $file->title }}</td>
                                    <td class="btn"><i class="fa fa-download"></i> <a href="{{ url($file->path) }}" target="_blank">Download</a></td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    @endif
                @endforeach
            </div>

        </div>

    </div>

</section>

@include('display.footer')
