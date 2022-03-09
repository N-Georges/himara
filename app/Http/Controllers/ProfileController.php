<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(User $id, Request $request)
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

        $this->authorize('isRealUser', $id);
        $user = $id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.index')->with('success', 'Personal information successfully updated');
    }

    public function update_password(User $id, Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:6|max:100',
            'new_password' => 'required|min:6|max:100',
            'confirm_password' => 'required|same:new_password'
        ]);

        $this->authorize('isRealUser', $id);
        $current_user = auth()->user();

        if (Hash::check($request->old_password, $current_user->password)) {

            $current_user->update([
                'password' => bcrypt($request->new_password)
            ]);

            return redirect()->route('profile.index')->with('success', 'Password successfully updated.');
        } else {
            return redirect()->route('profile.index')->with('warning', 'Old password does not matched.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
