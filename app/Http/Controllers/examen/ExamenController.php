<?php

namespace App\Http\Controllers\examen;

use App\Http\Controllers\Controller;
use App\Models\Question;

class ExamenController extends Controller
{
    public function index($page = 0)
    {
        // Calcular el desplazamiento basado en la página actual
        if ($page < 1) {
            $offset = 0;
            // Recuperar las preguntas de acuerdo a la página actual
            $questions = Question::orderBy('n_question', 'asc')->get();
            
            // Pasar las preguntas a la vista
            return view('examen.dashboard', compact('questions', 'offset'));
        } else {
            $offset = $page - 10;
          // Recuperar las preguntas de acuerdo a la página actual
        $questions = Question::orderBy('n_question', 'asc')->skip($offset)->take(10)->get();

        // Pasar las preguntas a la vista
        return view('examen.dashboard', compact('questions','offset'));
        }

    }
}
