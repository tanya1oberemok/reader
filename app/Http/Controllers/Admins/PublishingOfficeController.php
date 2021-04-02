<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\PublishingOffice;
use Illuminate\Http\Request;


class PublishingOfficeController extends Controller
{
    public function index()
    {
        $publishingOffices = PublishingOffice::all();
        return $publishingOffices;
    }

    public function store(Request $request)
    {
        $publishingOffices = new PublishingOffice();
        $publishingOffices->forceFill($request->all());
        $publishingOffices->save();
        return $publishingOffices;
    }

    public function update(Request $request, PublishingOffice $publishingOffices)
    {
        $publishingOffices->update($request->all());
        return $publishingOffices;
    }

    public function delete(PublishingOffice $publishingOffices)
    {
        $publishingOffices->delete();
        return response(500);
    }
}
