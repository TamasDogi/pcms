<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function apiIndex(): \Illuminate\Http\JsonResponse
    {
        $pages = Pages::where('siteID', 1)->get();
        return response()->json($pages);
    }

    public function apiView($id): \Illuminate\Http\JsonResponse
    {
        $pages = Pages::find($id);
        return response()->json($pages);
    }

    public function index()
    {
        $pages = Pages::where('siteID', Auth::user()->siteID)->get();
        return view('pages/pages', compact("pages", ));
    }

    public function edit($id)
    {
        $page = Pages::where('siteID', Auth::user()->siteID)->find($id);
        return view('pages/editPage', compact("page"));
    }

    public function create()
    {
        //print_r($request);
        return view('pages/createPage');
    }

    public function created(Request $request)
    {
        $page = Pages::create([
            'title' => $request->title,
            'siteID' => Auth::user()->siteID,
            'slug' => $request->slug,
            'page_content' => $request->page_content,
            'status' => $request->status]);
        $request->session()->flash('success', 'Page has been created!');
        return view('pages/createPage', compact('page'));
    }

    public function update(Request $request)
    {
        $page = Pages::where('siteID', Auth::user()->siteID)->findOrFail($request->id);
        $page->title = is_null($request->title) ? $page->title : $request->title;
        $page->slug = is_null($request->slug) ? $page->slug : $request->slug;
        $page->page_content = is_null($request->page_content) ? $page->page_content : $request->page_content;
        $page->status = is_null($request->status) ? $page->status : $request->status;
        $page->save();
        $request->session()->flash('success', 'Page has been updated successfully!');
        return view('pages/editPage', compact("page"));

    }


}
