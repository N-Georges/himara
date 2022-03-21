<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Categories_blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(5);
        return view('admin.blog.main', compact('blog'));
    }

    public function blog_search(Request $request)
    {

        $search = '%' . $request->search . '%';
        $blog = Blog::where('title', 'like', "%$search%")
            ->paginate(100);
        return view("admin.blog.main", compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categories_blog::all();
        $author = Author::all();
        return view('admin.blog.create', compact('categorie', 'author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();

        //STORAGE
        $path = 'himara/images/';
        $file = $request->file('image');
        $newImage = date('Ymd') . uniqid() . '.jpg';
        $file->move(public_path($path), $newImage);


        $blog->image = $newImage;
        $blog->title = $request->title;
        $blog->author_id = $request->author_id;
        $blog->categorie_id = $request->categorie_id;
        $blog->description = $request->description;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'blog create successfuly');
    }



    public function createCat()
    {
        return view('admin.blog.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCat(Request $request)
    {
        $blog = new Categories_blog();
        $blog->name = $request->name;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'blog categorie create successfuly');
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
    public function edit(Blog $id)
    {
        $blog = $id;
        $categorie = Categories_blog::all();
        $author = Author::all();
        return view('admin.blog.edit', compact('blog', 'categorie', 'author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $id)
    {
        $this->authorize('isAdmin', $id);
        $blog = $id;

        //STORAGE
        $path = 'himara/images/';
        $file = $request->file('image');
        $newImage = date('Ymd') . uniqid() . '.jpg';
        $file->move(public_path($path), $newImage);

        // DB
        $blog->image = $newImage;
        $blog->title = $request->title;
        $blog->author_id = $request->author_id;
        $blog->categorie_id = $request->categorie_id;
        $blog->description = $request->description;

        
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'blog update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $id)
    {
        $this->authorize('isAdmin', $id);
        $id->comments()->delete();
        $id->delete();
        return Redirect()->route('blog.index')->with('warning', 'blog delete');
    }
}
