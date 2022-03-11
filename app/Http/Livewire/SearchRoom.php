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
        $search = '%' . $this->search . '%';
        $this->room = Room::where('city', 'like', $search)->get();
        // $this->room = Room::where('price', 'like', $search)->get();
        $tag = tag::all();
        return view('livewire.search-room', compact('tag'));
    }
    
}
