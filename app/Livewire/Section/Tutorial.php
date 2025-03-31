<?php

namespace App\Livewire\Section;

use App\Models\Tutorial as ModelsTutorial;
use Livewire\Component;

class Tutorial extends Component
{
    public function getTutorialsProperty()
    {
        $tutorials = ModelsTutorial::orderByDesc('created_at')
            ->where('is_active', true)
            ->when(request()->routeIs('main.index'), fn($q) => $q->where('is_popular', true))
            ->get();
        return $tutorials;
    }
    public function render()
    {
        return view('livewire.section.tutorial', [
            'tutorials' => $this->getTutorialsProperty(),
        ]);
    }
}
