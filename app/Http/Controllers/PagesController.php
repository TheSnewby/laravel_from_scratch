<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about () {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => [
                'Web' => ['Web Design', 'Programming', 'Maintenance'],
                'Advertising' => ['SEO', 'Analytics', 'Content Strategy'],
        ]);
        return view('pages.services')->with($data);
    }
}
