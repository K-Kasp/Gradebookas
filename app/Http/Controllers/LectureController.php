<?php

namespace App\Http\Controllers;

use App\Lectures;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function getLecture()
    {
        $lectures = Lectures::all()->sortBy("title");

        return view('lecture', ['lectures' => $lectures]);
    }

    public function storeLecture(Request $request)
    {
        $lecture = new lectures;
        $lecture->title = request('titleI');
        $lecture->description = request('descriptionI');
        $lecture->save();

        return redirect(route('lecture'));
    }

    public function GetUpdateLecture($id)
    {
        $lecture = Lectures::find($id);

        return view('update-lecture', ['lecture' => $lecture, 'id' => $id]);
    }

    public function updateLecture(Request $request, $id)
    {
        $lecture = Lectures::find($id);
        $lecture->title = $request->get('titleU');
        $lecture->description = $request->get('descriptionU');
        $lecture->save();

        return redirect(route('lecture'));
    }

    public function destroyLecture($id)
    {
        Lectures::find($id)->delete();

        return redirect('lecture');
    }
}
