<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;


class LectureControllre extends Controller
{
    //

    public function index()
    {
	    $students = Student::orderBy('id')->get();
        return view('students.index', ['students' => $students]);
    }

    public function store(Request $request)
    {
	    $data = $request->all();
	    Lecture::create($data);

	    Session::flash('message', $data['name'] . ' added successfully');
	    return redirect('/lectures');
    }

}
