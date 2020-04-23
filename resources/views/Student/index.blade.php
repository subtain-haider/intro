
@extends('student.layout')

@section('main')
    <div align="right">
        <a href="{{ route('student.create') }}" class="btn btn-default">Add new student</a>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Father Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td><img class="image-thumbnail" width="50%" src="{{ URL::to('/') }}/images/{{ $student->image  }}" alt=""></td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->father_name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('student.edit', $student->id) }}">Edit</a>
                <form method="POST" action="{{ route('student.destroy', $student->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">DELETE</button>
                </form>
                <a class="btn btn-warning" href="{{ route('student.show', $student->id) }}">Show</a>

            </td>
        </tr>
        @endforeach
    </table>




@endsection



