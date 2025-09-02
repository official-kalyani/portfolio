<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['title', 'description','url']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('projects'), $imageName);
            $data['image'] = 'projects/' . $imageName;
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully');
    }


    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['title', 'description','url']);

        if ($request->hasFile('image')) {
            // Delete old image from public folder
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('projects'), $imageName);
            $data['image'] = 'projects/' . $imageName;
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated');
    }


    public function destroy(Project $project)
    {
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted');
    }

    // public function loadMore(Request $request)
    // {
    //     $skip = $request->input('skip');
    //     $take = 6; // how many to load each time

    //     $projects = Project::latest()->skip($skip)->take($take)->get();

    //     // Return rendered Blade partial
    //     $html = view('partials.project-cards', compact('projects'))->render();

    //     return response()->json(['html' => $html, 'count' => $projects->count()]);
    // }
    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);

        $projects = Project::latest()->paginate(4, ['*'], 'page', $page);

        $html = view('partials.project-cards', compact('projects'))->render();

        return response()->json([
            'html' => $html,
            'count' => $projects->count(),
        ]);
    }

}
