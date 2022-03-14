<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function room_list()
    {
        $room = Room::all();
        $tags = Tag::all();
        return view('room-list', compact('room', 'tags'));
    }


    public function room_search(Request $request)
    {

        $tags = Tag::all();
        $search = '%' . $request->search . '%';
        $room = Room::where('city', 'like', "%$search%")
            ->orWhere('price', 'like', $search)
            ->get();
        return view("room-list", compact("room", 'tags'));
    }


    public function room_tag($id)
    {
        $tagId = Tag::find($id);
        $room = $tagId->rooms;
        $tags = Tag::all();
        return view("room-list", compact('room', 'tags'));
    }


    public function room_show(Room $id)
    {
        return view('room-show', compact('id'));
    }


    public function pageTitleRoom_show(Room $id)
    {
        return view('templates.components.room.page-title-room', compact('id'));
    }

    public function blog()
    {
        return view('blog');
    }
    public function team()
    {
        return view('team');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function contact()
    {
        return view('contact');
    }
    public function booking_form()
    {
        return view('booking-form');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
