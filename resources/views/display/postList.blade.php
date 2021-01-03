@include('display.header')
@include('display.navbar')
<!-- start of the Alumni student's list section -->
<section class="academics">

    <div class="container">

        <h3 class="text-uppercase py-5">{{ isset($type) ? $type : 'Post WIth Gallery' }}</h3>


        <div class="row news_content">
            <!--start of News Card-->
            @for ($index = 0; $index < sizeof($posts); $index++)
                @if( $index % 3 === 0)
                    <div class="row">
                        @endif
                        <div class="col-sm-4 news_article">
                            <div class="card">
                                <a href="{{ url('/posts') . '/'. $type . '/' . $posts[$index]->id }}">
                                    <div class="image-wrapper image">
                                        <img src="{{ url('/') . '/' . $posts[$index]->image_path }}" class="img-fluid w-100"/>
                                    </div>
                                    <div class="card-inner news_data">
                                        <div class="header">
                                            <h2>{{ $posts[$index]->title }}</h2>

                                        </div>
                                        <div class="content news_date">
                                            <p>Published Date: {{ date('d-M-Y',strtotime($posts[$index]->created_at))}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @if( ($index + 1) % 3 === 0)
                    </div>
                @endif
            @endfor
{{--            <div class="col-sm-4 news_article">--}}
{{--                <div class="card">--}}
{{--                    <a href="/views/news.php">--}}
{{--                        <div class="image-wrapper image">--}}
{{--                            <img src="https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364" class="img-fluid w-100"/>--}}
{{--                        </div>--}}
{{--                        <div class="card-inner news_data">--}}
{{--                            <div class="header">--}}
{{--                                <h2>NILKANTHA SECONDARY SCHOOL OFFERS QUALITY EDUCATION</h2>--}}

{{--                            </div>--}}
{{--                            <div class="content news_date">--}}
{{--                                <p>3rd Jan 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- News Card 2-->--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="card">--}}
{{--                    <a href="#">--}}
{{--                        <div class="image">--}}
{{--                            <img src="https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364g" />--}}
{{--                        </div>--}}
{{--                        <div class="card-inner news_data">--}}
{{--                            <div class="header">--}}
{{--                                <h2>NILKANTHA SECONDARY SCHOOL </h2>--}}

{{--                            </div>--}}
{{--                            <div class="content news_date">--}}
{{--                                <p>3rd Jan 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- News Card 3-->--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="card">--}}
{{--                    <a href="#">--}}
{{--                        <div class="image">--}}
{{--                            <img src="https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364" />--}}
{{--                        </div>--}}
{{--                        <div class="card-inner news_data">--}}
{{--                            <div class="header">--}}
{{--                                <h2>Title</h2>--}}

{{--                            </div>--}}
{{--                            <div class="content news_date">--}}
{{--                                <p>3rd Jan 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- News Card 4-->--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="card">--}}
{{--                    <a href="#">--}}
{{--                        <div class="image">--}}
{{--                            <img src="https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364" />--}}
{{--                        </div>--}}
{{--                        <div class="card-inner news_data">--}}
{{--                            <div class="header">--}}
{{--                                <h2>Title</h2>--}}

{{--                            </div>--}}
{{--                            <div class="content news_date">--}}
{{--                                <p>3rd Jan 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- News Card 5-->--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="card">--}}
{{--                    <a href="#">--}}
{{--                        <div class="image">--}}
{{--                            <img src="https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364" />--}}
{{--                        </div>--}}
{{--                        <div class="card-inner news_data">--}}
{{--                            <div class="header">--}}
{{--                                <h2>Title</h2>--}}

{{--                            </div>--}}
{{--                            <div class="content news_date">--}}
{{--                                <p>3rd Jan 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- News Card 6-->--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="card">--}}
{{--                    <a href="#">--}}
{{--                        <div class="image">--}}
{{--                            <img src="https://specials-images.forbesimg.com/imageserve/5d3703e2f1176b00089761a6/960x0.jpg?cropX1=836&cropX2=5396&cropY1=799&cropY2=3364" />--}}
{{--                        </div>--}}
{{--                        <div class="card-inner news_data">--}}
{{--                            <div class="header">--}}
{{--                                <h2>Title</h2>--}}

{{--                            </div>--}}
{{--                            <div class="content news_date">--}}
{{--                                <p>3rd Jan 2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}


        </div>

    </div>
    <!--end of News Card-->
    <div class="pagination-wrapper text-center"> {!! $posts->render() !!} </div>

</section>


<!-- footer -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
