<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use Illuminate\Http\Request;


class SchoolClassController extends Controller
{
    public function index()
    {
        $classes = SchoolClass::all();
        return $classes;
    }

    public function store(Request $request)
    {
        $class = new SchoolClass();
        $class->forceFill($request->all());
        $class->save();
        return $class;
    }

    public function update(Request $request, SchoolClass $class)
    {
        $class->update($request->all());
        return $class;
    }

    public function delete(SchoolClass $class)
    {
        $class->delete();
        return response(500);
    }
}
