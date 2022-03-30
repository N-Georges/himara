<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Categorie;
use App\Models\Categories_blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Gallerie;
use App\Models\Room;
use App\Models\Service;
use App\Models\Tag;
use App\Models\TagBlog;
use App\Models\TagGallerie;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\all;

class FrontController extends Controller
{
    public function home()
    {
        $room = Room::all()->random(3); 
        $comment = Comment::all(); 
        $gallerie = Gallerie::all(); 
        $blogLast = Blog::latest('created_at')->take(3)->get();
        $service = Service::all();
        $categorie = Categorie::all();
        return view('home', compact('room', 'blogLast', 'comment', 'gallerie', 'service', 'categorie'));
    }

    ################################# ROOM

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

    ################################# BLOG

    public function blog()
    {
        $blog = Blog::paginate(3);
        $tags = Tagblog::all();
        $blogLast = Blog::latest('created_at')->take(4)->get();
        $categorie = Categories_blog::all();
        return view('blog', compact('blog', 'blogLast', 'tags', 'categorie'));
    }


    public function blog_show(Blog $id)
    {
        $tags = TagBlog::all()->random(3);
        $comments = Comment::all();
        return view('blog-show', compact('id', 'tags', 'comments'));
    }


    public function blog_search(Request $request)
    {
        $categorie = Categories_blog::all();
        $blogLast = Blog::latest('created_at')->take(4)->get();
        $search = '%' . $request->search . '%';
        $tags = TagBlog::all();
        $blog = Blog::where('title', 'like', "%$search%")->paginate(100);
        return view("blog", compact("blog", 'blogLast', "categorie", 'tags'));
    }

    
    public function blog_categorie($id)
    {
        $blog = Blog::where("categorie_id", $id)->paginate(100);
        $blogLast = Blog::latest('created_at')->take(4)->get();
        $categorie = Categories_blog::all();
        $tags = TagBlog::all();
        return view("blog", compact("categorie", 'blogLast', "blog", 'tags'));
    }

    public function blog_tag($id)
    {
        $tagId = TagBlog::find($id);
        $blogLast = Blog::latest('created_at')->take(4)->get();
        $blog = Blog::with('tag_blogs')->whereHas('tag_blogs', function ($tag) use ($tagId) {
            $tag->whereIn('name', $tagId);
        })->paginate(100);
        $tags = TagBlog::all();
        $categorie = Categories_blog::all();
        return view("blog", compact('blog', 'categorie', 'tags', 'blogLast'));
    }

    public function team()
    {
        $team = Team::all();
        return view('team', compact('team'));
    }
    
    public function gallery()
    {
        $gallerie = Gallerie::all();
        $gallerietag = TagGallerie::all();
        return view('gallery', compact('gallerie', 'gallerietag'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        $mail = new Contact();
        
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->phone = $request->phone;
        $mail->subject = $request->subject;
        $mail->msg = $request->msg;
		$mail->save();
        $sender = $mail->email = $request->email;

        Mail::to('ngeorges.dev@gmail.com')->send(new ContactMail($mail));
        Mail::to($sender)->send(new ContactMail($mail));

        return back()->with('message sent','Your message as been sent successfuly');
    }

    public function booking_form()
    {
        $categorie = Categorie::all();
        return view('booking-form', compact('categorie'));
    }

    public function booking_store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'booking_date' => ['required'],
            'adult' => ['required'],
            'children' => ['required'],
        ]);
        // dd($request->booking_date);
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
        dd($booking);

        $booking->save();
        return back()->with('success', 'Booking room successfuly');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
