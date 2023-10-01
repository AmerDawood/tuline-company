<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologys = Technology::orderByDesc('id')->paginate(4);
        return view('dashboard.technologys.index',compact('technologys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technology = new Technology();
        return view('dashboard.technologys.create',[
            'technology' =>$technology,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'image' =>'required',
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/technologes'), $img_name);


        Technology::create([
            'title' =>$request->title,
            'image' =>$img_name,
        ]);

        return redirect()->route('technologys.index')->with('msg','Technology Created Successfully');

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
        $technology = Technology::findOrFail($id);
        return view('dashboard.technologys.edit',[
            'technology' => $technology,
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable',
        ]);

        $technology = Technology::findOrFail($id);

        if ($request->hasFile('image')) {
            $img_name = rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/sections'), $img_name);

            if (file_exists(public_path('uploads/technologes/' . $technology->image))) {
                unlink(public_path('uploads/technologes/' . $technology->image));
            }

            $technology->image = $img_name;
        }

        $technology->title = $request->title;


        // Save
        $technology->save();

        return redirect()->route('technologys.index')->with('msg', 'Technology Updated Successfully');
    }




    public function destroy($id)
    {
        $technology = Technology::findOrFail($id);

        // Check if the image file exists and delete it
        if (Storage::exists('uploads/technologes/' . $technology->image)) {
            Storage::delete('uploads/technologes/' . $technology->image);
        }

        $technology->delete();

        return redirect()->route('technologys.index')->with('msg', 'Technology Deleted Successfully');
    }
}
