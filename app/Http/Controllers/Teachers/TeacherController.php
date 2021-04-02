<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::id())->get();
        return $user;
    }


    public function update(TeacherRequest $request)
    {
        $user = $request->user();
        $user->update($request->all());

        if ($request->filled('password')) {
            $user->password = Hash::make($request->get('password'));
            $user->save();
        }

        return $user;
    }
}
