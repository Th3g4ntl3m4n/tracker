<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class LatestPost extends Component
{
    public function render()
    {
        
        return view('livewire.latest-post',[
            'posts' => Post::latest()->take(3)->get()
        ]);
    }
}
