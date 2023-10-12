@extends('backend.layouts.app')
@section('content')
    <div class="container pt-3">
        <div class="card shadow">
            <h4 class="text-center mt-3">Article Create Form</h4>
            <div class="card-body">
               <div class="col-md-12">
                   <form action="{{route('articles.store')}}" method="POST" id="articles-create">
                       @csrf
                       <div class="card-body">
                           <div class="mb-3">
                               <label for="">Article Name</label>
                               <input type="text" class="form-control" name="name">
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
    {!! JsValidator::formRequest('App\Http\Requests\ArticleRequest', '#articles-create'); !!}
@endsection


