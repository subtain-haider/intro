

@extends('classroom.layout')

@section('main')

    @if($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <div align="right">
        <a href="{{ route('classroom.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('classroom.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Code</label>
            <div class="col-md-8">
                <input type="text" name="code" class="form-control input-lg" />
            </div>
        </div>

        <br /><br /><br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>

    </form>

@endsection


