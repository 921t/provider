<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $notes = $user->notes()->with('user')->get();

        return $notes;
    }
}
