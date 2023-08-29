@extends('front.layout.master')
@section('title')
Add Admin
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
                                    <h4 class="card-title" id="basic-layout-form-center">Add Admin</h4>
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
                                        <form class="form" method="post" action="{{route('admin.store')}}" enctype="multipart/form-data" id="add_admin">
                                            @csrf
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-10">
                                                    <h4 class="form-section"><i class="ft-user"></i> Add New Admin</h4>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventInput1">Name</label>
                                                            <input type="text" id="eventInput1" class="form-control" placeholder="name" name="name">
                                                            <input type="hidden" name="admin_id">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput2">Mobile Number</label>
                                                            <input type="tel" id="eventInput2" class="form-control" placeholder="Mobile Number" name="mobile">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput3">Email</label>
                                                            <input type="email" id="eventInput3" class="form-control" placeholder="email" name="email">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput4">Password</label>
                                                            <input type="password" id="eventInput4" class="form-control" placeholder="Password" name="password">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5">greeting</label>
                                                            <input type="text" id="eventInput5" class="form-control" placeholder="greeting" name="greeting">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="projectinput6">Title</label>
                                                            <input type="text" name="title" class="form-control" placeholder="title">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5">add_logo</label>
                                                            <input type="file" id="file" class="form-control"  name="logo">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventInput5">img_header</label>
                                                            <input type="file" id="file" class="form-control" name="img_header">

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions center">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" id="btn_add">
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

<script>
    $("#add_admin").submit(function(e) {
    e.preventDefault();
    const data = new FormData(this);
    $("btn_add").text('Adding...');
    $.ajax({
        url: '{{ route('admin.store') }}',
        method: 'post',
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status == 200) {
                Swal.fire(
                    'Added!',
                    'Admin Added Successfully!',
                    'success'
                )
            }

            $("#btn_add").text('Added Admin');
            $("#add_admin")[0].reset();

        }


    })
})
</script>

