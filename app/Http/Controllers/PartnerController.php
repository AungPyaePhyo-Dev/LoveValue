<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::get();
        return view('backend.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'url' => 'required|mimes:jpg,png,jpeg'
        ]);
        $file = $request->file('url');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $validated['url'] = "uploads/" . $fileName;
        Partner::create($validated);
        return redirect()->route('admin.partner.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'url' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        if($request->has('url')) {
            $file = $request->file('url');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $validated['url'] = "uploads/" . $fileName;
        }
        Partner::where('id', $partner->id)->update($validated);
        return redirect()->route('admin.partner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('admin.partner.index');
    }
}
