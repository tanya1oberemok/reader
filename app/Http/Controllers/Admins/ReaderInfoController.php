<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\ReaderInfo;
use Illuminate\Http\Request;


class ReaderInfoController extends Controller
{
    public function index()
    {
        $info = ReaderInfo::all();
        return $info;
    }

    public function store(Request $request)
    {
        $info = new ReaderInfo();
        $info->forceFill($request->all());
        $info->save();
        return $info;
    }

    public function update(Request $request, ReaderInfo $info)
    {
        $info->update($request->all());
        return $info;
    }
}
