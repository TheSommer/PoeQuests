<?php

use Illuminate\Database\Seeder;
use App\Quest;
use App\Item;
use App\QuestReward;

class QuestRewardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createQuestReward(1, 1, 1, ["Ground Slam", "Molten Strike"]);
        $this->createQuestReward(1, 1, 2, ["Frostbolt", "Lightning Tendrils", "Magma Orb", "Molten Strike"]);
        $this->createQuestReward(1, 1, 3, ["Blight", "Freezing Pulse", "Lightning Tendrils", "Magma Orb", "Raise Zombie"]);
        $this->createQuestReward(1, 1, 4, ["Ethereal Knives", "Fire Trap", "Freezing Pulse", "Frost Blades", "Lightning Tendrils"]);
        $this->createQuestReward(1, 1, 5, ["Frost Blades", "Ice Shot", "Shrapnel Shot", "Split Arrow"]);
        $this->createQuestReward(1, 1, 6, ["Cleave", "Molten Strike", "Shrapnel Shot"]);
        $this->createQuestReward(1, 1, 7, ["Lightning Tendrils", "Molten Strike", "Split Arrow"]);
    }

    /*
    * Character order from CharactersTableSeeder: Marauder, Templar, Witch, Shadow, Ranger, Dualist, Scion
    */
    public function createQuestReward($act, $order, $character_id, $rewards){
      $quest = Quest::where('act', $act)->where('order', $order)->first();
      foreach($rewards as $str_item){
        $item = Item::where('name', 'like', $str_item)->first();

        $reward = new QuestReward();
        $reward->character_id = $character_id;
        $reward->quest_id = $quest->id;
        $reward->item_id = $item->id;
        $reward->save();
        echo('Added QuestReward #' . $reward->id . " - " . $item->name . "\n");
      }
    }
}
