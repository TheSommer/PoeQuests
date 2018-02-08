<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Tag;
use App\ItemTag;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createItem('Animate Weapon', 4, 0, 0, 0, ["Duration", "Minion", "Spell"]);
        $this->createItem('Arctic Armour', 16, 0, 18, 26, ["Spell", "Duration", "Cold"]);
        $this->createItem('Barrage', 12, 0, 0, 33, ["Attack", "Bow"]);
        $this->createItem('Bear Trap', 4, 0, 0, 16, ["Trap", "Duration", "Cast"]);
        $this->createItem('Blade Flurry', 28, 0, 29, 42, ["Attack", "AoE", "Channelling", "Melee"]);
        $this->createItem('Blade Vortex', 12, 0, 0, 33, ["Spell", "AoE", "Duration"]);
    }

    public function createItem($name, $req_level, $req_str, $req_int, $req_dex, $str_tags){
      $existingItem = Item::where('name', 'like', $name)->first();
      if($existingItem == null){
        $item = new Item();
        $item->name = $name;
        $item->req_level = $req_level;
        $item->req_str = $req_str;
        $item->req_int = $req_int;
        $item->req_dex = $req_dex;
        $item->save();
        echo('Added #' . $item->id . " - " . $item->name . "\n");

        foreach($str_tags as $str_tag){
          $existingTag = Tag::where('name', 'like', $str_tag)->first();
          if($existingTag == null){
            $tag = new Tag();
            $tag->name = $str_tag;
            $tag->save();

            $itemtag = new ItemTag();
            $itemtag->item_id = $item->id;
            $itemtag->tag_id = $tag->id;
            $itemtag->save();
          }
          else{
            $itemtag = new ItemTag();
            $itemtag->item_id = $item->id;
            $itemtag->tag_id = $existingTag->id;
            $itemtag->save();
          }
        }
      }
      else{
        echo('Already found ' . $name . ' in DB, skipping..' . "\n");
      }
    }
}
