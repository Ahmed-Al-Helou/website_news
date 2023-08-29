@extends('back.layout.main')
@section('title')
The News
@endsection

@section('content')

@include('front.layout.flash_add')
@include('front.layout.flash_edit')
{{--  --}}








{{--  --}}
<div class="about-area2 gray-bg pt-60 pb-60">
    <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src=" {{asset('imgs/'.$post->img)}}" alt="">
                        </div>
                        <div class="heading-news mb-30 pt-30">
                            <h3>{{$post->title}}</h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25">{{$post->description}}</p>
                            {{-- <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p> --}}

                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>Comments</h3>
                        </div>
                        <div class="about-prea">


                            <div class="callout" style="width: 500; background-color: #db6b6b24">
                                @foreach ($comments as $comment )

                                @if($post->id === $comment->post->id )

                                    <h5>{{auth()->user()->name}}</h5>
                                    <small>{{$comment->email}}</small>

                                    <p>{{$comment->comment}}</p>
                                    {{-- <p>----------------------------------------------</p> --}}
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg> --}}


                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="social-share pt-30">
                            <div class="section-tittle">
                                <h3 class="mr-20">Add Comment:</h3>
                                {{-- <ul>
                                    <li><a href="#"><img src=" {{asset('back/img/news/icon-ins.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src=" {{asset('back/img/news/icon-fb.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src=" {{asset('back/img/news/icon-tw.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src=" {{asset('back/img/news/icon-yo.png')}}" alt=""></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <!-- From -->
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form-contact contact_form mb-80" id="add_comment" action="{{route('comment.store')}}" method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 error" name="comment" id="comment" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Comment'" placeholder="Enter Comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="post_id" id="post_id" type="hidden"  value="{{$post->id}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="user_id" id="user_id" type="hidden"  value="{{auth()->user()->id}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control error" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title'" placeholder="Enter title">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                        <button type="submit" id="add_comment_btn" class="button button-contactForm boxed-btn boxed-btn2">Add Comment</button>
                                    </div>
                                    {{-- <input type="submit" id="add_comment_btn" value="Add" class="button button-contactForm boxed-btn boxed-btn2"> --}}
                                    {{-- <button type="submit" id="add_comment_btn" class="button button-contactForm boxed-btn boxed-btn2">Send</button> --}}
                                </div>
                            </form>
                        </div>
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
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src=" {{asset('back/img/news/news_card.jpg')}}" alt="">
                    </div>
                </div>
            </div>
    </div>
</div>


@endsection


{{-- @section('js')




@endsection --}}
