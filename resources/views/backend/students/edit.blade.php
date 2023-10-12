@extends('backend.layouts.app')
@section('content')
    <div class="container pt-3">
        <div class="card shadow">
            <h4 class="text-center mt-3">Student Edit Form</h4>
            <div class="card-body">
                <div class="col-md-12">
                    <form action="{{route('students.update',$student->id)}}" method="post" id="students-update">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}">
                            </div>

                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$student->email}}">
                            </div>

                            <div class="mb-3">
                                <label for="">Roll No</label>
                                <input type="text" class="form-control" name="roll_no" value="{{$student->roll_no}}">
                            </div>

                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
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
    {!! JsValidator::formRequest('App\Http\Requests\UserRequest', '#students-update'); !!}
@endsection


