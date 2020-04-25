
@extends('classroom.layout')

@section('main')
    <div align="right">
        <a href="{{ route('classroom.create') }}" class="btn btn-default">Add new classroom</a>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <td>Name</td>
            <td>Code</td>
        </tr>
        @foreach($classrooms as $classroom)
        <tr>
            <td>{{ $classroom->name }}</td>
            <td>{{ $classroom->code }}</td>
        </tr>
        @endforeach
    </table>




@endsection



