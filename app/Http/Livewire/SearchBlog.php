<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchBlog extends Component
{
    public $search;
    public $posts;

    public function searchPost($value)
    {
        if($value){
            $this->posts = Post::where('title', 'like', '%'.$value.'%')->limit(5)->get();
            
        }else{
            $this->posts = '';
        }
    }

    public function render()
    {
        return view('livewire.search-blog');
    }
}
