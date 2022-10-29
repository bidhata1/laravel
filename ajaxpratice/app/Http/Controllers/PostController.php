<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewForm()
    {
        $student = Student::all();
   // dd($student);
    return view('form', ['student'=>$student]);
     //return view('form');
 }

 public function storeData(Request $request)
 {
    // dd($request->all());
   // dd('hello');
     $request->validate([
         'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
         'password'=>'required',
         'address'=>'required'
     ]);
     //dd($request->all());

     $student= new Student;
     $student->email=$request->email;
     $student->password=$request->password;
     $student->address=$request->address;
     $student->save();

     $success = "ok";

     return response()->json(["data" =>[$success]]);
     
    // return $req->input();
}
/* public function index()
 {
    $student = Student::all();
   // dd($student);
    return view('form', ['student'=>$student]);
 }*/
 
 public function destroy($id)
 {
     $student = Student::find($id);
     $student->delete();
    //  return redirect()->back()->with('status','Student Deleted Successfully');
    return response()->json([
        'success' => 'Successfully Deleted'
    ]);
 }
}

