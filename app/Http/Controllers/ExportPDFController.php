<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Student;

class ExportPDFController extends Controller
{
    public function index()
    {
        $students = student::all();

        return view("student",compact('students'));
    }

    
    public function exportPDF()
    {
        $students = student::all();

        $pdf = PDF::loadview('student',compact('students'));

        return $pdf->download('student-list.pdf');
    }
}
