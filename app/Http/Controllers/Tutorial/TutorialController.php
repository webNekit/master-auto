<?php

namespace App\Http\Controllers\Tutorial;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        return view('tutorial::index', [
            'title' => 'Обучающие материалы',
        ]);
    }

    public function show($id)
    {
        $tutorial = Tutorial::findOrFail($id);
        return view('tutorial::show', [
            'title' => $tutorial->title,
            'tutorial' => $tutorial,
        ]);
    }
}
