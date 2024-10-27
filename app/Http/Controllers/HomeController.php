<?php

namespace App\Http\Controllers;

use App\Models\HomeConfiguration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() {
        $homeConfig = HomeConfiguration::first();
        return view('backend.home.index', compact('homeConfig'));
    }

    public function edit($id) {
        $homeConfig = HomeConfiguration::where('id', $id)->first();
        return view('backend.home.edit', compact('homeConfig'));
    }

    public function update($id, Request $request) {
        $validated = $request->validate([
            'about_title' => 'required|max:255',
            'about_description' => 'required',
            'about_image' => 'required|mimes:jpg,png,jpeg',
            'bg_image' => 'required|mimes:jpg,png,jpeg',
            'location' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|max:255'
        ]);
        HomeConfiguration::where('id', $id)
                            ->update($validated);
        return redirect()->route('admin.dashboard');
    }
}
