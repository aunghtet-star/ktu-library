@extends('backend.layouts.app')
@section('content')
    <div class="container pt-3">
        <div class="card">
            <div class="card-header">
                <div class="">
                    <a href="{{route('articles.create')}}" class="btn btn-theme "><i class="fas fa-user-plus"></i></a>
                    <h5 class="float-right pt-1" style="font-weight: 700">Articles</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" id="article-table" style="width: 100%">
                        <thead>
                        <th>No</th>
                        <th>Name</th>
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
            let table = $('#article-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/articles/datatables/ssd",
                columns : [
                    {  data : 'id' , name : 'id' },
                    {  data : 'name' , name : 'name' },
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
                            url : "/admin/articles/"+id,
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
