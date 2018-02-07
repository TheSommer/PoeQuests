<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;

class QuestController extends Controller
{
    //
    public function index() {
        $quests = Quest::all();
        return view('quests.index', compact("quests"));
    }

    public function show($act, $order) {
        $quest = Quest::where("act", $act)->where("order", $order)->firstOrFail();
        return view('quests.show', compact("quest"));
    }

    public function act($act) {
        $quests = Quest::where("act", $act)->orderBy("order", "asc")->get();
        return view('quests.act', compact("quests"));
    }
}
