<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.user.main', compact('user'));
    }

    public function user_search(Request $request)
    {

        $search = '%' . $request->search . '%';
        $user = User::where('name', 'like', "%$search%")
            ->orWhere('email', 'like', $search)
            ->paginate(100);
        return view("admin.user.main", compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('admin.user.create' , compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> role_id = $request->role_id;
        $user -> password = Hash::make('password');
        $user -> save();

        return redirect()->route('user.index')->with('success', 'user create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
    public function edit(User $id)
    {
        $user = $id;
        $role = Role::all();
        return view('admin.user.edit', compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {

        $request->validate(
            [
                'name' => 'required|max:50',
                'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            ],
            [
                'email.regex' => 'email format not correct, please use this format "user@example.com" ',
            ]

        );
        $this->authorize('isAdmin', $id);
        $user = $id;
        $user->update($request->all());

        return redirect()->route('user.index')->with('success', 'user update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $this->authorize('isAdmin', $id);
        // dd($id);
        $id->delete();
        return Redirect()->route('user.index')->with('warning', 'user delete');
    }
}
