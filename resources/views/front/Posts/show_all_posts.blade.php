@extends('front.layout.master')
@section('title')
Show All Post
@endsection
@section('content')

@include('front.layout.flash_delete')
    <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Posts </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table style="width: 100%" class="table display nowrap table-striped table-bordered scroll-horizontal ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th>category</th>
                                                    <th>Img</th>
                                                    <th>Edit</th>
                                                    <th>DELETE</th>

                                                </tr>

                                            </thead>
                                            <?php $i=0; ?>
                                            <tbody>
                                                @foreach ($posts as $post)


                                            
                                                <?php $i++; ?>
                                                <tr>

                                                    <td>{{$i}}</td>
                                                    <td>{{$post->title}}</td>
                                                    <td>{{$post->author}}</td>
                                                    <td>{{$post->date}}</td>
                                                    <td>{{$post->description}}</td>
                                                    @foreach ( $post->categories as $category )
                                                    <td>
                                                        {{$category->name_category}}
                                                    </td>
                                                    @endforeach
                                                    <td>
                                                        <img src="{{asset('imgs/'.$post->img)}}" width="100px" height="90px">
                                                    </td>
                                                    <td>
                                                        <a href='{{route('post.edit',$post->id)}}' class='btn btn-outline-primary  box-shadow-3 mr-1 mb-1'><i class='icon-eye'></i></a>
                                                    </td>
                                                    <td>
                                                        <a href='#'  class='btn btn-danger delete-btn'> DELETE </a>
                                                    </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>

                                        </table>
                                        <div class="justify-content-center d-flex">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!--  -->

        </div>
    </div>

@endsection

