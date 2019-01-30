<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    public function index()
    {

        $links = Link::all();
        return view('laravel_links', ['links' => $links]);

    }

    public function showLinksForm()
    {

        return view('link-toevoegen');

    }

    public function handleLinksForm(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required|min:8',
            'description' => 'required',
            'url' => 'required|url'
        ]);

        return view('link-opslaan');

    }


}
