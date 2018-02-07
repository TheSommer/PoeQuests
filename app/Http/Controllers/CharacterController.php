<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;

class CharacterController extends Controller
{
    public function index() {
        $characters = Character::all();
        return view('characters.index', compact("characters"));
    }
    public function show($name) {
        $character = Character::where("name", "like" , $name)->firstOrFail();
        return view('characters.show', compact("character"));
    }
}
