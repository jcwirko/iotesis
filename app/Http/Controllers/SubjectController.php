<?php

namespace App\Http\Controllers;

use App\ClassRoom;
use App\Day;
use App\Subject;
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
        $subject = Subject::where('id', $subjectId)->with('day')->with(['professorSubject' => function ($q) {
            return $q->with('classroomProfiles.classroomeable');
        }])->first();

        return response()->json($subject);
    }
}
