@extends('frontend.layouts.app')
@section('content')
    <div class="container mt-5 text-white">
        <div class="col-md-12 col-12 d-flex justify-content-center">
            <div class="col-8">
                <div class="card">
                    <img src="{{$book->picture}}" alt="">
                </div>

                <div class="mt-3 mb-3">
                    <h4>{{$book->name}}</h4>
                    <h5 class="text-success">{{$book->author}}</h5>
                    <p>{{$book->description}}</p>

                     <div class="d-flex justify-content-around">
                         <a href="{{asset('storage/book/'.$book->link)}}"  download="{{$book->name}}" class="btn btn-success btn-sm custom-btn"> <i class="fas fa-download"></i> Download</a>
                         <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ratingModal"><i class="fas fa-star"></i> Rating</button>
                     </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rate this book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{url('/rating')}}" method="post">
                        @csrf
                        <input type="hidden" name="book_id" value="{{$book->id}}">
                        <div class="rating-css">
                            <div class="star-icon">
                                <input type="radio" value="1" name="product_rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="product_rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="product_rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="product_rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="product_rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


        @if(session('done'))
        Toast.fire({
            icon: 'success',
            title: '{{session('done')}}'
        })
        @endif()
    </script>
@endsection
