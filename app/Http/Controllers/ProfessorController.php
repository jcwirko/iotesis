<?php

namespace App\Http\Controllers;

use App\Professor;

class ProfessorController extends Controller
{
    public function getProfessor()
    {
        return Professor::first();
    }
}
