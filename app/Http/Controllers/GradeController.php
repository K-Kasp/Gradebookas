<?php

namespace App\Http\Controllers;

use App\Grades;
use App\Lectures;
use App\Students;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function getGrade($id)
    {
        $lectures = Lectures::all();
        $student = Students::find($id);

        return view('grade', ['student' => $student, 'id' => $id, 'lectures' => $lectures]);
    }

    public function storeGrade($id)
    {
        $student = Students::find($id);
        $grade = new Grades;
        $grade->lecture_id = request('lectureIdI');
        $grade->student_id = $student->id;
        $grade->comment = request('commentI');
        $grade->grade = request('gradeI');
        $grade->save();

        return back();
    }
}
