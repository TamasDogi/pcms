<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function index()
    {
        $contents = Contents::all();
        return view('pages/contents', compact("contents", ));
    }

    public function edit($id)
    {
        $content = Contents::find($id);
        return view('pages/editContent', compact("content", ));
    }

    public function create(Request $request)
    {
        return view('pages/createContent');
    }

    public function created(Request $request)
    {
        $content = Contents::create([
            'siteID' => 1,
            'contentID' => $request->contentID,
            'content_value' => $request->content_value,
        ]);
        $request->session()->flash('success', 'Content has been created!');

        return view('pages/createContent', compact("content"));
    }

    public function update(Request $request)
    {
        $content = Contents::findOrFail($request->id);
        $content->contentID = is_null($request->contentID) ? $content->contentID : $request->contentID;
        $content->content_value = is_null($request->content_value) ? $content->content_value : $request->content_value;
        $content->save();
        $request->session()->flash('success', 'Content has been updated successfully!');
        return view('pages/editContent', compact("content"));

    }


}
