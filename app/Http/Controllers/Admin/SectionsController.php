<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::orderByDesc('id')->paginate(4);
        return view('dashboard.sections.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $section = new Section();
        return view('dashboard.sections.create',[
            'section' =>$section,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'image' =>'required',
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/sections'), $img_name);


        Section::create([
            'name' =>$request->name,
            'image' =>$img_name,
        ]);

        return redirect()->route('sections.index')->with('msg','Section Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('dashboard.sections.edit',[
            'section' => $section,
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable',
        ]);

        $section = Section::findOrFail($id);

        if ($request->hasFile('image')) {
            $img_name = rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/sections'), $img_name);

            if (file_exists(public_path('uploads/sections/' . $section->image))) {
                unlink(public_path('uploads/sections/' . $section->image));
            }

            $section->image = $img_name;
        }

        $section->name = $request->name;


        // Save
        $section->save();

        return redirect()->route('sections.index')->with('msg', 'Section Updated Successfully');
    }




    public function destroy($id)
    {
        $section = Section::findOrFail($id);

        // Check if the image file exists and delete it
        if (Storage::exists('uploads/sections/' . $section->image)) {
            Storage::delete('uploads/sections/' . $section->image);
        }

        $section->delete();

        return redirect()->route('sections.index')->with('msg', 'Section Deleted Successfully');
    }
}
