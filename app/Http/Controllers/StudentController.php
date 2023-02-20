<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\StudentModel;
use Illuminate\View\View;


class StudentController extends Controller
{
        public function getData() 
    {
        $data = StudentModel::all();
        return view('students', ['students' => $data]);
    } 
    public function addData()
    {
        return view('addStudent');
    }
    public function  saveData(Request $req): RedirectResponse
    {

        $req->validate([
            'roll'=> 'required',
            'dob'=>'required',
            'class'=> 'required',
            'contact'=>'required',
        ]);
        
        $name = $req->name;
        $roll = $req->roll;
        $dob = $req->dob;
        $class = $req->class;
        $contact = $req->contact;

        $stu = new StudentModel();
        $stu->name = $name;
        $stu->roll = $roll;
        $stu->dob = $dob;
        $stu->class = $class;
        $stu->contact = $contact;
        $stu->save();
        return redirect()->route('student.calling');        

    }
    public function updateData($id) : View
    {
        $data = StudentModel::where('id', '=', $id)->first();
        return view('edit-student',compact('data'));        
    }
    public function editData(Request $req):RedirectResponse
    {
        $req->validate([
            'roll'=> 'required',
            'dob'=>'required',
            'class'=> 'required',
            'contact'=>'required',
        ]);

        $id = $req->id;
        $name = $req->name;
        $roll = $req->roll;
        $dob = $req->dob;
        $class = $req->class;
        $contact = $req->contact;

        StudentModel::where('id', $id)->update([
            'name' => $name,
            'roll' => $roll,
            'dob' => $dob,
            'class' => $class,
            'contact' => $contact,
        ]);

        return redirect()->route('student.calling');        
    }

    public function deleteStudent($id):RedirectResponse
    {
        StudentModel::where('id', '=', $id)->delete();
        return redirect()->route('student.calling');        
    }
}
