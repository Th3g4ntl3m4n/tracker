<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class AllPost extends Component
{
    public function render()
    {
        return view('livewire.all-post',[
           
            'posts' => Post::All()
            
        ]);        
    }
}
