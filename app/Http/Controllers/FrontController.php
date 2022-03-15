<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Categories_blog;
use App\Models\Room;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $room = Room::all()->random(3); 
        return view('home', compact('room'));
    }

    ########################################################################## ROOM

    public function room_list()
    {
        $room = Room::paginate(5);
        $tags = Tag::all();
        $categorie = Categorie::all();
        return view('room-list', compact('room', 'categorie', 'tags'));
    }

    public function room_search(Request $request)
    {

        $tags = Tag::all();
        $search = '%' . $request->search . '%';
        $room = Room::where('city', 'like', "%$search%")
            ->orWhere('price', 'like', $search)
            ->paginate(100);
        $categorie = Categorie::all();
        return view("room-list", compact("room", 'categorie', 'tags'));
    }

    public function room_categorie($id)
    {
        $room = Room::where("categorie_id", $id)->paginate(100);
        $tags = Tag::all();
        $categorie = Categorie::all();
        return view("room-list", compact("categorie", "room", "tags"));
    }



    public function room_tag($id)
    {
        $tagId = Tag::find($id);
        $room = Room::with('tags')->whereHas('tags', function ($tag) use ($tagId) {
            $tag->whereIn('name', $tagId);
        })->paginate(100);
        $tags = Tag::all();
        $categorie = Categorie::all();
        return view("room-list", compact('room', 'categorie', 'tags'));
    }


    public function room_show(Room $id)
    {
        $room = Room::all()->random(3); 
        return view('room-show', compact('id', 'room'));
    }


    public function pageTitleRoom_show(Room $id)
    {
        return view('templates.components.room.page-title-room', compact('id'));
    }

    ######################################################################## BLOG

    public function blog()
    {
        $blog = Blog::paginate(3);
        $blogLast = Blog::latest('created_at')->take(4)->get();
        $categorie = Categories_blog::all();
        return view('blog', compact('blog', 'blogLast', 'categorie'));
    }


    public function blog_show(Blog $id)
    {
        // $blog = Blog::all()->random(3); 
        return view('blog-show', compact('id'));
    }


    public function blog_search(Request $request)
    {
        $categorie = Categories_blog::all();
        $blogLast = Blog::latest('created_at')->take(4)->get();
        $search = '%' . $request->search . '%';
        $blog = Blog::where('title', 'like', "%$search%")->paginate(100);
        return view("blog", compact("blog", 'blogLast', "categorie"));
    }

    
    public function blog_categorie($id)
    {
        $blog = Blog::where("categorie_id", $id)->paginate(100);
        $blogLast = Blog::latest('created_at')->take(4)->get();;
        $categorie = Categories_blog::all();
        return view("blog", compact("categorie", 'blogLast', "blog"));
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
