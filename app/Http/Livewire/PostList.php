<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostList extends Component
{
    public function render()
    {
        return view('livewire.post-list',  ['posts' => Post::latest()->paginate(10)])->layout('layouts.app');
    }
}
