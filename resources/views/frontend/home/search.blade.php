@extends('frontend.layouts.app')
@section('content')
    <div class="container mt-5 text-white">
        <div class="col-md-12">
            <h5 class="p-0 mt-3"><a>Are you searching this?</a></h5>
            <div class="row">
                @foreach($books as $book)
                    <div class="col-md-2 col-4 mb-5">
                        <div class="card mt-2">
                            <img class="img-cover" src="{{$book->picture}}" alt="">
                            <span class="fa fa-star checked"><a>{{$book->rating}}</a></span>
                            <div>
                                <a href="{{url('details/'.$book->id)}}">{{$book->name}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
