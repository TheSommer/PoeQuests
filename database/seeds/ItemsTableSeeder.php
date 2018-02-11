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

      /**
      * Intelligence Skill Gems as listed on /Skill_gem
      */
      $this->createItem('Arc', 12, 0, 33, 0, ["Spell", "Chaining", "Lightning"]);
      $this->createItem('Arctic Breath', 28, 0, 42, 29, ["Projectile", "Spell", "Duration", "AoE", "Cold"]);
      $this->createItem('Assassin\'s Mark', 24, 0, 37, 25, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Ball Lightning', 28, 0, 67, 0, ["Projectile", "Spell", "AoE", "Lightning"]);
      $this->createItem('Blight', 1, 0, 0, 0, ["Spell", "Chaos", "AoE", "Channelling", "Duration"]);
      $this->createItem('Bodyswap', 10, 0, 18, 0, ["Movement", "Spell", "AoE", "Fire"]);
      $this->createItem('Bone Offering', 12, 0, 33, 0, ["Minion", "Spell", "Duration"]);
      $this->createItem('Clarity', 10, 0, 29, 0, ["Aura", "Spell", "AoE"]);
      $this->createItem('Cold Snap', 4, 0, 16, 0, ["Spell", "AoE", "Cold"]);
      $this->createItem('Conductivity', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration", "Lightning"]);
      $this->createItem('Contagion', 4, 0, 0, 0, ["Spell", "AoE", "Duration", "Chaos"]);
      $this->createItem('Conversion Trap', 4, 0, 0, 0, ["Trap", "Spell", "Duration"]);
      $this->createItem('Convocation', 24, 0, 58, 0, ["Minion", "Spell", "Duration"]);
      $this->createItem('Dark Pact', 28, 0, 67, 0, ["Minion", "Spell", "AoE", "Chaining", "Chaos"]);
      $this->createItem('Despair', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration", "Chaos"]);
      $this->createItem('Discharge', 28, 0, 67, 0, ["Spell", "AoE", "Fire", "Cold", "Lightning"]);
      $this->createItem('Discipline', 24, 0, 58, 0, ["Aura", "Spell", "AoE"]);
      $this->createItem('Elemental Weakness', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Enfeeble', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createItem('Essence Drain', 12, 0, 21, 14, ["Projectile", "Spell", "Duration", "Chaos"]);
      $this->createItem('Fire Nova Mine', 12, 0, 33, 0, ["AoE", "Mine", "Spell", "Fire", "Duration"]);
      $this->createItem('Fireball', 1, 0, 0, 0, ["Projectile", "Spell", "AoE", "Fire"]);
      $this->createItem('Firestorm', 12, 0, 33, 0, ["Spell", "AoE", "Duration", "Fire"]);
      $this->createItem('Flame Dash', 10, 0, 29, 0, ["Spell", "Movement", "Duration", "Fire"]);
      $this->createItem('Flame Surge', 12, 0, 33, 0, ["Spell", "AoE", "Fire"]);
      $this->createItem('Flameblast', 28, 0, 67, 0, ["Spell", "AoE", "Fire", "Channelling"]);
      $this->createItem('Flammability', 24, 25, 37, 0, ["Curse", "Spell", "AoE", "Duration", "Fire"]);
      $this->createItem('Flesh Offering', 12, 0, 33, 0, ["Minion", "Spell", "Duration"]);
      $this->createItem('Freezing Pulse', 1, 0, 0, 0, ["Projectile", "Spell", "Cold"]);
      $this->createItem('Frost Bomb', 4, 0, 16, 0, ["Spell", "AoE", "Duration", "Cold"]);
      $this->createItem('Frost Wall', 4, 0, 16, 0, ["Spell", "Duration", "Cold"]);
      $this->createItem('Frostbite', 24, 0, 37, 25, ["Curse", "Spell", "AoE", "Duration", "Cold"]);
      $this->createItem('Frostbolt', 1, 0, 0, 0, ["Projectile", "Spell", "Cold"]);
      $this->createItem('Glacial Cascade', 28, 0, 67, 0, ["Spell", "AoE", "Cold"]);
      $this->createItem('Herald of Thunder', 16, 0, 41, 0, ["Cast", "AoE", "Duration", "Lightning", "Herald"]);
      $this->createItem('Ice Nova', 12, 0, 33, 0, ["Spell", "AoE", "Cold"]);
      $this->createItem('Ice Spear', 12, 0, 33, 0, ["Projectile", "Spell", "Cold"]);
      $this->createItem('Incinerate', 12, 0, 33, 0, ["Projectile", "Spell", "Fire", "Channelling"]);
      $this->createItem('Kinetic Blast', 28, 0, 67, 0, ["Attack", "AoE", "Projectile"]);
      $this->createItem('Lightning Tendrils', 1, 0, 0, 0, ["Spell", "AoE", "Lightning", "Channelling"]);
      $this->createItem('Lightning Trap', 12, 0, 21, 14, ["Projectile", "Trap", "Spell", "Duration", "Lightning"]);
      $this->createItem('Lightning Warp', 10, 0, 29, 0, ["Spell", "AoE", "Duration", "Movement", "Lightning"]);
      $this->createItem('Magma Orb', 1, 0, 0, 0, ["Projectile", "Spell", "AoE", "Fire", "Chaining"]);
      $this->createItem('Orb of Storms', 4, 0, 16, 0, ["Lightning", "Spell", "Duration", "AoE", "Chaining"]);
      $this->createItem('Power Siphon', 12, 0, 33, 0, ["Attack", "Projectile"]);
      $this->createItem('Purity of Elements', 24, 25, 37, 0, ["Aura", "Spell", "AoE"]);
      $this->createItem('Purity of Lightning', 24, 0, 58, 0, ["Aura", "Spell", "AoE", "Lightning"]);
      $this->createItem('Raise Spectre', 28, 0, 67, 0, ["Spell", "Minion"]);
      $this->createItem('Raise Zombie', 1, 0, 0, 0, ["Spell", "Minion"]);
      $this->createItem('Righteous Fire', 16, 18, 26, 0, ["Spell", "AoE", "Fire"]);
      $this->createItem('Scorching Ray', 12, 0, 33, 0, ["Spell", "Fire", "Duration", "Channelling"]);
      $this->createItem('Shock Nova', 28, 0, 67, 0, ["Spell", "AoE", "Lightning"]);
      $this->createItem('Spark', 1, 0, 0, 0, ["Projectile", "Spell", "Duration", "Lightning"]);
      $this->createItem('Spirit Offering', 12, 0, 33, 0, ["Minion", "Spell", "Duration"]);
      $this->createItem('Storm Burst', 28, 0, 67, 0, ["Projectile", "AoE", "Spell", "Lightning", "Channelling"]);
      $this->createItem('Storm Call', 12, 0, 33, 0, ["Spell", "AoE", "Duration", "Lightning"]);
      $this->createItem('Summon Chaos Golem', 34, 0, 79, 0, ["Chaos", "Minion", "Spell", "Golem"]);
      $this->createItem('Summon Lightning Golem', 34, 0, 50, 35, ["Lightning", "Minion", "Spell", "Golem"]);
      $this->createItem('Summon Raging Spirit', 4, 0, 16, 0, ["Spell", "Minion", "Duration", "Fire"]);
      $this->createItem('Summon Skeleton', 10, 0, 29, 0, ["Spell", "Minion", "Duration"]);
      $this->createItem('Tempest Shield', 16, 18, 26, 0, ["Spell", "Lightning", "Chaining", "Duration"]);
      $this->createItem('Vortex', 28, 0, 67, 0, ["Spell", "AoE", "Cold", "Duration"]);
      $this->createItem('Wither', 10, 0, 29, 0, ["Spell", "AoE", "Duration", "Chaos", "Channelling"]);
      $this->createItem('Wrath', 24, 0, 58, 0, ["Aura", "Spell", "AoE", "Lightning"]);

      /**
      * Dexterity Support Skill Gems as listed on /Skill_gem
      */
      $this->createItem('Added Cold Damage Support', 8, 0, 0, 18, ["Cold", "Support"]);
      $this->createItem('Additional Accuracy Support', 8, 0, 0, 0, ["Attack", "Support"]);
      $this->createItem('Blind Support', 8, 0, 0, 18, ["Support"]);
      $this->createItem('Block Chance Reduction Support', 18, 0, 14, 21, ["Support"]);
      $this->createItem('Cast On Critical Strike Support', 38, 0, 27, 40, ["Support", "Spell", "Trigger"]);
      $this->createItem('Cast On Death Support', 38, 0, 27, 40, ["Support", "Spell", "Trigger"]);
      $this->createItem('Chain Support', 38, 0, 0, 63, ["Support", "Chaining", "Projectile"]);
      $this->createItem('Chance to Flee Support', 8, 0, 0, 0, ["Support"]);
      $this->createItem('Cluster Traps Support', 38, 0, 0, 63, ["Trap", "Support"]);
      $this->createItem('Cold Penetration Support', 31, 0, 0, 52, ["Cold", "Support"]);
      $this->createItem('Culling Strike Support', 18, 0, 0, 33, ["Support"]);
      $this->createItem('Deadly Ailments Support', 18, 0, 14, 21, ["Support"]);
      $this->createItem('Enhance Support', 1, 0, 0, 0, ["Support"]);
      $this->createItem('Faster Attacks Support', 18, 0, 0, 33, ["Attack", "Support"]);
      $this->createItem('Faster Projectiles Support', 31, 0, 0, 52, ["Support", "Projectile"]);
      $this->createItem('Fork Support', 31, 0, 0, 52, ["Support", "Projectile"]);
      $this->createItem('Greater Multiple Projectiles Support', 38, 0, 0, 63, ["Support", "Projectile"]);
      $this->createItem('Hypothermia Support', 31, 0, 0, 52, ["Cold", "Support"]);
      $this->createItem('Ice Bite Support', 31, 0, 0, 52, ["Cold", "Support"]);
      $this->createItem('Lesser Multiple Projectiles Support', 8, 0, 0, 18, ["Support", "Projectile"]);
      $this->createItem('Lesser Poison Support', 1, 0, 0, 0, ["Chaos", "Support"]);
      $this->createItem('Mana Leech Support', 31, 0, 0, 52, ["Support"]);
      $this->createItem('Mirage Archer Support', 4, 0, 0, 0, ["Bow", "Attack", "Support", "Duration"]);
      $this->createItem('Multiple Traps Support', 8, 0, 0, 0, ["Support", "Trap"]);
      $this->createItem('Onslaught Support', 1, 0, 0, 0, ["Support"]);
      $this->createItem('Physical Projectile Attack Damage Support', 18, 0, 0, 33, ["Projectile", "Attack", "Support"]);
      $this->createItem('Pierce Support', 1, 0, 0, 0, ["Support", "Projectile"]);
      $this->createItem('Point Blank Support', 18, 0, 0, 33, ["Projectile", "Attack", "Support"]);
      $this->createItem('Poison Support', 31, 0, 0, 52, ["Chaos", "Support"]);
      $this->createItem('Slower Projectiles Support', 31, 0, 0, 52, ["Support", "Projectile"]);
      $this->createItem('Swift Affliction Support', 31, 0, 0, 52, ["Support", "Duration"]);
      $this->createItem('Trap and Mine Damage Support', 18, 0, 14, 21, ["Support", "Trap", "Mine"]);
      $this->createItem('Trap Cooldown Support', 31, 0, 0, 52, ["Trap", "Support"]);
      $this->createItem('Trap Support', 8, 0, 0, 0, ["Support", "Trap", "Duration"]);
      $this->createItem('Vile Toxins Support', 38, 0, 0, 63, ["Support"]);
      $this->createItem('Void Manipulation Support', 8, 0, 0, 0, ["Chaos", "Support"]);
      $this->createItem('Volley Support', 4, 0, 0, 0, ["Support", "Projectile"]);
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
        echo('Added Item #' . $item->id . " - " . $item->name . "\n");

        foreach($str_tags as $str_tag){
          $existingTag = Tag::where('name', 'like', $str_tag)->first();
          if($existingTag == null){
            $tag = new Tag();
            $tag->name = $str_tag;
            $tag->save();
            echo('Added Tag #' . $tag->id . " - " . $tag->name . "\n");

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
