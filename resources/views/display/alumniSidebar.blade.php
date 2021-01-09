<div class="col-sm-3 vertical-nav bg-white " id="sidebar">

    <ul class="nav flex-column bg-white mb-0">
        @if($type !== 'courses' && $type !== 'admission')
            <li class="nav-item {{ $type === 'Alumni' ? 'sidebar-active' : '' }}">
                <a href="{{ url('/students/alumni') }}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>Featured Alumni</a>
            </li>
            <li class="nav-item {{ $type === 'alumni' ? 'sidebar-active' : '' }}">
                <a href="{{ url('/view/alumni') }}" class="nav-link text-dark bg-light"><i class="fa fa-chevron-right mr-3 "></i>Alumni List</a>
            </li>
        @endif


    </ul>

</div>

