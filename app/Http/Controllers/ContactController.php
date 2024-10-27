<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show() {
        return view('frontend.contact');
    }

    public function index() {
        $contacts = Contact::paginate(10);
        return view('backend.contact.index', compact('contacts'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|String|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'message' => 'required|max:1000'
        ]);
        Contact::create($validated);
        return redirect()->back();
    }

    public function destroy($id) {
        Contact::where('id', $id)->delete();
        return redirect()->route('admin.contact.index');
    }
}
