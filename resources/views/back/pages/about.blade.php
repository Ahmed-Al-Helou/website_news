@extends('back.layout.main')
@section('content')
<div class="about-details section-padding30">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-lg-8">
                <div class="about-details-cap mb-50">
                    <h4>Our Mission</h4>
                    <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                        </p>
                    <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p>
                </div>
                <div class="about-details-cap mb-50">
                    <h4>Our Vision</h4>
                    <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                        </p>
                    <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? About Area Start-->
<div class="support-company-area pt-100 pb-100 section-bg fix" data-background="{{asset('back/img/gallery/section_bg02.jpg')}}">
    <div class="container">
        @foreach ($post_top as $post )


        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img">
                    <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittles section-tittles2 mb-50">
                        <span>Our Top Services</span>
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">{{$post->description}}.</p>
                        <p class="mb-65">{{$post->description}}</p>
                        <a href="about.html" class="btn post-btn ">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- About Area End-->
<!-- Team Start -->
<div class="team-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittles mb-70">
                    <span>Our Professional members </span>
                    <h2>Our Team Mambers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single Tem -->
            @foreach ($post_team as $post  )
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">


                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                    </div>
                    <div class="team-caption">
                        <h3><a href="{{route('page.details',$post->id)}}">{{$post->title}}</a></h3>
                        <span>{{$post->description}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="{{asset('back/img/gallery/team3.png')}} " alt="">
                    </div>
                    <div class="team-caption">
                        <h3><a href="#">Ethan Welch</a></h3>
                        <span>UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="{{asset('back/img/gallery/team1.png')}} " alt="">
                    </div>
                    <div class="team-caption">
                        <h3><a href="#">Ethan Welch</a></h3>
                        <span>UX Designer</span>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Team End -->
<!-- banner-last Start -->
<div class="banner-area gray-bg pb-90">
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
