<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(Request $request)
    {
        $notes = $request->user()->notes()->with('user')->latest()->get();

        return $notes;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);

        $note = $request->user()->notes()->create([
            'content' => $request->input('content')
        ])->load('user');

        return $note;
    }
}
