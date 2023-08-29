@extends('front.layout.master')
@section('title')
Edit Category
@endsection
@section('content')

@include('front.layout.flash_edit')
        <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form-center">Edit Category</h4>
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
                                    <div class="card-body">

                                        <div class="card-text">
                                        </div>
                                        <form class="form" method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-10">
                                                    <h4 class="form-section"><i class="ft-user"></i> Edit Category</h4>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventInput1">Name Category</label>
                                                            <input type="text" id="eventInput1" class="form-control" placeholder="Name Category" name="name_category" value="{{$category->name_category}}">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions center">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
        </div>

@endsection

