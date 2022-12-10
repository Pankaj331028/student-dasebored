<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentData=Student::all();
        return view('student/index',compact('studentData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $student = Student::create($input);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $student->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data=$request->all();
        $insert=$request['image'];
       if($request->hasFile('image') && $request->file('image')->isValid()){
        $student->media()->delete();
        $student->addMedia($insert)->toMediaCollection('image');
    }
    $insert=$student->update($data);
  
       return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
            return redirect()->back();
    }

    public function getRollNo()
    {
        $lastRollNo = Student::select('rollno')->orderBy('rollno', 'DESC')->first();
        if(!$lastRollNo) {
            $lastRollNo = 1;
        } else {
            $lastRollNo = $lastRollNo['rollno']+1??1;
        }
        return response()->json(['new-rollno' => $lastRollNo]);
    }
}
