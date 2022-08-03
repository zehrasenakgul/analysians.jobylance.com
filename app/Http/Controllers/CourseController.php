<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Enums\noImagePath;
use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = CourseCategory::all();
        return view('courses.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $filePath = noImagePath::PATH;
        if ($request->hasFile('upload')) {
            $filePath = ("courseImage/" . md5(uniqid()) . '.' . $request->file('upload')->getClientOriginalExtension());
            $request->file('upload')->move(public_path('courseImage'), $filePath);
        }
        $course->name = $request->input('name');
        $course->desc = $request->input('desc');
        $course->category_id  = $request->input('category_id');
        $course->price = $request->input('price');
        $course->url = $request->input('url');
        $course->upload = $filePath;
        $course->save();
        Session::flash('alertSuccessMessage', 'Kurs Kaydı Başarılı!');
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = CourseCategory::all();
        return view('courses.update', compact('categories', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

        $filePath = $course->upload;
        if ($request->hasFile('upload')) {
            $filePath = ("courseImage/" . md5(uniqid()) . '.' . $request->file('upload')->getClientOriginalExtension());
            $request->file('upload')->move(public_path('courseImage'), $filePath);
        }

        $course->name = $request->input('name');
        $course->category_id = $request->input('category_id');
        $course->desc = $request->input('desc');
        $course->price = $request->input('price');
        $course->url = $request->input('url');
        $course->upload = $filePath;

        $course->save();
        Session::flash('alertSuccessMessage', 'Kurs Güncelleme Başarılı!');
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        Session::flash('alertSuccessMessage', 'Kurs Silme Başarılı!');

        return redirect()->route('courses.index');
    }
}
