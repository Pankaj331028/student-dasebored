<?php

namespace App\Http\Controllers;

use App\Models\fee;
use App\Models\Student;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeData=Fee::all();
        return view('fee/index',compact('feeData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentData=Student::all();
        return view('fee.create',compact('studentData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        
        $insert=Fee::create($data);
       
        return redirect()->route('fee.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(fee $fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(fee $fee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fee $fee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(fee $fee)
    {
        //
    }
}
