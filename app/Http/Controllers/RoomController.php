<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::paginate(5);
        return view('admin.room.main', compact('room'));
    }


    public function room_search(Request $request)
    {

        $search = '%' . $request->search . '%';
        $room = Room::where('city', 'like', "%$search%")
            ->orWhere('price', 'like', $search)
            ->paginate(100);
        return view("admin.room.main", compact('room'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('admin.room.create' , compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room();
        $room -> image = $request['image'] = 'images\rooms\deluxe\deluxe.jpg';
        $room -> city = $request->city;
        $room -> description = $request->description;
        $room -> price = $request->price;
        $room -> categorie_id = $request->categorie_id;
        $room -> save();

        return redirect()->route('room.index')->with('success', 'room create successfuly');
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
    public function edit(Room $id)
    {
        $room = $id;
        $categorie = Categorie::all();
        return view('admin.room.edit', compact('room', 'categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $id)
    {

        $request->validate(
            [
                'city' => 'required|max:50',
                'price' => 'required|numeric',
            ],

        );
        $this->authorize('isAdmin', $id);
        $room = $id;
        $room->update($request->all());

        return redirect()->route('room.index')->with('success', 'room update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $id)
    {
        $this->authorize('isAdmin', $id);
        $id->delete();
        return Redirect()->route('room.index')->with('warning', 'room delete');
    }
}
