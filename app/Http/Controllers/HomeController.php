<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('projects', compact('projects'));
    }

    public function contact(Request $request)
    {
        Contact::create($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:1000'
        ]));

        return back()->with('success', 'Message sent!');
    }
}
