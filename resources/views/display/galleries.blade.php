@include('display.header')

@include('display.navbar')

<!--  gallery -->
<section class="gallery">

    <div class="container">

        <ul class="nav page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url("/")}}">Home</a>
            </li>
        </ul>
        <h3 class="text-uppercase py-4">{{ 'Gallery' }}</h3>
        <div>
            @for ($index = 0; $index < sizeof($posts); $index++)

                @if( $index % 3 === 0)
                    <div class="row">
                        @endif
                        <div class="col-sm-4 news_article">
                            <div class="card galleries_card">
                                <a href="{{ url('/') . '/view/gallery/' . $posts[$index]->id }}">
                                    <div class="image-wrapper image">
                                        <img src="{{ url('/') . '/' . $posts[$index]->image_path }}" class="img-fluid w-100"/>
                                    </div>
                                    <div class="card-inner news_data">
                                        <div class="header">
                                            <h2>{{ $posts[$index]->title }}</h2>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @if( ($index + 1) % 3 === 0)
                    </div>
                @endif

            @endfor
        </div>
        <div class="pagination-wrapper text-center"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
    </div>

</section>

@include('display.footer')
