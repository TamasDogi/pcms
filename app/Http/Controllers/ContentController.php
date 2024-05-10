<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{

    public function apiView($id): \Illuminate\Http\JsonResponse
    {
        $pages = Contents::where(['siteID' => $id, 'status' => 1])->get();
        return response()->json($pages);
    }

    public function index()
    {
        $contents = Contents::where('siteID', Auth::user()->siteID)->get();
        return view('pages/contents', compact("contents", ));
    }

    public function edit($id)
    {
        $role = Auth::user()->role;
        $content = Contents::find($id);
        return view('pages/editContent', compact("content", "role"));
    }

    public function create(Request $request)
    {
        return view('pages/createContent');
    }

    public function created(Request $request)
    {
        $content = Contents::create([
            'siteID' => Auth::user()->siteID,
            'contentID' => $request->contentID,
            'status' => 1,
            'content_value' => $request->content_value,
        ]);
        $request->session()->flash('success', 'Content has been created!');

        return view('pages/createContent', compact("content"));
    }

    public function update(Request $request)
    {
        $content = Contents::where('siteID', Auth::user()->siteID)->findOrFail($request->id);
        $content->contentID = is_null($request->contentID) ? $content->contentID : $request->contentID;
        $content->content_value = is_null($request->page_content) ? $content->content_value : $request->page_content;
        $content->status = is_null($request->status) ? $content->status : $request->status;
        $content->save();
        $request->session()->flash('success', 'Content has been updated successfully!');
        return view('pages/editContent', compact("content"));

    }


}
