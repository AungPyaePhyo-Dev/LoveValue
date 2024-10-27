<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show() {
        return view('frontend.service.video');
    }


    public function index() {
        $videoServices = Video::get();
        return view('backend.video_service.index', compact('videoServices'));
    }

    public function create() {
        return view('backend.video_service.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'url' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        $urlParts = parse_url($validated['url']);
        $videoId = basename($urlParts['path']);
        $validated['url'] = "https://www.youtube.com/embed/" . $videoId;
        $validated['service_id'] = 2;
        Video::create($validated);
        return redirect()->route('admin.video-service.index');
    }

    public function edit($id) {
        $videoService = Video::find($id);
        return view('backend.video_service.edit', compact('videoService'));
    }

    public function update($id, Request $request) {
        $validated = $request->validate([
            'url' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        $urlParts = parse_url($validated['url']);
        $videoId = basename($urlParts['path']);
        $validated['url'] = "https://www.youtube.com/embed/" . $videoId;
        Video::where('id', $id)->update($validated);
        return redirect()->route('admin.video-service.index');
    }

    public function destroy($id) {
        Video::where('id', $id)->delete();
        return redirect()->route('admin.video-service.index');
    }
}
