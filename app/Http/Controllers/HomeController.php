<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ]);

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'body'    => $request->message,
        ];

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            $mail->from($data['email'], $data['name']);
            $mail->to('tikikalyani91@gmail.com') // change to your email
                 ->subject($data['subject']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
