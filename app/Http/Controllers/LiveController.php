<?php

namespace App\Http\Controllers;

use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function show() {
        return view('frontend.service.live');
    }

    public function index() {
        $liveServices = Live::get();
        return view('backend.live_service.index', compact('liveServices'));
    }

    public function create() {
        return view('backend.live_service.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'url' => 'required|mimes:jpg,png,jpeg'
        ]);
        $validated['service_id'] = 1;

        $file = $request->file('url');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $validated['url'] = "uploads/" . $fileName;
        Live::create($validated);
        return redirect()->route('admin.live-service.index');
    }

    public function edit($id) {
        $liveService = Live::find($id);
        return view('backend.live_service.edit', compact('liveService'));
    }

    public function update($id, Request $request) {
        $validated = $request->validate([
            'url' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('url');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $validated['url'] = "uploads/" . $fileName;
        Live::where('id', $id)->update($validated);
        return redirect()->route('admin.live-service.index');
    }

    public function destroy($id) {
        Live::where('id', $id)->delete();
        return redirect()->route('admin.live-service.index');
    }
}
