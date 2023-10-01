<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::orderByDesc('id')->paginate(4);
        return view('dashboard.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $package = new Package();
        return view('dashboard.packages.create',[
            'package' =>$package,
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
            'price' =>'required',
            'image' =>'required',
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/packages'), $img_name);


        Package::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'price' =>$request->price,
            'image' =>$img_name,
        ]);

        return redirect()->route('packages.index')->with('msg','Package Created Successfully');

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
        $package = Package::findOrFail($id);
        return view('dashboard.packages.edit',[
            'package' => $package,
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'nullable',
            'image' => 'nullable',
        ]);

        $package = Package::findOrFail($id);

        if ($request->hasFile('image')) {
            $img_name = rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/packages'), $img_name);

            if (file_exists(public_path('uploads/packages/' . $package->image))) {
                unlink(public_path('uploads/packages/' . $package->image));
            }

            $package->image = $img_name;
        }

        $package->title = $request->title;
        $package->description = $request->description;



        // Save
        $package->save();

        return redirect()->route('packages.index')->with('msg', 'Package Updated Successfully');
    }


    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        // Check if the image file exists and delete it
        if (Storage::exists('uploads/packages/' . $package->image)) {
            Storage::delete('uploads/packages/' . $package->image);
        }

        $package->delete();

        return redirect()->route('packages.index')->with('msg', 'Package Deleted Successfully');
    }
}
