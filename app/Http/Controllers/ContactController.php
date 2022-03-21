<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mails = Contact::paginate(5);
        return view('admin.contact.main')->with(compact('mails'));
    }

    public function mail_search(Request $request)
    {

        $search = '%' . $request->search . '%';
        $mails = Contact::where('name', 'like', "%$search%")
            ->orWhere('email', 'like', $search)
            ->orWhere('phone', 'like', $search)
            ->orWhere('subject', 'like', $search)
            ->orWhere('msg', 'like', $search)
            ->orWhere('created_at', 'like', $search)
            ->paginate(100);
        return view("admin.contact.main", compact('mails'));
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
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin', $id);
        $id = Contact::findOrFail($id);
        $id->delete();
        return Redirect()->route('contact.index')->with('warning', 'mail delete');
    }
}
