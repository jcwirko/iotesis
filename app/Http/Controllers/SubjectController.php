<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubjectController extends Controller
{

    /**
     * @return Factory|View
     */
    public function getView()
    {
        $architecture = Subject::where('name', 'like', '%Arquitectura%')->first();
        $model = Subject::where('name', 'like', '%Modelo%')->first();
        return view('iot', compact('architecture', 'model'));
    }

    private function setValues($values)
    {
        for ($i = 1; $i <= 9; $i++) {
            if (isset($values["led{$i}"])) {
                $values["led{$i}"] = 1;
            } else {
                $values["led{$i}"] = 0;
            }
        }

        return $values;
    }

    public function setUp(Request $request)
    {
        $subject = Subject::find($request->input('id'));

        $subject->update($request->all());
    }

    public function show($id)
    {
        return response()->json(Subject::find($id));
    }
}
