<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $site = Site::where('id', 1)->findOrFail(1);

        return view('pages/site', compact("site"));

    }

    public function update(Request $request)
    {
        $site = Site::findOrFail($request->id);
        $site->title = is_null($request->title) ? $site->title : $request->title;
        $site->keywords = is_null($request->keywords) ? $site->keywords : $request->keywords;
        $site->owner = is_null($request->owner) ? $site->owner : $request->owner;
        $site->owner_email = is_null($request->owner_email) ? $site->owner_email : $request->owner_email;
        $site->owner_phone = is_null($request->owner_phone) ? $site->owner_phone : $request->owner_phone;
        $site->description = is_null($request->description) ? $site->description : $request->description;
        $site->save();
        $request->session()->flash('success', 'Site information has been updated successfully!');
        return view('pages/site', compact("site"));

    }





}
