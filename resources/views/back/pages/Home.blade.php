@extends('back.layout.main')
@section('content')
    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">



                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">

                            @foreach ($post_slider as $post )

                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{asset('imgs/'.$post->img)}}" alt="">
                                        <div class="trend-top-cap">
                                            @foreach ($post->categories as $category )
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{$category->name_category}}</span>
                                            @endforeach

                                            <h2><a href="{{route('page.details',$post->id)}}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{$post->title}}</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by {{$post->author}}   -   {{$post->date}}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                            <!-- Trending Top -->
                        <div class="row">

                            @foreach ($post_right as $post2 )

                            {{-- {{$categories = $post2->categories }}
                            @foreach ( $categories as $category ) --}}



                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src=" {{asset('imgs/'.$post2->img)}}" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            @foreach ($post2->categories as $category )
                                            <span class="bgb" >{{$category->name_category}}</span>
                                            @endforeach

                                            <h2><a href="{{route('page.details',$post2->id)}}">{{$post2->title}}</a></h2>
                                            <p>by {{$post2->author}}   -   {{$post2->date}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>

                        <div class="col-xl-8 col-md-9">

                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>

                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle='tab'  data-category="Lifestyle" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lifestyle</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle='tab'  data-category="traval" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Traval</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle='tab' data-category="fashion" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle='tab' data-category="sport" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                        <a class="nav-item nav-link" id="nav-Sports" data-toggle='tab' data-category="technology" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                    </div>
                                </nav>

                                <!--End Nav Button  -->
                            </div>

                        </div>

                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12" id="card-container">
                            <!-- Nav Card -->

                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        @foreach ($post_left_side as $post )
                                        <!-- Left Details Caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src=" {{asset('imgs/'. $post->img)}}" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                        <span>{{$post->author}}  -   {{$post->date}}</span>
                                                        <p> {{$post->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        <!-- Right single caption -->
                                <div class="col-xl-6 col-lg-12">
                                    <div class="row">

                                        <!-- single -->

                                        @foreach ($post_right_side as $post )
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src="{{asset('imgs/'.$post->img)}}" alt="">
                                                </div>
                                                <div class="whats-right-cap">
                                                    @foreach ($post->categories as $category )
                                                    <span class="colorb">{{$category->name_category}}</span>
                                                    @endforeach

                                                    <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                    <p>{{$post->date}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src=" {{asset('back/img/gallery/whats_right_img1.png')}}" alt="">
                                                </div>
                                                <div class="whats-right-cap">
                                                    <span class="colorb">FASHION</span>
                                                    <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                    <p>Jun 19, 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src=" {{asset('back/img/gallery/whats_right_img2.png')}}" alt="">
                                                </div>
                                                <div class="whats-right-cap">
                                                    <span class="colorb">FASHION</span>
                                                    <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                    <p>Jun 19, 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src=" {{asset('back/img/gallery/whats_right_img3.png')}}" alt="">
                                                </div>
                                                <div class="whats-right-cap">
                                                    <span class="colorg">FASHION</span>
                                                    <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                    <p>Jun 19, 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src=" {{asset('back/img/gallery/whats_right_img4.png')}}" alt="">
                                                </div>
                                                <div class="whats-right-cap">
                                                    <span class="colorr">FASHION</span>
                                                    <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                    <p>Jun 19, 2020</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>


                                </div>
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        @foreach ($post_left_side2 as $post)
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                    <span>by {{$post->author}}   -   {{$post->date}}</span>
                                                    <p>{{$post->description}}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                @foreach ($post_right_side as $post )
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="{{asset('imgs/'.$post->img)}}" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            @foreach ($post->categories as $category )
                                                            <span class="colorb">{{$category->name_category}}</span>
                                                            @endforeach
                                                            <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                            <p>{{$post->date}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card three -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                        @foreach ($post_left_side3 as $post)
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                    <span>by {{$post->author}}   -   {{$post->date}}</span>
                                                    <p>{{$post->description}}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->

                                                @foreach ($post_right_side as $post )
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="{{asset('imgs/'.$post->img)}}" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            @foreach ($post->categories as $category )
                                                            <span class="colorb">{{$category->name_category}}</span>
                                                            @endforeach
                                                            <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                            <p>{{$post->date}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card foure -->
                                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                    <div class="row">
                                        @foreach ($post_left_side4 as $post)
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                    <span>by {{$post->author}}   -   {{$post->date}}</span>
                                                    <p>{{$post->description}}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->

                                                @foreach ($post_right_side as $post )
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="{{asset('imgs/'.$post->img)}}" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            @foreach ($post->categories as $category )
                                                            <span class="colorb">{{$category->name_category}}</span>
                                                            @endforeach
                                                            <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                            <p>{{$post->date}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card Five -->
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                    <div class="row">
                                        @foreach ($post_left_side as $post)
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                    <span>by {{$post->author}}   -   {{$post->date}}</span>
                                                    <p>{{$post->description}}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->

                                                @foreach ($post_right_side as $post )
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="{{asset('imgs/'.$post->img)}}" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            @foreach ($post->categories as $category )
                                                            <span class="colorb">{{$category->name_category}}</span>
                                                            @endforeach
                                                            <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                            <p>{{$post->date}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End Nav Card -->

                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="banner-one mt-20 mb-30">
                    <img src=" {{asset('back/img/gallery/body_card1.png')}}" alt="">
                </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{asset('back/img/news/icon-fb.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src=" {{asset('back/img/news/icon-tw.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                                <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src=" {{asset('back/img/news/icon-ins.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src=" {{asset('back/img/news/icon-yo.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <!-- Section Tittle -->
                        <div class="small-tittle mb-20">
                            <h4>Most Recent</h4>
                        </div>
                        <!-- Details -->
                        @foreach ($post_most_recent as $post )
                        <div class="most-recent mb-40">
                            <div class="most-recent-img">
                                <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                <div class="most-recent-cap">
                                    @foreach ($post->categories as $category )
                                    <span class="bgbeg">{{$category->name_category}}</span>
                                    @endforeach
                                    <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                    <p>{{$post->author}}  |  {{$post->date}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single -->
                        @foreach ($post_most_recent2 as $post )

                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                            </div>
                            <div class="most-recent-capt">
                                <h4><a href="{{route('page.details',$post->id)}}"> {{$post->title}}</a></h4>
                                <p>{{$post->author}}  |  2 hours ago</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->
                    <div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src=" {{asset('back/img/gallery/body_card2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="slider-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="small-tittle mb-30">
                                        <h4>Most Popular</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly2-news-active d-flex">
                                        @foreach ($post_most_popular as $post )


                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                            </div>
                                            @foreach ($post->categories as $category )
                                            <span class="bgbeg">{{$category->name_category}}</span>
                                            @endforeach
                                            <div class="weekly2-caption">
                                                <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                <p>{{$post->author}} |  2 hours ago</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!--  Recent Articles start -->
    <div class="recent-articles pt-80 pb-80">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Trending  News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            @foreach ($post_trending as $post)
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="{{route('page.details',$post->id)}}" > <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4></a></h4>
                                    <P>{{$post->date}}</P>
                                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Recent Articles End -->
    <!-- Start Video Area -->
    <div class="youtube-area video-padding d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <video controls>
                                <source src="{{asset('back/video/news2.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src=" {{asset('back/video/news1.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src=" {{asset('back/video/news3.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src=" {{asset('back/video/news1.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src=" {{asset('back/video/news3.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-12">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <video controls>
                                    <source src="{{asset('back/video/news2.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                        <h4>Old Spondon News - 2020 </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="{{asset('back/video/news1.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Banglades News Video </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="{{asset('back/video/news3.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Latest Video - 2020 </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="{{asset('back/video/news2.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Spondon News -2019 </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="{{asset('back/video/news3.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Latest Video - 2020</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Start Video area-->
    <!--   Weekly3-News start -->
    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">
                                        @foreach ($post_weekly as $post )


                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                <p>{{$post->date}}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!-- banner-last Start -->
    <div class="banner-area gray-bg pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="banner-one">
                        <img src=" {{asset('back/img/gallery/body_card3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-last End -->


@stop

@section('js')

{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
{{-- <script>
    $(document).ready(function () {
    // Function to fetch all cards using AJAX
    $('.nav-item nav-link').on('click',function(){
        $.ajax({
            url: '/cards/all',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Display all cards
                var cardContainer = $('#card-container');
                cardContainer.empty();

                $.each(data, function (index, card) {
                    cardContainer.append(
                    ` <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                        <div class="whats-right-single mb-20">
                            <div class="whats-right-img">
                                <img src="{{asset('imgs/'.$post->img)}}" alt="">
                            </div>
                        <div class="whats-right-cap">
                            <span class="colorb">{{$post->categories}}</span>
                            <h4><a href="latest_news.html">{{$post->title}}</a></h4>
                                <p>{{$post->date}}</p>
                                </div>
                        </div>
                    </div>`
                    );
                });

            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });

    }});

</script> --}}
{{-- <script> --}}

{{-- </script> --}}
@endsection
