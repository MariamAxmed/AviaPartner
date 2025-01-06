<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
//    public function index()
//    {
//        $content = Page::where('title', 'home')->first();
//
//        if (!$content) {
//            $content = (object) ['text' => 'null'];
//        }
//        return view('home', ['content' => $content]);
//    }
    public function index()
    {
        return view('home');
    }
}
