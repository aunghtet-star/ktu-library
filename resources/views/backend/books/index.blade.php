@extends('backend.layouts.app')
@section('content')
    <div class="container pt-3">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <a href="{{route('books.create')}}" class="btn btn-theme "><i class="fas fa-user-plus"></i></a>
                    <h5 class="float-right pt-1" style="font-weight: 700">Books</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" id="book-table" style="width: 100%">
                        <thead>
                        <th>No</th>
                        <th>Article</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Picture</th>
                        <th>Link</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            let table = $('#book-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/books/datatables/ssd",
                columns : [
                    {  data : 'id' , name : 'id' },
                    {  data : 'article_id' , name : 'article_id' },
                    {  data : 'name' , name : 'name' },
                    {  data : 'author' , name : 'author' },
                    {  data : 'picture' , name : 'picture' },
                    {  data : 'link' , name : 'link' },
                    {  data : 'action' , name : 'action' }
                ]
            });

            $(document).on('click','#delete',function(e){
                e.preventDefault();

                let id = $(this).data('id');

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You want to delete!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Confirm',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url : "/admin/books/"+id,
                            type : "DELETE",
                            success : function(){
                                table.ajax.reload();
                            }
                        });
                    }
                })

            })
        })
    </script>
@endsection
