<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view("sections.index", compact("sections"));
    }

    public function create()
    {
        $courses = Course::all();
        return view("sections.add", compact("courses"));
    }
    public function store(SectionRequest $request)
    {
        Section::create($request->all());
        Session::flash('alertSuccessMessage', 'Bölüm Kaydı Başarılı!');
        return redirect()->route('sections.index');
    }
    public function update(SectionRequest $request, Section $section)
    {
        $section->update([
            'name' => $request->input('name'),
            "course_id" => $request->input('course_id')
        ]);
        Session::flash('alertSuccessMessage', 'Bölüm Güncelleme Başarılı!');
        return redirect()->route('sections.index');
    }

    public function edit(Section $section)
    {
        $courses = Course::all();
        return view("sections.update", compact("section", "courses"));
    }


    public function destroy(Section $section)
    {
        $section->delete();
        Session::flash('alertSuccessMessage', 'Bölüm Silme Başarılı!');

        return redirect()->route('sections.index');
    }
}
