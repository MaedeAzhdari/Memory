<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoriesController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }


    public function create()
    {
        return view ('memories.create');
    }

    public function store()
    {

        $data = request()->validate([
            'subject' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->memories()->create([
            'subject' =>$data['subject'],
            'description' => $data['description'],
        ]);

            return redirect('/profile/' . auth()->user()->id);
    }


    public function show(\App\Memory $memory) {
        return view('memories.show', compact('memory'));
    }
}