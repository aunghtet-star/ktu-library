@extends('backend.layouts.app')
@section('content')
    <div class="container pt-3">
        <div class="card shadow">
            <h4 class="text-center mt-3">Book Create Form</h4>
            <div class="card-body">
               <div class="col-md-12">
                   <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data" id="books-create">
                       @csrf
                       <div class="card-body">

                           <div class="mb-3">
                               <label for="">Article</label>
                               <select name="article_id" class="form-control">
                                   <option value="">Select Article</option>
                                   @foreach ($articles as $article)
                                       <option value="{{$article->id}}" >{{$article->name}}
                                       </option>
                                   @endforeach
                               </select>
                           </div>


                           <div class="mb-3">
                               <label for="">Book Name</label>
                               <input type="text" class="form-control" name="name">
                           </div>

                           <div class="mb-3">
                               <label for="">Author</label>
                               <input type="text" class="form-control" name="author">
                           </div>

                           <div class="mb-3">
                               <label for="">Picture</label>
                               <input type="text" class="form-control" name="picture">
                           </div>

                           <div class="mb-3">
                               <label for="">Link</label>
                               <input type="file" class="form-control p-1" name="link" id="link">
                           </div>

                           <div class="mb-3">
                               <label for="">Description</label>
                               <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
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
    {!! JsValidator::formRequest('App\Http\Requests\BookRequest', '#books-create'); !!}
@endsection


