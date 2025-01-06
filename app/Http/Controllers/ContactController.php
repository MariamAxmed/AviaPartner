<?php

use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\Page;

class ContactController extends Controller
{
    public function index()
    {
        $content = Page::where('page', 'contact')->first();
        return view('contact', ['content' => $content]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        ContactModel::create($validated);

        return redirect('/contact')->with('success', 'Message sent successfully!');
    }
}
