@extends('front.layout.master')
@section('title')
Show All Admins
@endsection
@section('content')

@include('front.layout.flash_delete')

    <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Admin </h4>
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
                                                    <th>Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Title</th>
                                                    <th>greeting</th>
                                                    <th>Logo</th>
                                                    <th>img_header</th>
                                                    <th>Edit</th>
                                                    <th>DELETE</th>

                                                </tr>

                                            </thead>
                                            <?php $i=0; ?>
                                            <tbody>
                                                <?php $i++; ?>
                                                @foreach ($Admins as $admin)
                                                <tr>
                                                    <th>{{$i++}}</th>
                                                    <th>{{$admin->name}}</th>
                                                    <th>{{$admin->mobile}}</th>
                                                    <th>{{$admin->email}}</th>
                                                    <th>{{$admin->password}}</th>
                                                    <th>{{$admin->title}}</th>
                                                    <th>{{$admin->greeting}}</th>
                                                    <th><img src="{{asset('imgs/'.$admin->logo)}} " width="50px" height="50px" ></th>
                                                    <th><img src="{{asset('imgs/'.$admin->img_header)}}" width="50px" height="50px"></th>
                                                    <th>
                                                        <a href='{{route('admin.edit',$admin->id)}}' class='btn btn-outline-primary  box-shadow-3 mr-1 mb-1'><i class='icon-eye'></i></a>
                                                    </th>
                                                    <th>
                                                        <a href='{{route('admin.delete',$admin->id)}}'  class='btn btn-danger delete-btn'> DELETE </a>
                                                    </th>
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


{{-- <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form action="" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
        </div>
        <div class="modal-body">    Are your sure the delete Admin ?
                    <input type="hidden" name="admin_id" id="admin_id" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
    </div>
</div>
<script>
    $('#delete-btn').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var admin_id = button.data('admin_id')
        var modal = $(this)
        modal.find('.modal-body #iadmin_id').val(admin_id);
    })
</script> --}}
