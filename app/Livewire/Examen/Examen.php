<?php

namespace App\Livewire\Examen;

use Livewire\Component;
use App\Models\Question;

class Examen extends Component
{
    public $questions;
    public $offset;
    public $currentQuestionIndex = 0;

    public function index()
    {
             // Pasar las preguntas a la vista
        return view('examen.dashboard', compact('questions'));
    }
}
