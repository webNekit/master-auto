<?php

namespace App\Livewire\Section;

use App\Models\Article;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        $articles = Article::orderByDesc('created_at')->where('is_banner', true)->get();
        return view('livewire.section.banner', [
            'articles' => $articles,
        ]);
    }
}
