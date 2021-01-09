@include('display.header')

@include('display.navbar')


<!--  gallery -->
<section class="gallery">

    <div class="container">

        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
                <i class="fa fa-angle-right"></i>
                <a href="{{url("/view/galleries")}}">Gallery</a>
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ isset($galleryName) ? $galleryName . ' Gallery' : 'Image Gallery' }}</h3>
        <div>
            @for ($index = 0; $index < sizeof($images); $index++)
                @if( ($index) % 3 === 0)
                    <div class="row gallerys">
                        @endif
                        <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                            <div class="card">
                                <a href="{{ url( '/' ) . '/' . $images[$index]->path }}">
                                    <img src="{{ url( '/' ) . '/' . $images[$index]->path }}" class="card-img img-fluid">
                                </a>
                            </div>
                        </div>
                        @if( ($index + 1) % 3 === 0)
                    </div>
                @endif
            @endfor
        </div>
        <br />
        <div class="pagination-wrapper text-center"> {!! $images->render() !!} </div>
    </div>
</section>


@include('display.footer')
