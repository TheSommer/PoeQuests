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
      /**
      * Dexterity Skill Gems as listed on /Skill_gem
      */
      $this->createItem('Animate Weapon', 4, 0, 0, 0, ["Duration", "Minion", "Spell"]);
      $this->createItem('Arctic Armour', 16, 0, 18, 26, ["Spell", "Duration", "Cold"]);
      $this->createItem('Barrage', 12, 0, 0, 33, ["Attack", "Bow"]);
      $this->createItem('Bear Trap', 4, 0, 0, 16, ["Trap", "Duration", "Cast"]);
      $this->createItem('Blade Flurry', 28, 0, 29, 42, ["Attack", "AoE", "Channelling", "Melee"]);
      $this->createItem('Blade Vortex', 12, 0, 0, 33, ["Spell", "AoE", "Duration"]);
      $this->createItem('Bladefall', 28, 0, 0, 67, ["Spell", "AoE"]);
      $this->createItem('Blast Rain', 28, 0, 0, 67, ["Fire", "Attack", "AoE", "Bow"]);
      $this->createItem('Blink Arrow', 10, 0, 0, 29, ["Attack", "Minion", "Duration", "Movement", "Bow"]);
      $this->createItem('Blood Rage', 16, 0, 0, 41, ["Spell", "Duration"]);
      $this->createItem('Burning Arrow', 1, 0, 0, 0, ["Attack", "Fire", "Bow"]);
      $this->createItem('Caustic Arrow', 4, 0, 0, 16, ["Attack", "AoE", "Duration", "Chaos", "Bow"]);
      $this->createItem('Charged Dash', 28, 0, 0, 67, ["Movement", "AoE", "Channelling", "Attack", "Lightning", "Melee"]);
      $this->createItem('Cremation', 28, 0, 29, 42, ["Projectile", "Spell", "AoE", "Fire", "Duration"]);
      $this->createItem('Cyclone', 28, 29, 0, 42, ["Attack", "AoE", "Movement", "Melee"]);
      $this->createItem('Desecrate', 16, 0, 18, 26, ["Spell", "AoE", "Duration", "Chaos"]);
      $this->createItem('Double Strike', 1, 0, 0, 0, ["Attack", "Melee"]);
      $this->createItem('Dual Strike', 1, 0, 0, 0, ["Attack", "Melee"]);
      $this->createItem('Elemental Hit', 1, 0, 0, 0, ["Attack", "Melee", "Fire", "Cold", "Lightning", "Bow"]);
      $this->createItem('Ethereal Knives', 1, 0, 0, 0, ["Projectile", "Spell"]);
      $this->createItem('Explosive Arrow', 28, 0, 0, 67, ["Fire", "Attack", "AoE", "Duration", "Bow"]);
      $this->createItem('Fire Trap', 1, 0, 0, 0, ["Trap", "Spell", "Duration", "AoE", "Fire"]);
      $this->createItem('Flicker Strike', 10, 0, 0, 29, ["Attack", "Melee", "Movement"]);
      $this->createItem('Freeze Mine', 10, 0, 0, 18, ["Mine", "Spell", "AoE", "Duration", "Cold"]);
      $this->createItem('Frenzy', 16, 0, 0, 41, ["Attack", "Melee", "Bow"]);
      $this->createItem('Frost Blades', 1, 0, 0, 0, ["Projectile", "Attack", "Melee", "Cold"]);
      $this->createItem('Grace', 24, 0, 0, 58, ["Aura", "Spell", "AoE"]);
      $this->createItem('Haste', 24, 0, 0, 58, ["Aura", "Spell", "AoE"]);
      $this->createItem('Hatred', 24, 0, 25, 37, ["Aura", "Spell", "AoE", "Cold"]);
      $this->createItem('Herald of Ice', 16, 0, 18, 26, ["Cast", "AoE", "Cold", "Herald"]);
      $this->createItem('Ice Shot', 1, 0, 0, 0, ["Attack", "AoE", "Duration", "Cold", "Bow"]);
      $this->createItem('Ice Trap', 28, 0, 29, 42, ["Trap", "Spell", "AoE", "Cold", "Duration"]);
      $this->createItem('Lacerate', 12, 14, 0, 21, ["Attack", "AoE", "Melee"]);
      $this->createItem('Lightning Arrow', 12, 0, 0, 33, ["Attack", "AoE", "Lightning", "Bow"]);
      $this->createItem('Lightning Strike', 12, 0, 14, 21, ["Projective", "Attack", "Melee", "Lightning"]);
      $this->createItem('Mirror Arrow', 12, 0, 0, 29, ["Attack", "Minion", "Duration", "Bow"]);
      $this->createItem('Phase Run', 34, 0, 0, 79, ["Spell", "Duration", "Movement"]);
      $this->createItem('Poacher\'s Mark', 24, 0, 0, 58, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Projectile Weakness', 24, 0, 0, 58, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Puncture', 4, 0, 0, 0, ["Attack", "Duration", "Melee", "Bow"]);
      $this->createItem('Purity of Ice', 24, 0, 25, 37, ["Aura", "Spell", "AoE", "Cold"]);
      $this->createItem('Rain of Arrows', 12, 0, 0, 33, ["Attack", "AoE", "Bow"]);
      $this->createItem('Reave', 12, 0, 14, 21, ["Attack", "AoE", "Melee"]);
      $this->createItem('Riposte', 4, 0, 0, 16, ["Trigger", "Attack", "Melee"]);
      $this->createItem('Shrapnel Shot', 1, 0, 0, 0, ["Lightning", "Attack", "AoE", "Bow"]);
      $this->createItem('Siege Ballista', 4, 0, 0, 16, ["Totem", "Attack", "Duration", "Bow"]);
      $this->createItem('Smoke Mine', 10, 0, 0, 18, ["Mine", "Spell", "AoE", "Duration", "Movement"]);
      $this->createItem('Spectral Throw', 1, 0, 0, 0, ["Projectile", "Attack"]);
      $this->createItem('Split Arrow', 1, 0, 0, 0, ["Attack", "Bow"]);
      $this->createItem('Summon Ice Golem', 34, 0, 35, 50, ["Cold", "Minion", "Spell", "Golem"]);
      $this->createItem('Temporal Chains', 24, 0, 25, 37, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Tornado Shot', 28, 0, 0, 67, ["Attack", "Bow"]);
      $this->createItem('Unearth', 10, 0, 0, 18, ["Projectile", "Spell"]);
      $this->createItem('Viper Strike', 1, 0, 0, 0, ["Attack", "Duration", "Melee", "Chaos"]);
      $this->createItem('Volatile Dead', 12, 0, 14, 21, ["Spell", "AoE", "Fire"]);
      $this->createItem('Whirling Blades', 10, 0, 0, 18, ["Attack", "Movement", "Melee"]);
      $this->createItem('Wild Strike', 10, 0, 0, 18, ["Projectile", "Attack", "Melee", "Lightning", "Cold", "Fire", "AoE", "Chaining"]);
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
