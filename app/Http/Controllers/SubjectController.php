<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\JsonResponse;

class SubjectController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getDays()
    {
        $days = Day::with('subject')
            ->with('professor')
            ->orderBy('date', 'ASC')
            ->get();

        return response()->json($days);
    }

    /**
     * @param $subjectId
     * @return JsonResponse
     */
    public function getProfile($subjectId)
    {
        return response()->json($subjectId);
    }
}
