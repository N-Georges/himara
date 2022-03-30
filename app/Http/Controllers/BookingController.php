<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Categorie;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $categorie = Categorie::all();
    //     return view('booking-form', compact('categorie'));
    // }

    public function booking_form()
    {
        $categorie = Categorie::all();
        return view('booking-form', compact('categorie'));
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
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'booking_date' => ['required'],
            'adult' => ['required'],
            'children' => ['required'],
        ]);
        $dates = explode(' - ', $request->booking_date);
        // dd($dates);
        $start = $dates[0];
        $end = $dates[1];
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->start = Carbon::parse($start);
        $booking->end = Carbon::parse($end);
        $booking->adult = $request->adult;
        $booking->children = $request->children;
        $booking->comment = $request->comment;
        $booking->phone = $request->phone;
        $booking->country = $request->country;
        // $booking->valide = false;
        $booking->categorie_id = $request->categorie_id;

        $booking->save();
        return back()->with('success', 'Booking room successfuly');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
