<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class GameController extends Controller
{

    public function index()
    {

        $characters = Character::all();

        return view('home', compact('characters'));
    }

    public function show($id)
    {
        $character = Character::find($id);

        return view('show', compact('character'));
    }
}
