<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\TagGallerie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallerie::paginate(5);
        return view('admin.gallery.main', compact('gallery'));
    }

    public function gallery_search(Request $request)
    {

        $search = '%' . $request->search . '%';
        $gallery = Gallerie::where('name', 'like', "%$search%")
            ->paginate(100);
        return view("admin.gallery.main", compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = TagGallerie::all();
        return view('admin.gallery.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
                'name' => 'required',
            ],
        );
        $gallery = new Gallerie();

        //STORAGE
        $path = 'himara/images/';
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $newImage = date('Ymd') . uniqid() . '.jpg';
            $file->move(public_path($path), $newImage);
        } else {
            $newImage = $gallery->image;
        }



        $gallery->image = $newImage;
        $gallery->name = $request->name;
        $gallery->tag_gallerie_id = $request->tag_gallerie_id;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'gallery create successfuly');
    }

    public function createTag()
    {
        return view('admin.gallery.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTag(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
            ],
        );
        $tag = new TagGallerie();
        $tag->name = $request->name;
        // $tag->filter = $request->filter;
        $tag->filter = Str::slug($request->input('name'));
        $tag->save();

        return redirect()->route('gallery.index')->with('success', 'gallery tag create successfuly');
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
    public function edit(Gallerie $id)
    {
        $gallery = $id;
        $tag = TagGallerie::all();
        return view('admin.gallery.edit', compact('gallery', 'tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallerie $id)
    {
        $request->validate(
            [
                'name' => 'required',
            ],
        );
        $this->authorize('isAdmin', $id);
        $gallery = $id;

        //STORAGE
        $path = 'himara/images/';
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $newImage = date('Ymd') . uniqid() . '.jpg';
            $file->move(public_path($path), $newImage);
        } else {
            $newImage = $gallery->image;
        }

        // DB
        $gallery->image = $newImage;
        $gallery->name = $request->name;
        $gallery->tag_gallerie_id = $request->tag_gallerie_id;

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'gallery update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin', $id);
        $id = Gallerie::findOrFail($id);
        $id->delete();
        return Redirect()->route('gallery.index')->with('warning', 'gallery delete');
    }
}
