<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Hero;
use Illuminate\Http\Request;


class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return $heroes;
    }

    public function store(Request $request)
    {
        $hero = new Hero();
        $hero->forceFill($request->all());
        $hero->save();

//        if ($request->filled('phrases')) {
//            $hero->phrases()->create($request->get('phrases'));
//        }

        return $hero;
    }

    public function update(Request $request, Hero $hero)
    {
        $hero->update($request->all());
        return $hero;
    }

    public function delete(Hero $hero)
    {
        $hero->delete();
        return response(500);
    }
}
