<?php

namespace App\Http\Controllers;

use App\classroom;
use App\Mail\StudentMail;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $student = new Student();
        $students = $student->all();


        return view('student.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = new classroom();
        $classrooms = $classrooms->all();
        return view('student.create', compact('classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $temp_name = rand(). '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $temp_name);


//        Mail::to('student@student.com')->send(new StudentMail());

//        $students = Student::where('classroom_id',$request->classroom_id)->get(); //15
//        $code = Classroom::where('classroom_id', $request->classroom_id)->pluck('code'); // 11ICSA
//
//        $rollnum = $code . $students; // 11ICSA15


        $data = array(
            'name' => $request->name,
            'classroom_id' => $request->classroom_id,
            'father_name' => $request->father_name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $temp_name,
        );

        Mail::to($request->email)->send(new StudentMail($data));

        $student = new Student();

        $student->create($data);

        return redirect('student')->with('success', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        dd($student->classroom->code);

        $student_data = Student::find($student->id);
        return view('student.show', compact('student_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $image = $request->file('image');
        $temp_name = rand(). '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $temp_name);

        $data = array(
            'name' => $request->name,
            'father_name' => $request->father_name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $temp_name,
        );
        $modal = new Student();

        $modal->whereId($student->id)->update($data);

        return redirect('student')->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
//        $data = Student::find($student->id);
//        $data->delete();
        $student->delete();
        return redirect('student')->with('success', 'Student Deleted Successfully');
    }
}
