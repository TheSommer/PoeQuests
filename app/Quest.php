<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Character;
use App\QuestReward;

class Quest extends Model
{
    public function getRewards(){
      $rewards = [];
      $characters = Character::all();
      foreach($characters as $character){
        $char_rewards = QuestReward::where('character_id', $character->id)->where('quest_id', $this->id)->get();
        array_push($rewards, $char_rewards);
      }
      return $rewards;
    }
}
