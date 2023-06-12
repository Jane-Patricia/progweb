<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Article;

class IndexArticle extends Component
{
    protected $listeners = [
        'indexArticle'
    ];

    public function render()
    {
        $art = Article::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.index-article', ['art' => $art]);
    }

    public function indexArticle($article){

    }
}
