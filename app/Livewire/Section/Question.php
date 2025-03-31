<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Question extends Component
{
    public function getQuestionsProperty()
    {
        $questions =  \App\Models\Question::orderByDesc('created_at')
            ->where('is_active', true)
            ->get();
        return $questions;
    }

    public function render()
    {
        return view('livewire.section.question', [
            'questions' => $this->getQuestionsProperty(),
        ]);
    }
}
