@extends('backend.layouts.app')
@section('content')
    <div class="container pt-3">
        <div class="card shadow">
            <h4 class="text-center mt-3">Books Edit Form</h4>
            <div class="card-body">
                <div class="col-md-12">
                    <form action="{{route('books.update',$book->id)}}" method="post" id="books-update">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="">Article</label>
                                <select name="article_id" class="form-control">
                                    <option value="">Select Article</option>
                                    @foreach ($articles as $article)
                                        <option @if($article->id == $book->article_id) selected @endif value="{{$article->id}}" >{{$article->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="">Book Name</label>
                                <input type="text" class="form-control" value="{{$book->name}}" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="">Author</label>
                                <input type="text" class="form-control" value="{{$book->author}}" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="">Picture</label>
                                <input type="text" class="form-control" value="{{$book->picture}}" name="picture">
                            </div>

                            <div class="mb-3">
                                <label for="">Link</label>
                                <input type="text" class="form-control" value="{{$book->link}}" name="link">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\BookRequest', '#books-update'); !!}
@endsection


