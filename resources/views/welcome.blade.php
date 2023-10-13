@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>New released</a></h5>
            <div class="row slide">
                @foreach($books as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Academic & Education</a></h5>
            <div class="row">
                @foreach($education as $book)
                <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Biography</a></h5>
            <div class="row">
                @foreach($biography as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Business</a></h5>
            <div class="row">
                @foreach($business as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Health</a></h5>
            <div class="row">
                @foreach($health as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Technology</a></h5>
            <div class="row">
                @foreach($technology as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Science</a></h5>
            <div class="row">
                @foreach($science as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Fiction</a></h5>
            <div class="row">
                @foreach($fiction as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>Cartoon</a></h5>
            <div class="row">
                @foreach($cartoon as $book)
                    <div class="col-md-2 col-4">
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

        <div class="col-md-12 mt-3">
            <h5 class="p-0 mt-3"><a>History</a></h5>
            <div class="row">
                @foreach($history as $book)
                    <div class="col-md-2 col-4">
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
