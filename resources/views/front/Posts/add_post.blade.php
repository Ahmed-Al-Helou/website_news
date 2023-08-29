@extends('front.layout.master')
@section('title')
Add Post
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@include('front.layout.flash_add')
    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form-center">Add Post</h4>
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
                                        <form class="form" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-10">
                                                    <h4 class="form-section"><i class="ft-user"></i> Add New Post</h4>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventInput1">Title</label>
                                                            <input type="text" id="eventInput1" class="form-control" placeholder="title" name="title">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput2">Author</label>
                                                            <input type="text" id="eventInput2" class="form-control" placeholder="Author" name="author">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput2">Date</label>
                                                            <input type="date" id="eventInput2" class="form-control" placeholder="Date" name="date">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput1">Description</label>
                                                            <input type="text" id="eventInput1" class="form-control" placeholder="Description" name="description">

                                                        </div>
                                                        <div class="form-group">

                                                                <label for="inputName" class="control-label">Cateory</label>
                                                                <select name="category" class="form-control SlectBox" onclick="console.log($(this).val())"
                                                                    onchange="console.log('change is firing')">

                                                                    <option value="" selected disabled>Choise Category</option>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{$category->id}}">{{$category->name_category}} </option>
                                                                    @endforeach
                                                                </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventInput1">Img</label>
                                                            <input type="file" id="eventInput1" class="form-control"  name="img">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions center">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Add
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


