<?php

namespace App\Http\Controllers;

use App\Day;
use App\Professor;
use App\Subject;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubjectController extends Controller
{
    public function getDays()
    {
        $days = Day::with('subject')
            ->with('professor')
            ->orderBy('date', 'ASC')
            ->get();

        return response()->json($days);
    }
}
