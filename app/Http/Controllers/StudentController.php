<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function studentlist(Request $request) {
        $list = Students::get();
        return view('student.list', compact('list'));
    }

    public function student_add(Request $request) {
        return view('student.add');
    }
}
