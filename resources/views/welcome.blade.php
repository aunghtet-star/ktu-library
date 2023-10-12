@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <h5 class="p-0 mt-3"><a>New released</a></h5>
            <div class="row slide">
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a class="active-a">Romeo Juliet</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet2</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Julie3</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet4</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Julie5</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <h5 class="p-0 mt-3"><a>Short Story</a></h5>
            <div class="row">
                @foreach($books as $book)
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="{{$book->picture}}" alt="">
                        <span class="fa fa-star checked"><a>{{$book->rating}}</a></span>
                        <div>
                            <a href="{{url('details/'.$book->id)}}">{{$book->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet2</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Julie3</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet4</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Julie5</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-3">
                    <div class="card mt-2">
                        <img class="img-cover" src="https://tse1.mm.bing.net/th?id=OIP.axjwI7IvszJRULBvjpRVnwAAAA&pid=Api" alt="">
                        <span class="fa fa-star checked"><a>3.4</a></span>
                        <div>
                            <a>Romeo Juliet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
