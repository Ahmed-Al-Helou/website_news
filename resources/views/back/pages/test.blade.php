                                        {{--  --}}
                                        {{-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"> Edit Comment</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{route('comment.update',$comment->id)}}" method="post" autocomplete="off">
                                                            {{method_field('PUT')}}
                                                            {{csrf_field()}}
                                                            <div class="form-group">

                                                                <label for="recipient-name" class="col-form-label">name:</label>
                                                                <input class="form-control" name="name" id="name" type="text" value="{{$comment->name}}">
                                                            </div>
                                                            <div class="form-group">

                                                                <label for="recipient-name" class="col-form-label">email:</label>
                                                                <input class="form-control" name="email" id="email" type="text" value="{{$comment->email}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Comment:</label>
                                                                <input  class="form-control" id="comment" name="comment" value="{{$comment->comment}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Title:</label>
                                                                <input  class="form-control" id="title" name="title" value="{{$comment->title}}">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        {{--  --}}
                                        <a data-id="{{ $comment->id }}" data-comment="{{ $comment->comment }}"
                                            data-name="{{ $comment->name }}" data-email="{{$comment->email}}" data-toggle="modal" href="#exampleModal2"
                                            title="edit" style="color: blue">Update</a>
                                            <th> <a href="" style="color: red">Delete</a></th>


                                        {{-- <form action="{{route('comment.update',$comment->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" style="color: white; background-color:blue; ">Update</button>
                                        </form> --}}


                                        {{-- <a href="{{route('comment.show',$comment->id)}}" style="color: blue">Update</a> --}}


                                        // fetch all the posts
// fetchAllPosts();

// function fetchAllPosts() {
//     $.ajax({
//         url: '{{ route('fetchAll') }}',
//         method: 'get',
//         success: function(response) {
//             $("#show_all_posts").html(response);
//             // $("table").DataTable({
//             //     'order':[1,'asce']
//             // })
//         }
//     })
// }





// edit employee ajax request
// $(document).on('click', '.editIcon', function(e) {
//     e.preventDefault();
//     let id = $(this).attr('id');
//     $.ajax({
//         url: '{{ route('editPost') }}',
//         method: 'get',
//         data: {
//             id: id,
//             _token: '{{ csrf_token() }}'
//         },
//         success: function(response) {
//             $("#fname").val(response.first_name);
//             $("#lname").val(response.last_name);
//             $("#post").val(response.post);
//             $("#img").html(
//                 `<img src="storage/images/${response.img}" width="100" class="img-fluid img-thumbnail">`
//             );
//             $("#post_id").val(response.id);
//             $("#post_img").val(response.img);
//         }
//     });
// });

// update post ajax request
// $("#edit_post_form").submit(function(e) {
//     e.preventDefault();
//     const fd = new FormData(this);
//     let csrf = '{{ csrf_token() }}';

//     $("#edit_post_btn").text('Updating...');
//     $.ajax({
//         url: "{{url('/posts')}}/" + 10,
//         method: 'PUT',
//         data: {
//             _token: csrf
//         },
//         cache: false,
//         contentType: false,
//         processData: false,
//         dataType: 'json',
//         success: function(response) {
//             if (response.status == 200) {

//                 Swal.fire(
//                     'Updated!',
//                     'Post Updated Successfully!',
//                     'success'
//                 )
//                 fetchAllPosts();
//             }

//             $("#edit_post_btn").text('Update Post');
//             $("#edit_post_form")[0].reset();
//             $("#editPostModal").modal('hide');
//         }
//     });
// });


//delete the post
// $(document).on('click', '.deleteIcon', function(e) {
//     e.preventDefault();
//     let id = $(this).attr('id');
//     let csrf = '{{ csrf_token() }}';
//     Swal.fire({
//         title: 'Are you sure?',
//         text: "You won't be able to revert this!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: '{{ route('deletePost') }}',
//                 method: 'delete',
//                 data: {
//                     id: id,
//                     _token: csrf
//                 },
//                 success: function(response) {
//                     console.log(response);
//                     Swal.fire(
//                         'Deleted!',
//                         'Your file has been deleted.',
//                         'success'
//                     )
//                     fetchAllPosts();
//                 }
//             });
//         }
//     })
// });



{{--  --}}
@section('js')
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- ajax script --}}
<script>
// add new post
// $('#add_comment').submit(function(e) {
//     e.preventDefault();
    // const fd = new FormData(this);
    // $("add_comment_btn").text('Adding...');
    // $.ajax({
    //     url: '{{ route('comment.store') }}',
    //     method: 'post',
    //     data: fd,
    //     cache: false,
    //     processData: false,
    //     contentType: false,
    //     success: function(response) {
            // console.log(response)
            // if (response.status == 200) {
            //     Swal.fire(
            //         'Added!',
            //         'comment Added Successfully!',
            //         'success'
            //     )
            // }
            // fetchAllPosts();

            // $("#add_comment_btn").text('Added comment');
            // $("#add_post_form")[0].reset();
            // $("#addPostModal").modal('hide');
//         }


//     })
// })

</script>




{{-- <script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var comment = button.data('comment')
        var name = button.data('name')
        var email = button.data('email')
        var modal = $(this)
        // modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #comment').val(comment);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #email').val(email);
    })


</script> --}}
@endsection

{{--  --}}
