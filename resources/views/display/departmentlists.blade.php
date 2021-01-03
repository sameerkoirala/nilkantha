@foreach($departments as $department)

    <li class="nav-item ">
        <a href="{{ url('/academics/faculty') . '/' . $department->name }}" class="nav-link text-dark "><i class="fa fa-chevron-right mr-3 "></i>{{ ucfirst($department->name) }} </a>
    </li>
@endforeach
