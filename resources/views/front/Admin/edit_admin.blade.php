@extends('front.layout.master')
@section('title')
Edit Admin
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
                                    <h4 class="card-title" id="basic-layout-form-center">Edit Admin</h4>
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
                                        <form class="form" method="post" action="{{route('admin.update',$admin->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="admin_id">


                                            <div class="row justify-content-md-center">
                                                <div class="col-md-10">
                                                    <h4 class="form-section"><i class="ft-user"></i> Add New Admin</h4>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventInput1">Name</label>
                                                            <input type="text" id="eventInput1" class="form-control" placeholder="name" name="name" value="{{$admin->name}}">



                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput2">Mobile Number</label>
                                                            <input type="tel" id="eventInput2" class="form-control" placeholder="Mobile Number" name="mobile" value="{{$admin->mobile}}">


                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput3">Email</label>
                                                            <input type="email" id="eventInput3" class="form-control" placeholder="email" name="email" value="{{$admin->email}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput4">Password</label>
                                                            <input type="password" id="eventInput4" class="form-control" placeholder="Password" name="password" value="{{$admin->password}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5">greeting</label>
                                                            <input type="text" id="eventInput5" class="form-control" placeholder="greeting" name="greeting" value="{{$admin->greeting}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="projectinput6">Title</label>
                                                            <input type="text" id="projectinput6"  class="form-control" name="title" placeholder="Title" value="{{$admin->title}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5">update add_logo</label>
                                                            <input type="file" id="file" class="form-control"  name="logo" >

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5"> update img_header</label>
                                                            <input type="file" id="file" class="form-control" name="img_header" >

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
