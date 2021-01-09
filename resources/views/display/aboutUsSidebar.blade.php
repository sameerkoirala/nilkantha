<div class="col-sm-3 vertical-nav bg-white " id="sidebar">

    <br />
    <ul class="nav flex-column bg-white mb-0">

        <li class="nav-item ">
            <a class="nav-link text-dark bg-light" href="#about_us_list" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="about_us_list"><i class="fa fa-chevron-right mr-3 "></i>Messages</a>

            <div class="collapse" id="about_us_list">
                <ul class="nav flex-column bg-white mb-0">
                    @foreach($recentPosts as $post)

                        <li class="nav-item {{ ( isset($postId) && ( $postId == $post['id']) ) ? 'sidebar-active' : ''}}">
                            <a href="{{ url('/posts'). "/about_us" . '/' . $post["id"]}}" class="nav-link text-dark current bg-light"><i class="fa fa-chevron-right mr-3 "></i>{{ $post["title"] }}</a>
                        </li>

                    @endforeach
                </ul>
            </div>



        </li>

        <li class="nav-item {{ $type === 'managements' ? 'sidebar-active' : '' }}">
            <a href="{{ url('/academics/managements') }}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>Managements</a>
        </li>

        <li class="nav-item {{ $type === 'faculties' || $type === 'departments' ? 'sidebar-active' : '' }}">
            <a href="{{ url('/academics/departments') }}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>Faculties</a>
        </li>


        <li class="nav-item {{ $type === 'others' ? 'sidebar-active' : '' }}">
            <a href="{{ url('/academics/others') }}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>Other Staffs</a>
        </li>

    </ul>

</div>
