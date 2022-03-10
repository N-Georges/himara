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
        $tag = Tag::all();
        return view('room-list', compact('room', 'tag'));
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
