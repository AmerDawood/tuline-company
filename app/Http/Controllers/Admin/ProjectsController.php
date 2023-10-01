<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        $technologes = Technology::all();
        return view('dashboard.projects.create',['project'=>$project ,'technologes'=>$technologes]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'image' =>'required',
            'link' =>'required',
            'technologies_id' =>'required',
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/projects'), $img_name);


        Project::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'image' =>$img_name,
            'link' =>$request->link,
            'technologies_id' =>$request->technologies_id,

        ]);

        return redirect()->route('projects.index')->with('msg','Project Created Successfully');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
