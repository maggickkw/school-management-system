<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassRequest;
use App\Models\StudentClass;

class ClassController extends Controller
{
    public function createClass(CreateClassRequest $request)
    {
        $class = StudentClass::create($request->validated());

        return response()->json([
            'message' => 'Class created successfully',
            'class' => $class,
        ]);
    }

    public function getAllClasses()
    {
        $classes = StudentClass::all();

        return response()->json($classes);
    }

}

