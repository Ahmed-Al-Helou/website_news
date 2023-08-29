@extends('back.layout.main')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection
@section('content')

    <!-- About US Start -->
    <div class="about-area2 gray-bg pt-60 pb-60">
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
                                                <a class="nav-item nav-link active" id="nav-lifestyle-tab" data-toggle="tab" href="#nav-lifestyle" role="tab" aria-controls="nav-lifestyle" aria-selected="true">Lifestyle</a>
                                                <a class="nav-item nav-link" id="nav-travel-tab" data-toggle="tab" href="#nav-travel" role="tab" aria-controls="nav-travel" aria-selected="false">Travel</a>
                                                <a class="nav-item nav-link" id="nav-fashion-tab" data-toggle="tab" href="#nav-fashion" role="tab" aria-controls="nav-fashion" aria-selected="false">Fashion</a>
                                                <a class="nav-item nav-link" id="nav-sports-tab" data-toggle="tab" href="#nav-sports" role="tab" aria-controls="nav-sports" aria-selected="false">Sports</a>
                                                <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-nav-technology" role="tab" aria-controls="nav-technology" aria-selected="false">Technology</a>
                                            </div>
                                        </nav>
                                        <!--End Nav Button  -->
                                    </div>
                                </div>
                            </div>
                            <!-- Tab content -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- card one -->
                                        <div class="tab-pane fade show active" id="nav-lifestyle" role="tabpanel" aria-labelledby="nav-lifestyle-tab">
                                            <div class="row">
                                                @foreach ($post_cardOne as $post )
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h4>
                                                            <span>by {{$post->author}}  -   {{$post->date}}</span>
                                                            <p>{{$post->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src=" {{asset('back/img/gallery/whats_news_details1.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details2.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details3.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details4.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details5.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details6.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <!-- Card two -->
                                        <div class="tab-pane fade" id="nav-travel" role="tabpanel" aria-labelledby="nav-travel-tab">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details4.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details6.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details5.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details4.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details5.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details1.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card three -->
                                        <div class="tab-pane fade" id="nav-fashion" role="tabpanel" aria-labelledby="nav-fashion-tab">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details3.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details5.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details1.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details4.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details3.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details6.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card fure -->
                                        <div class="tab-pane fade" id="nav-sports" role="tabpanel" aria-labelledby="nav-sports-tab">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details6.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details2.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details6.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details2.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details5.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details1.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card Five -->
                                        <div class="tab-pane fade" id="nav-nav-technology" role="tabpanel" aria-labelledby="nav-technology">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details1.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details2.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details3.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details4.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details5.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{asset('back/img/gallery/whats_news_details6.png')}}" alt="">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                            <span>by Alice cloe   -   Jun 19, 2020</span>
                                                            <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Nav Card -->
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src=" {{asset('back/img/news/icon-fb.png')}}" alt=""></a>
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
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{asset('back/img/news/news_card.jpg')}} " alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- About US End -->
    <!--Start pagination -->
    <div class="pagination-area  gray-bg pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                            <li class="page-item"><a class="page-link" href="#">
                                <!-- SVG icon -->
                                <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="15px">
                                    <path fill-rule="evenodd"  fill="rgb(221, 221, 221)" d="M8.142,13.118 L6.973,14.135 L0.127,7.646 L0.127,6.623 L6.973,0.132 L8.087,1.153 L2.683,6.413 L23.309,6.413 L23.309,7.856 L2.683,7.856 L8.142,13.118 Z"/>
                                    </svg>
                            </span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <!-- SVG iocn -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="15px">
                                <path fill-rule="evenodd"  fill="rgb(255, 11, 11)" d="M31.112,13.118 L32.281,14.136 L39.127,7.646 L39.127,6.624 L32.281,0.132 L31.167,1.154 L36.571,6.413 L0.491,6.413 L0.491,7.857 L36.571,7.857 L31.112,13.118 Z"/>
                                </svg>
                            </span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    // Function to load content using Ajax when a navigation tab is clicked
    $('.nav-link').on('click', function(e) {
        e.preventDefault();

        // Get the ID of the clicked tab
        var tabId = $(this).attr('href');

        var cards = document. getElementsByClassName('tab-pane fade');

        for($i = 0 ; $i < cards.length ; $i++){
            console.log(cards[$i]['id']);

        }
        // console.log(cards['id']);

        // Check if the content is already loaded
        $.ajax({
                // url: '/get-card/'+ tabId, // Replace with your Ajax endpoint URL
                type: 'GET',
                success: function(response) {
                    // targetContent.html(response);
                    // console.log(response);
                },
                // error: function() {
                //     // targetContent.html('<p>Error loading content</p>');
                // }
            });
    });
});
</script>
@endsection
