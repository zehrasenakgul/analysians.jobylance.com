<?php

namespace App\Http\Controllers;

use App\Enums\noImagePath;
use App\Models\Part;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all();
        return view("parts.index", compact("parts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view("parts.add", compact("sections"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $part = new part();
        $filePath = noImagePath::PATH;
        if ($request->hasFile('upload')) {
            $filePath = ("parts/" . md5(uniqid()) . '.' . $request->file('upload')->getClientOriginalExtension());
            $request->file('upload')->move(public_path('parts'), $filePath);
        }
        $part->name = $request->input('name');
        $part->section_id  = $request->input('section_id');
        $part->upload = $filePath;
        $part->save();
        Session::flash('alertSuccessMessage', 'Part Kaydı Başarılı!');
        return redirect()->route('parts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        $sections = Section::all();
        return view("parts.update", compact("sections", "part"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        $filePath = $part->upload;

        if ($request->hasFile('upload')) {
            $filePath = ("parts/" . md5(uniqid()) . '.' . $request->file('upload')->getClientOriginalExtension());
            $request->file('upload')->move(public_path('parts'), $filePath);
        }
        $part->name = $request->input('name');
        $part->section_id  = $request->input('section_id');
        $part->upload = $filePath;
        $part->save();
        Session::flash('alertSuccessMessage', 'Part Güncelleme Başarılı!');
        return redirect()->route('parts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        $part->delete();
        Session::flash('alertSuccessMessage', 'Part Silme Başarılı!');

        return redirect()->route('parts.index');
    }
}
