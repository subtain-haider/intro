

@extends('student.layout')

@section('main')

    @if($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <div align="right">
        <a href="{{ route('student.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('student.store') }}" enctype="multipart/form-data">

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
            <label class="col-md-4 text-right">Enter Father Name</label>
            <div class="col-md-8">
                <input type="text" name="father_name" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Email Address</label>
            <div class="col-md-8">
                <input type="text" name="email" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Password</label>
            <div class="col-md-8">
                <input type="text" name="password" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Profile Image</label>
            <div class="col-md-8">
                <input type="file" name="image" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>

    </form>

@endsection


