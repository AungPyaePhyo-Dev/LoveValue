<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function show() {
        return view('frontend.service.photo');
    }


    public function index() {
        $photoServices = Photo::get();
        return view('backend.photo_service.index', compact('photoServices'));
    }

    public function create() {
        return view('backend.photo_service.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'url' => 'required|mimes:jpg,png,jpeg'
        ]);
        $validated['service_id'] = 3;

        $file = $request->file('url');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $validated['url'] = "uploads/" . $fileName;
        Photo::create($validated);
        return redirect()->route('admin.photo-service.index');
    }

    public function edit($id) {
        $photoService = Photo::find($id);
        return view('backend.photo_service.edit', compact('photoService'));
    }

    public function update($id, Request $request) {
        $validated = $request->validate([
            'url' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('url');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $validated['url'] = "uploads/" . $fileName;
        Photo::where('id', $id)->update($validated);
        return redirect()->route('admin.photo-service.index');
    }

    public function destroy($id) {
        Photo::where('id', $id)->delete();
        return redirect()->route('admin.photo-service.index');
    }

}
