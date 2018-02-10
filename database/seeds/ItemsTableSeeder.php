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

      /**
      * Strength Skill Gems as listed on /Skill_gem
      */
      $this->createItem('Abyssal Cry', 34, 79, 0, 0, ["Warcry", "AoE", "Duration", "Chaos"]);
      $this->createItem('Ancestral Protector', 4, 16, 0, 0, ["Totem", "Attack", "Duration", "Melee"]);
      $this->createItem('Ancestral Warchief', 28, 67, 0, 0, ["Totem", "Attack", "Duration", "AoE", "Melee"]);
      $this->createItem('Anger', 24, 37, 25, 0, ["Aura", "Spell", "AoE", "Fire"]);
      $this->createItem('Animate Guardian', 28, 42, 29, 0, ["Spell", "Minion"]);
      $this->createItem('Cleave', 1, 0, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createItem('Decoy Totem', 4, 16, 0, 0, ["Totem", "Spell", "Duration", "AoE"]);
      $this->createItem('Determination', 24, 58, 0, 0, ["Aura", "Spell", "AoE"]);
      $this->createItem('Devouring Totem', 4, 16, 0, 0, ["Totem", "Spell", "Duration"]);
      $this->createItem('Dominating Blow', 28, 42, 29, 0, ["Attack", "Minion", "Duration", "Melee"]);
      $this->createItem('Earthquake', 28, 67, 0, 0, ["Attack", "AoE", "Duration", "Melee"]);
      $this->createItem('Enduring Cry', 16, 41, 0, 0, ["Warcry", "AoE", "Duration"]);
      $this->createItem('Flame Totem', 4, 0, 0, 0, ["Projectile", "Totem", "Spell", "Duration", "Fire"]);
      $this->createItem('Glacial Hammer', 1, 0, 0, 0, ["Attack", "Melee", "Cold"]);
      $this->createItem('Ground Slam', 1, 0, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createItem('Heavy Strike', 1, 0, 0, 0, ["Attack", "Melee"]);
      $this->createItem('Herald of Ash', 16, 26, 18, 0, ["Spell", "AoE", "Fire", "Herald", "Duration"]);
      $this->createItem('Ice Crash', 28, 42, 29, 0, ["Attack", "AoE", "Cold", "Melee"]);
      $this->createItem('Immortal Call', 34, 79, 0, 0, ["Spell", "Duration"]);
      $this->createItem('Infernal Blow', 1, 0, 0, 0, ["Attack", "AoE", "Melee", "Fire"]);
      $this->createItem('Leap Slam', 10, 29, 0, 0, ["Attack", "AoE", "Movement", "Melee"]);
      $this->createItem('Molten Shell', 4, 16, 0, 0, ["Spell", "AoE", "Duration", "Fire"]);
      $this->createItem('Molten Strike', 1, 0, 0, 0, ["Projectile", "Attack", "AoE", "Melee", "Fire"]);
      $this->createItem('Punishment', 24, 37, 25, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Purity of Fire', 24, 37, 25, 0, ["Aura", "Spell", "AoE", "Fire"]);
      $this->createItem('Rallying Cry', 10, 29, 0, 0, ["Warcry", "AoE", "Duration"]);
      $this->createItem('Reckoning', 1, 4, 16, 0, ["Trigger", "Attack", "AoE", "Melee"]);
      $this->createItem('Rejuvination Totem', 4, 16, 0, 0, ["Totem", "Aura", "Spell", "AoE", "Duration"]);
      $this->createItem('Searing Bond', 12, 21, 14, 0, ["Totem", "Spell", "Duration", "Fire"]);
      $this->createItem('Shield Charge', 10, 29, 0, 0, ["Attack", "AoE", "Movement", "Melee"]);
      $this->createItem('Shockwave Totem', 28, 67, 0, 0, ["Totem", "Spell", "AoE", "Duration"]);
      $this->createItem('Summon Flame Golem', 34, 50, 35, 0, ["Fire", "Minion", "Spell", "Golem"]);
      $this->createItem('Summon Stone Golem', 34, 50, 0, 35, ["Minion", "Spell", "Golem"]);
      $this->createItem('Sunder', 12, 33, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createItem('Sweep', 12, 33, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createItem('Vigilant Strike', 4, 0, 0, 0, ["Attack", "Melee"]);
      $this->createItem('Vitality', 24, 58, 0, 0, ["Aura", "Spell", "AoE"]);
      $this->createItem('Vulnerability', 24, 58, 0, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Warlord\'s Mark', 24, 58, 0, 0, ["Curse", "Spell", "AoE", "Duration"]);

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
