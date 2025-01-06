<?php

namespace App\Http\Controllers;

use App\Models\Page;

class ServiceController extends Controller
{
    public function index()
    {
        $content = Page::where('page', 'services')->first();
        return view('services', ['content' => $content]);
    }
}
