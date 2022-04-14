<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => ['required', 'string']
        ]);

        $file = json_encode($request->only('firstName', 'comment'));
        Storage::append('about.txt', $file);
        return response()->json("ok", 201);
    }
}
