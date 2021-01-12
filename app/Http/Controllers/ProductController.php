<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB; 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = DB::select('SELECT * FROM sinhviên');
        return view('/Student/Index',['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Student/Student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $student = new Student;
        $student->MSV = $request->msv;
        $student->HọTên = $request->name; 
        $student->Lớp = $request->class;
        $student->SĐT = $request->phone;
        $student->ĐịaChỉ = $request->address;
        $student->save();
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('/Student/Index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getSua($id)
    {
        $user = Student::find($id);
        return view('/Student/Edit',['user' => $user]);
    }

    public function postSua(Request $request, $id)
    {
        $sua = Student::find($id);
        $sua->MSV = $request->msv;
        $sua->HọTên = $request->name; 
        $sua->Lớp = $request->class;
        $sua->SĐT = $request->phone;
        $sua->ĐịaChỉ = $request->address;
        $student = DB::select('SELECT * FROM sinhviên');
        return redirect('view');
        return view('/Student/Index',['student' => $student]);
    }

    public function xoa($id)
    {
        $delete = Student::find($id);
        $delete->delete();
        $student = DB::select('SELECT * FROM sinhviên');
        return redirect('view');
        return view('/Student/Index',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
