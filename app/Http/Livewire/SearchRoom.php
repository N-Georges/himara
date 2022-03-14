<?php

namespace App\Http\Livewire;

use App\Models\Room;
use App\Models\Tag;
use Livewire\Component;

class SearchRoom extends Component
{
    public $search = '';
    public function render()
    {
        $tag = Tag::all();
        $search = '%' . $this->search . '%';
        $this->room = Room::where('city', 'like', $search)
            ->orWhere('price', 'like', $search)
            ->get();
        return view('livewire.search-room', compact('tag'));
    }

}

