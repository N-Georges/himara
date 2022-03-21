<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::paginate(5);
        return view('admin.team.main', compact('team'));
    }

    public function team_search(Request $request)
    {

        $search = '%' . $request->search . '%';
        $team = Team::where('name', 'like', "%$search%")
            ->orWhere('job', 'like', $search)
            ->paginate(100);
        return view("admin.team.main", compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'image' => 'required',
                'name' => 'required',
                'job' => 'required',
                'description' => 'required',
            ],
        );
        $team = new Team();

        //STORAGE
        $path = 'himara/images/';
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $newImage = date('Ymd') . uniqid() . '.jpg';
            $file->move(public_path($path), $newImage);
        } else {
            $newImage = $team->image;
        }



        $team->image = $newImage;
        $team->name = $request->name;
        $team->job = $request->job;
        $team->description = $request->description;
        $team->save();

        return redirect()->route('team.index')->with('success', 'team create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $id)
    {
        $team = $id;
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $id)
    {
        $this->authorize('isAdmin', $id);
        $team = $id;

        //STORAGE
        $path = 'himara/images/';
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $newImage = date('Ymd') . uniqid() . '.jpg';
            $file->move(public_path($path), $newImage);
        } else {
            $newImage = $team->image;
        }

        // DB
        $team->image = $newImage;
        $team->name = $request->name;
        $team->job = $request->job;
        $team->description = $request->description;

        $team->save();

        return redirect()->route('team.index')->with('success', 'team update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $id)
    {
        $this->authorize('isAdmin', $id);
        $id->delete();
        return Redirect()->route('team.index')->with('warning', 'team delete');
    }
}
