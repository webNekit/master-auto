<?php

namespace App\Livewire\Section;

use App\Models\Article as ArticleModel;
use App\Models\CategoryArticle;
use Livewire\Attributes\Url;
use Livewire\Component;

class Article extends Component
{
    #[Url]
    public $category;

    public function getArticlesProperty()
    {
        $articles = ArticleModel::query()
            ->where('is_active', true)
            ->when(request()->routeIs('main.index'), fn($q) => $q->where('is_popular', true))
            ->when($this->category, fn($q) => $q->where('category_article_id', $this->category))
            ->orderByDesc('created_at')
            ->get();
        return $articles;
    }

    public function getCategoriesProperty()
    {
        $categories = CategoryArticle::where('is_active', true)->get();
        return $categories;
    }

    public function selectCategory($categoryId)
    {
        $this->category = $categoryId;
    }

    public function render()
    {
        return view('livewire.section.article', [
            'articles' => $this->getArticlesProperty(),
            'categories' => $this->getCategoriesProperty(),
        ]);
    }
}
