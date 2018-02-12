<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Character;
use App\Quest;

class QuestReward extends Model
{
    public function getCharacter(){
      $character = Character::where('id', $this->character_id)->first();
      return $character;
    }

    public function getQuest(){
      $quest = Quest::where('id', $this->quest_id)->first();
      return $quest;
    }

    public function getItem(){
      $item = Item::where('id', $this->item_id)->first();
      return $item;
    }
}
