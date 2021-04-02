<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;


class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return $schools;
    }

    public function store(Request $request)
    {
        $schools = new School();
        $schools->forceFill($request->all());
        $schools->save();
        return $schools;
    }

    public function update(Request $request, School $schools)
    {
        $schools->update($request->all());
        return $schools;
    }

    public function delete(School $schools)
    {
        $schools->delete();
        return response(500);
    }
}
