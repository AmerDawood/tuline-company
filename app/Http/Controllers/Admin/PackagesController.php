<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::orderByDesc('id')->paginate(4);
        return view('dashboard.services.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = new Service();
        return view('dashboard.services.create',[
            'service' =>$service,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'image' =>'required',
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/services'), $img_name);


        Service::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'image' =>$img_name,
        ]);

        return redirect()->route('services.index')->with('msg','Service Created Successfully');

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
        $service = Service::findOrFail($id);
        return view('dashboard.services.edit',[
            'service' => $service,
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('image')) {
            $img_name = rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/sections'), $img_name);

            if (file_exists(public_path('uploads/services/' . $service->image))) {
                unlink(public_path('uploads/services/' . $service->image));
            }

            $service->image = $img_name;
        }

        $service->title = $request->title;
        $service->description = $request->description;



        // Save
        $service->save();

        return redirect()->route('services.index')->with('msg', 'Services Updated Successfully');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Check if the image file exists and delete it
        if (Storage::exists('uploads/services/' . $service->image)) {
            Storage::delete('uploads/services/' . $service->image);
        }

        $service->delete();

        return redirect()->route('services.index')->with('msg', 'Service Deleted Successfully');
    }
}
