<?php

namespace App\Http\Controllers;
use Http\Controllers\Route;
use App\Memory;
use App\User;

class MemoriesController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    
    public function edit(\App\Memory $memory)
    {
        return view('memories.edit' , compact ('memory'));
    }

    public function update(\App\Memory $memory)
    {
        $data = request()->validate([
            'subject' => 'required' ,
            'description' => 'required' ,
        ]);

        $memory->update(array_merge(
            $data
        ));

        return redirect("/m/{$memory->id}");
        return back();
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

