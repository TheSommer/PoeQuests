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
      $this->createSkillGem('Animate Weapon', 4, 0, 0, 0, ["Duration", "Minion", "Spell"]);
      $this->createSkillGem('Arctic Armour', 16, 0, 18, 26, ["Spell", "Duration", "Cold"]);
      $this->createSkillGem('Barrage', 12, 0, 0, 33, ["Attack", "Bow"]);
      $this->createSkillGem('Bear Trap', 4, 0, 0, 16, ["Trap", "Duration", "Cast"]);
      $this->createSkillGem('Blade Flurry', 28, 0, 29, 42, ["Attack", "AoE", "Channelling", "Melee"]);
      $this->createSkillGem('Blade Vortex', 12, 0, 0, 33, ["Spell", "AoE", "Duration"]);
      $this->createSkillGem('Bladefall', 28, 0, 0, 67, ["Spell", "AoE"]);
      $this->createSkillGem('Blast Rain', 28, 0, 0, 67, ["Fire", "Attack", "AoE", "Bow"]);
      $this->createSkillGem('Blink Arrow', 10, 0, 0, 29, ["Attack", "Minion", "Duration", "Movement", "Bow"]);
      $this->createSkillGem('Blood Rage', 16, 0, 0, 41, ["Spell", "Duration"]);
      $this->createSkillGem('Burning Arrow', 1, 0, 0, 0, ["Attack", "Fire", "Bow"]);
      $this->createSkillGem('Caustic Arrow', 4, 0, 0, 16, ["Attack", "AoE", "Duration", "Chaos", "Bow"]);
      $this->createSkillGem('Charged Dash', 28, 0, 0, 67, ["Movement", "AoE", "Channelling", "Attack", "Lightning", "Melee"]);
      $this->createSkillGem('Cremation', 28, 0, 29, 42, ["Projectile", "Spell", "AoE", "Fire", "Duration"]);
      $this->createSkillGem('Cyclone', 28, 29, 0, 42, ["Attack", "AoE", "Movement", "Melee"]);
      $this->createSkillGem('Desecrate', 16, 0, 18, 26, ["Spell", "AoE", "Duration", "Chaos"]);
      $this->createSkillGem('Double Strike', 1, 0, 0, 0, ["Attack", "Melee"]);
      $this->createSkillGem('Dual Strike', 1, 0, 0, 0, ["Attack", "Melee"]);
      $this->createSkillGem('Elemental Hit', 1, 0, 0, 0, ["Attack", "Melee", "Fire", "Cold", "Lightning", "Bow"]);
      $this->createSkillGem('Ethereal Knives', 1, 0, 0, 0, ["Projectile", "Spell"]);
      $this->createSkillGem('Explosive Arrow', 28, 0, 0, 67, ["Fire", "Attack", "AoE", "Duration", "Bow"]);
      $this->createSkillGem('Fire Trap', 1, 0, 0, 0, ["Trap", "Spell", "Duration", "AoE", "Fire"]);
      $this->createSkillGem('Flicker Strike', 10, 0, 0, 29, ["Attack", "Melee", "Movement"]);
      $this->createSkillGem('Freeze Mine', 10, 0, 0, 18, ["Mine", "Spell", "AoE", "Duration", "Cold"]);
      $this->createSkillGem('Frenzy', 16, 0, 0, 41, ["Attack", "Melee", "Bow"]);
      $this->createSkillGem('Frost Blades', 1, 0, 0, 0, ["Projectile", "Attack", "Melee", "Cold"]);
      $this->createSkillGem('Grace', 24, 0, 0, 58, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Haste', 24, 0, 0, 58, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Hatred', 24, 0, 25, 37, ["Aura", "Spell", "AoE", "Cold"]);
      $this->createSkillGem('Herald of Ice', 16, 0, 18, 26, ["Cast", "AoE", "Cold", "Herald"]);
      $this->createSkillGem('Ice Shot', 1, 0, 0, 0, ["Attack", "AoE", "Duration", "Cold", "Bow"]);
      $this->createSkillGem('Ice Trap', 28, 0, 29, 42, ["Trap", "Spell", "AoE", "Cold", "Duration"]);
      $this->createSkillGem('Lacerate', 12, 14, 0, 21, ["Attack", "AoE", "Melee"]);
      $this->createSkillGem('Lightning Arrow', 12, 0, 0, 33, ["Attack", "AoE", "Lightning", "Bow"]);
      $this->createSkillGem('Lightning Strike', 12, 0, 14, 21, ["Projective", "Attack", "Melee", "Lightning"]);
      $this->createSkillGem('Mirror Arrow', 12, 0, 0, 29, ["Attack", "Minion", "Duration", "Bow"]);
      $this->createSkillGem('Phase Run', 34, 0, 0, 79, ["Spell", "Duration", "Movement"]);
      $this->createSkillGem('Poacher\'s Mark', 24, 0, 0, 58, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Projectile Weakness', 24, 0, 0, 58, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Puncture', 4, 0, 0, 0, ["Attack", "Duration", "Melee", "Bow"]);
      $this->createSkillGem('Purity of Ice', 24, 0, 25, 37, ["Aura", "Spell", "AoE", "Cold"]);
      $this->createSkillGem('Rain of Arrows', 12, 0, 0, 33, ["Attack", "AoE", "Bow"]);
      $this->createSkillGem('Reave', 12, 0, 14, 21, ["Attack", "AoE", "Melee"]);
      $this->createSkillGem('Riposte', 4, 0, 0, 16, ["Trigger", "Attack", "Melee"]);
      $this->createSkillGem('Shrapnel Shot', 1, 0, 0, 0, ["Lightning", "Attack", "AoE", "Bow"]);
      $this->createSkillGem('Siege Ballista', 4, 0, 0, 16, ["Totem", "Attack", "Duration", "Bow"]);
      $this->createSkillGem('Smoke Mine', 10, 0, 0, 18, ["Mine", "Spell", "AoE", "Duration", "Movement"]);
      $this->createSkillGem('Spectral Throw', 1, 0, 0, 0, ["Projectile", "Attack"]);
      $this->createSkillGem('Split Arrow', 1, 0, 0, 0, ["Attack", "Bow"]);
      $this->createSkillGem('Summon Ice Golem', 34, 0, 35, 50, ["Cold", "Minion", "Spell", "Golem"]);
      $this->createSkillGem('Temporal Chains', 24, 0, 25, 37, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Tornado Shot', 28, 0, 0, 67, ["Attack", "Bow"]);
      $this->createSkillGem('Unearth', 10, 0, 0, 18, ["Projectile", "Spell"]);
      $this->createSkillGem('Viper Strike', 1, 0, 0, 0, ["Attack", "Duration", "Melee", "Chaos"]);
      $this->createSkillGem('Volatile Dead', 12, 0, 14, 21, ["Spell", "AoE", "Fire"]);
      $this->createSkillGem('Whirling Blades', 10, 0, 0, 18, ["Attack", "Movement", "Melee"]);
      $this->createSkillGem('Wild Strike', 10, 0, 0, 18, ["Projectile", "Attack", "Melee", "Lightning", "Cold", "Fire", "AoE", "Chaining"]);

      /**
      * Strength Skill Gems as listed on /Skill_gem
      */
      $this->createSkillGem('Abyssal Cry', 34, 79, 0, 0, ["Warcry", "AoE", "Duration", "Chaos"]);
      $this->createSkillGem('Ancestral Protector', 4, 16, 0, 0, ["Totem", "Attack", "Duration", "Melee"]);
      $this->createSkillGem('Ancestral Warchief', 28, 67, 0, 0, ["Totem", "Attack", "Duration", "AoE", "Melee"]);
      $this->createSkillGem('Anger', 24, 37, 25, 0, ["Aura", "Spell", "AoE", "Fire"]);
      $this->createSkillGem('Animate Guardian', 28, 42, 29, 0, ["Spell", "Minion"]);
      $this->createSkillGem('Cleave', 1, 0, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createSkillGem('Decoy Totem', 4, 16, 0, 0, ["Totem", "Spell", "Duration", "AoE"]);
      $this->createSkillGem('Determination', 24, 58, 0, 0, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Devouring Totem', 4, 16, 0, 0, ["Totem", "Spell", "Duration"]);
      $this->createSkillGem('Dominating Blow', 28, 42, 29, 0, ["Attack", "Minion", "Duration", "Melee"]);
      $this->createSkillGem('Earthquake', 28, 67, 0, 0, ["Attack", "AoE", "Duration", "Melee"]);
      $this->createSkillGem('Enduring Cry', 16, 41, 0, 0, ["Warcry", "AoE", "Duration"]);
      $this->createSkillGem('Flame Totem', 4, 0, 0, 0, ["Projectile", "Totem", "Spell", "Duration", "Fire"]);
      $this->createSkillGem('Glacial Hammer', 1, 0, 0, 0, ["Attack", "Melee", "Cold"]);
      $this->createSkillGem('Ground Slam', 1, 0, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createSkillGem('Heavy Strike', 1, 0, 0, 0, ["Attack", "Melee"]);
      $this->createSkillGem('Herald of Ash', 16, 26, 18, 0, ["Spell", "AoE", "Fire", "Herald", "Duration"]);
      $this->createSkillGem('Ice Crash', 28, 42, 29, 0, ["Attack", "AoE", "Cold", "Melee"]);
      $this->createSkillGem('Immortal Call', 34, 79, 0, 0, ["Spell", "Duration"]);
      $this->createSkillGem('Infernal Blow', 1, 0, 0, 0, ["Attack", "AoE", "Melee", "Fire"]);
      $this->createSkillGem('Leap Slam', 10, 29, 0, 0, ["Attack", "AoE", "Movement", "Melee"]);
      $this->createSkillGem('Molten Shell', 4, 16, 0, 0, ["Spell", "AoE", "Duration", "Fire"]);
      $this->createSkillGem('Molten Strike', 1, 0, 0, 0, ["Projectile", "Attack", "AoE", "Melee", "Fire"]);
      $this->createSkillGem('Punishment', 24, 37, 25, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Purity of Fire', 24, 37, 25, 0, ["Aura", "Spell", "AoE", "Fire"]);
      $this->createSkillGem('Rallying Cry', 10, 29, 0, 0, ["Warcry", "AoE", "Duration"]);
      $this->createSkillGem('Reckoning', 1, 4, 16, 0, ["Trigger", "Attack", "AoE", "Melee"]);
      $this->createSkillGem('Rejuvination Totem', 4, 16, 0, 0, ["Totem", "Aura", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Searing Bond', 12, 21, 14, 0, ["Totem", "Spell", "Duration", "Fire"]);
      $this->createSkillGem('Shield Charge', 10, 29, 0, 0, ["Attack", "AoE", "Movement", "Melee"]);
      $this->createSkillGem('Shockwave Totem', 28, 67, 0, 0, ["Totem", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Summon Flame Golem', 34, 50, 35, 0, ["Fire", "Minion", "Spell", "Golem"]);
      $this->createSkillGem('Summon Stone Golem', 34, 50, 0, 35, ["Minion", "Spell", "Golem"]);
      $this->createSkillGem('Sunder', 12, 33, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createSkillGem('Sweep', 12, 33, 0, 0, ["Attack", "AoE", "Melee"]);
      $this->createSkillGem('Vigilant Strike', 4, 0, 0, 0, ["Attack", "Melee"]);
      $this->createSkillGem('Vitality', 24, 58, 0, 0, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Vulnerability', 24, 58, 0, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Warlord\'s Mark', 24, 58, 0, 0, ["Curse", "Spell", "AoE", "Duration"]);

      /**
      * Intelligence Skill Gems as listed on /Skill_gem
      */
      $this->createSkillGem('Arc', 12, 0, 33, 0, ["Spell", "Chaining", "Lightning"]);
      $this->createSkillGem('Arctic Breath', 28, 0, 42, 29, ["Projectile", "Spell", "Duration", "AoE", "Cold"]);
      $this->createSkillGem('Assassin\'s Mark', 24, 0, 37, 25, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Ball Lightning', 28, 0, 67, 0, ["Projectile", "Spell", "AoE", "Lightning"]);
      $this->createSkillGem('Blight', 1, 0, 0, 0, ["Spell", "Chaos", "AoE", "Channelling", "Duration"]);
      $this->createSkillGem('Bodyswap', 10, 0, 18, 0, ["Movement", "Spell", "AoE", "Fire"]);
      $this->createSkillGem('Bone Offering', 12, 0, 33, 0, ["Minion", "Spell", "Duration"]);
      $this->createSkillGem('Clarity', 10, 0, 29, 0, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Cold Snap', 4, 0, 16, 0, ["Spell", "AoE", "Cold"]);
      $this->createSkillGem('Conductivity', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration", "Lightning"]);
      $this->createSkillGem('Contagion', 4, 0, 0, 0, ["Spell", "AoE", "Duration", "Chaos"]);
      $this->createSkillGem('Conversion Trap', 4, 0, 0, 0, ["Trap", "Spell", "Duration"]);
      $this->createSkillGem('Convocation', 24, 0, 58, 0, ["Minion", "Spell", "Duration"]);
      $this->createSkillGem('Dark Pact', 28, 0, 67, 0, ["Minion", "Spell", "AoE", "Chaining", "Chaos"]);
      $this->createSkillGem('Despair', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration", "Chaos"]);
      $this->createSkillGem('Discharge', 28, 0, 67, 0, ["Spell", "AoE", "Fire", "Cold", "Lightning"]);
      $this->createSkillGem('Discipline', 24, 0, 58, 0, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Elemental Weakness', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Enfeeble', 24, 0, 58, 0, ["Curse", "Spell", "AoE", "Duration"]);
      $this->createSkillGem('Essence Drain', 12, 0, 21, 14, ["Projectile", "Spell", "Duration", "Chaos"]);
      $this->createSkillGem('Fire Nova Mine', 12, 0, 33, 0, ["AoE", "Mine", "Spell", "Fire", "Duration"]);
      $this->createSkillGem('Fireball', 1, 0, 0, 0, ["Projectile", "Spell", "AoE", "Fire"]);
      $this->createSkillGem('Firestorm', 12, 0, 33, 0, ["Spell", "AoE", "Duration", "Fire"]);
      $this->createSkillGem('Flame Dash', 10, 0, 29, 0, ["Spell", "Movement", "Duration", "Fire"]);
      $this->createSkillGem('Flame Surge', 12, 0, 33, 0, ["Spell", "AoE", "Fire"]);
      $this->createSkillGem('Flameblast', 28, 0, 67, 0, ["Spell", "AoE", "Fire", "Channelling"]);
      $this->createSkillGem('Flammability', 24, 25, 37, 0, ["Curse", "Spell", "AoE", "Duration", "Fire"]);
      $this->createSkillGem('Flesh Offering', 12, 0, 33, 0, ["Minion", "Spell", "Duration"]);
      $this->createSkillGem('Freezing Pulse', 1, 0, 0, 0, ["Projectile", "Spell", "Cold"]);
      $this->createSkillGem('Frost Bomb', 4, 0, 16, 0, ["Spell", "AoE", "Duration", "Cold"]);
      $this->createSkillGem('Frost Wall', 4, 0, 16, 0, ["Spell", "Duration", "Cold"]);
      $this->createSkillGem('Frostbite', 24, 0, 37, 25, ["Curse", "Spell", "AoE", "Duration", "Cold"]);
      $this->createSkillGem('Frostbolt', 1, 0, 0, 0, ["Projectile", "Spell", "Cold"]);
      $this->createSkillGem('Glacial Cascade', 28, 0, 67, 0, ["Spell", "AoE", "Cold"]);
      $this->createSkillGem('Herald of Thunder', 16, 0, 41, 0, ["Cast", "AoE", "Duration", "Lightning", "Herald"]);
      $this->createSkillGem('Ice Nova', 12, 0, 33, 0, ["Spell", "AoE", "Cold"]);
      $this->createSkillGem('Ice Spear', 12, 0, 33, 0, ["Projectile", "Spell", "Cold"]);
      $this->createSkillGem('Incinerate', 12, 0, 33, 0, ["Projectile", "Spell", "Fire", "Channelling"]);
      $this->createSkillGem('Kinetic Blast', 28, 0, 67, 0, ["Attack", "AoE", "Projectile"]);
      $this->createSkillGem('Lightning Tendrils', 1, 0, 0, 0, ["Spell", "AoE", "Lightning", "Channelling"]);
      $this->createSkillGem('Lightning Trap', 12, 0, 21, 14, ["Projectile", "Trap", "Spell", "Duration", "Lightning"]);
      $this->createSkillGem('Lightning Warp', 10, 0, 29, 0, ["Spell", "AoE", "Duration", "Movement", "Lightning"]);
      $this->createSkillGem('Magma Orb', 1, 0, 0, 0, ["Projectile", "Spell", "AoE", "Fire", "Chaining"]);
      $this->createSkillGem('Orb of Storms', 4, 0, 16, 0, ["Lightning", "Spell", "Duration", "AoE", "Chaining"]);
      $this->createSkillGem('Power Siphon', 12, 0, 33, 0, ["Attack", "Projectile"]);
      $this->createSkillGem('Purity of Elements', 24, 25, 37, 0, ["Aura", "Spell", "AoE"]);
      $this->createSkillGem('Purity of Lightning', 24, 0, 58, 0, ["Aura", "Spell", "AoE", "Lightning"]);
      $this->createSkillGem('Raise Spectre', 28, 0, 67, 0, ["Spell", "Minion"]);
      $this->createSkillGem('Raise Zombie', 1, 0, 0, 0, ["Spell", "Minion"]);
      $this->createSkillGem('Righteous Fire', 16, 18, 26, 0, ["Spell", "AoE", "Fire"]);
      $this->createSkillGem('Scorching Ray', 12, 0, 33, 0, ["Spell", "Fire", "Duration", "Channelling"]);
      $this->createSkillGem('Shock Nova', 28, 0, 67, 0, ["Spell", "AoE", "Lightning"]);
      $this->createSkillGem('Spark', 1, 0, 0, 0, ["Projectile", "Spell", "Duration", "Lightning"]);
      $this->createSkillGem('Spirit Offering', 12, 0, 33, 0, ["Minion", "Spell", "Duration"]);
      $this->createSkillGem('Storm Burst', 28, 0, 67, 0, ["Projectile", "AoE", "Spell", "Lightning", "Channelling"]);
      $this->createSkillGem('Storm Call', 12, 0, 33, 0, ["Spell", "AoE", "Duration", "Lightning"]);
      $this->createSkillGem('Summon Chaos Golem', 34, 0, 79, 0, ["Chaos", "Minion", "Spell", "Golem"]);
      $this->createSkillGem('Summon Lightning Golem', 34, 0, 50, 35, ["Lightning", "Minion", "Spell", "Golem"]);
      $this->createSkillGem('Summon Raging Spirit', 4, 0, 16, 0, ["Spell", "Minion", "Duration", "Fire"]);
      $this->createSkillGem('Summon Skeleton', 10, 0, 29, 0, ["Spell", "Minion", "Duration"]);
      $this->createSkillGem('Tempest Shield', 16, 18, 26, 0, ["Spell", "Lightning", "Chaining", "Duration"]);
      $this->createSkillGem('Vortex', 28, 0, 67, 0, ["Spell", "AoE", "Cold", "Duration"]);
      $this->createSkillGem('Wither', 10, 0, 29, 0, ["Spell", "AoE", "Duration", "Chaos", "Channelling"]);
      $this->createSkillGem('Wrath', 24, 0, 58, 0, ["Aura", "Spell", "AoE", "Lightning"]);

      /**
      * Dexterity Support Skill Gems as listed on /Skill_gem
      */
      $this->createSkillGem('Added Cold Damage Support', 8, 0, 0, 18, ["Cold", "Support"]);
      $this->createSkillGem('Additional Accuracy Support', 8, 0, 0, 0, ["Attack", "Support"]);
      $this->createSkillGem('Blind Support', 8, 0, 0, 18, ["Support"]);
      $this->createSkillGem('Block Chance Reduction Support', 18, 0, 14, 21, ["Support"]);
      $this->createSkillGem('Cast On Critical Strike Support', 38, 0, 27, 40, ["Support", "Spell", "Trigger"]);
      $this->createSkillGem('Cast On Death Support', 38, 0, 27, 40, ["Support", "Spell", "Trigger"]);
      $this->createSkillGem('Chain Support', 38, 0, 0, 63, ["Support", "Chaining", "Projectile"]);
      $this->createSkillGem('Chance to Flee Support', 8, 0, 0, 0, ["Support"]);
      $this->createSkillGem('Cluster Traps Support', 38, 0, 0, 63, ["Trap", "Support"]);
      $this->createSkillGem('Cold Penetration Support', 31, 0, 0, 52, ["Cold", "Support"]);
      $this->createSkillGem('Culling Strike Support', 18, 0, 0, 33, ["Support"]);
      $this->createSkillGem('Deadly Ailments Support', 18, 0, 14, 21, ["Support"]);
      $this->createSkillGem('Enhance Support', 1, 0, 0, 0, ["Support"]);
      $this->createSkillGem('Faster Attacks Support', 18, 0, 0, 33, ["Attack", "Support"]);
      $this->createSkillGem('Faster Projectiles Support', 31, 0, 0, 52, ["Support", "Projectile"]);
      $this->createSkillGem('Fork Support', 31, 0, 0, 52, ["Support", "Projectile"]);
      $this->createSkillGem('Greater Multiple Projectiles Support', 38, 0, 0, 63, ["Support", "Projectile"]);
      $this->createSkillGem('Hypothermia Support', 31, 0, 0, 52, ["Cold", "Support"]);
      $this->createSkillGem('Ice Bite Support', 31, 0, 0, 52, ["Cold", "Support"]);
      $this->createSkillGem('Lesser Multiple Projectiles Support', 8, 0, 0, 18, ["Support", "Projectile"]);
      $this->createSkillGem('Lesser Poison Support', 1, 0, 0, 0, ["Chaos", "Support"]);
      $this->createSkillGem('Mana Leech Support', 31, 0, 0, 52, ["Support"]);
      $this->createSkillGem('Mirage Archer Support', 4, 0, 0, 0, ["Bow", "Attack", "Support", "Duration"]);
      $this->createSkillGem('Multiple Traps Support', 8, 0, 0, 0, ["Support", "Trap"]);
      $this->createSkillGem('Onslaught Support', 1, 0, 0, 0, ["Support"]);
      $this->createSkillGem('Physical Projectile Attack Damage Support', 18, 0, 0, 33, ["Projectile", "Attack", "Support"]);
      $this->createSkillGem('Pierce Support', 1, 0, 0, 0, ["Support", "Projectile"]);
      $this->createSkillGem('Point Blank Support', 18, 0, 0, 33, ["Projectile", "Attack", "Support"]);
      $this->createSkillGem('Poison Support', 31, 0, 0, 52, ["Chaos", "Support"]);
      $this->createSkillGem('Slower Projectiles Support', 31, 0, 0, 52, ["Support", "Projectile"]);
      $this->createSkillGem('Swift Affliction Support', 31, 0, 0, 52, ["Support", "Duration"]);
      $this->createSkillGem('Trap and Mine Damage Support', 18, 0, 14, 21, ["Support", "Trap", "Mine"]);
      $this->createSkillGem('Trap Cooldown Support', 31, 0, 0, 52, ["Trap", "Support"]);
      $this->createSkillGem('Trap Support', 8, 0, 0, 0, ["Support", "Trap", "Duration"]);
      $this->createSkillGem('Vile Toxins Support', 38, 0, 0, 63, ["Support"]);
      $this->createSkillGem('Void Manipulation Support', 8, 0, 0, 0, ["Chaos", "Support"]);
      $this->createSkillGem('Volley Support', 4, 0, 0, 0, ["Support", "Projectile"]);

      /**
      * Strength Support Skill Gems as listed on /Skill_gem
      */
      $this->createSkillGem('Added Fire Damage Support', 8, 18, 0, 0, ["Fire", "Support"]);
      $this->createSkillGem('Ancestral Call Support', 4, 0, 0, 0, ["Support", "Melee", "Attack"]);
      $this->createSkillGem('Blood Magic Support', 31, 52, 0, 0, ["Support"]);
      $this->createSkillGem('Bloodlust Support', 18, 33, 0, 0, ["Attack", "Support", "Melee"]);
      $this->createSkillGem('Brutality Support', 38, 63, 0, 0, ["Support"]);
      $this->createSkillGem('Burning Damage Support', 31, 33, 0, 0, ["Fire", "Support"]);
      $this->createSkillGem('Cast on Melee Kill Support', 38, 40, 27, 0, ["Support", "Melee", "Attack", "Spell", "Trigger"]);
      $this->createSkillGem('Cast when Damage Taken Support', 38, 40, 27, 0, ["Support", "Spell", "Trigger"]);
      $this->createSkillGem('Chance to Bleed Support', 1, 0, 0, 0, ["Attack", "Support"]);
      $this->createSkillGem('Cold to Fire Support', 18, 21, 14, 0, ["Cold", "Fire", "Support"]);
      $this->createSkillGem('Damage on Full Life Support', 18, 33, 0, 0, ["Attack", "Support"]);
      $this->createSkillGem('Elemental Damage with Attacks Support', 18, 21, 14, 0, ["Attack", "Support"]);
      $this->createSkillGem('Empower Support', 1, 0, 0, 0, ["Support"]);
      $this->createSkillGem('Endurance Charge on Melee Stun Support', 18, 33, 0, 0, ["Support", "Melee", "Attack"]);
      $this->createSkillGem('Fire Penetration Support', 31, 52, 0, 0, ["Fire", "Support"]);
      $this->createSkillGem('Fortify Support', 31, 52, 0, 0, ["Attack", "Support", "Melee"]);
      $this->createSkillGem('Generosity Support', 31, 33, 23, 0, ["Support", "Aura"]);
      $this->createSkillGem('Increased Duration Support', 31, 52, 0, 0, ["Support", "Duration"]);
      $this->createSkillGem('Iron Grip Support', 18, 33, 0, 0, ["Projectile", "Support"]);
      $this->createSkillGem('Iron Will Support', 18, 33, 0, 0, ["Spell", "Support"]);
      $this->createSkillGem('Knockback Support', 8, 18, 0, 0, ["Support"]);
      $this->createSkillGem('Less Duration Support', 31, 52, 0, 0, ["Support", "Duration"]);
      $this->createSkillGem('Life Gain on Hit Support', 8, 18, 0, 0, ["Attack", "Support"]);
      $this->createSkillGem('Life Leech Support', 31, 52, 0, 0, ["Support"]);
      $this->createSkillGem('Maim Support', 8, 18, 0, 0, ["Attack", "Support"]);
      $this->createSkillGem('Melee Physical Damage Support', 18, 33, 0, 0, ["Melee", "Support", "Attack"]);
      $this->createSkillGem('Melee Support', 8, 18, 0, 0, ["Support", "Melee", "Attack", "AoE"]);
      $this->createSkillGem('Multistrike Support', 38, 40, 0, 27, ["Attack", "Melee", "Support"]);
      $this->createSkillGem('Ranged Attack Totem Support', 8, 0, 0, 0, ["Bow", "Projectile", "Support", "Totem", "Attack", "Duration"]);
      $this->createSkillGem('Reduced Mana Support', 31, 52, 0, 0, ["Support"]);
      $this->createSkillGem('Ruthless Support', 1, 0, 0, 0, ["Support", "Melee", "Attack"]);
      $this->createSkillGem('Spell Totem Support', 8, 0, 0, 0, ["Support", "Totem", "Duration"]);
      $this->createSkillGem('Stun Support', 8, 18, 0, 0, ["Attack", "Support"]);

      /**
      * Intelligence Support Skill Gems as listed on /Skill_gem
      */
      $this->createSkillGem('Added Chaos Damage Support', 31, 0, 52, 0, ["Chaos", "Support"]);
      $this->createSkillGem('Added Lightning Damage Support', 8, 0, 18, 0, ["Lightning", "Support"]);
      $this->createSkillGem('Arcane Surge Support', 1, 0, 0, 0, ["Support", "Spell", "Duration"]);
      $this->createSkillGem('Blasphemy Support', 31, 0, 52, 0, ["Support", "Curse", "Aura"]);
      $this->createSkillGem('Cast when Stunned Support', 38, 0, 40, 27, ["Support", "Spell", "Trigger"]);
      $this->createSkillGem('Cast while Channelling Support', 38, 0, 40, 27, ["Support", "Channelling", "Spell"]);
      $this->createSkillGem('Chance to Ignite Support', 8, 0, 18, 0, ["Fire", "Support"]);
      $this->createSkillGem('Concentrated Effect Support', 18, 0, 33, 0, ["Support", "AoE"]);
      $this->createSkillGem('Controlled Destruction Support', 18, 0, 33, 0, ["Spell", "Support"]);
      $this->createSkillGem('Curse On Hit Support', 38, 0, 63, 0, ["Curse", "Trigger", "Support"]);
      $this->createSkillGem('Decay Support', 38, 0, 40, 27, ["Chaos", "Support"]);
      $this->createSkillGem('Efficacy Support', 31, 0, 52, 0, ["Support", "Duration"]);
      $this->createSkillGem('Elemental Focus Support', 18, 0, 33, 0, ["Support"]);
      $this->createSkillGem('Elemental Proliferation Support', 1, 0, 0, 0, ["Cold", "Fire", "Lightning", "Support", "AoE"]);
      $this->createSkillGem('Enlighten Support', 1, 0, 0, 0, ["Support"]);
      $this->createSkillGem('Faster Casting Support', 18, 0, 33, 0, ["Support", "Spell"]);
      $this->createSkillGem('Ignite Proliferation Support', 38, 27, 40, 0, ["Fire", "Support", "AoE"]);
      $this->createSkillGem('Immolate Support', 38, 27, 40, 0, ["Fire", "Support"]);
      $this->createSkillGem('Increased Area of Effect Support', 38, 0, 63, 0, ["Support", "AoE"]);
      $this->createSkillGem('Increased Critical Damage Support', 18, 0, 33, 0, ["Support"]);
      $this->createSkillGem('Increased Critical Strikes Support', 8, 0, 18, 0, ["Support"]);
      $this->createSkillGem('Innervate Support', 31, 0, 52, 0, ["Lightning", "Support", "Duration"]);
      $this->createSkillGem('Item Rarity', 31, 0, 52, 0, ["Support"]);
      $this->createSkillGem('Lightning Penetration Support', 31, 0, 52, 0, ["Lightning", "Support"]);
      $this->createSkillGem('Minefield Support', 8, 0, 0, 0, ["Support", "Mine"]);
      $this->createSkillGem('Minion and Totem Elemental Resistance Support', 31, 23, 33, 0, ["Support", "Minion"]);
      $this->createSkillGem('Minion Damage Support', 8, 0, 18, 0, ["Support", "Minion"]);
      $this->createSkillGem('Minion Life Support', 18, 0, 33, 0, ["Support", "Minion"]);
      $this->createSkillGem('Minion Speed Support', 18, 0, 33, 0, ["Movement", "Support", "Minion"]);
      $this->createSkillGem('Physical to Lightning Support', 18, 14, 21, 0, ["Lightning", "Support"]);
      $this->createSkillGem('Power Charge On Critical Support', 8, 0, 33, 0, ["Support"]);
      $this->createSkillGem('Remote Mine Support', 8, 0, 0, 0, ["Support", "Mine", "Duration"]);
      $this->createSkillGem('Spell Cascade Support', 4, 0, 0, 0, ["AoE", "Spell", "Support"]);
      $this->createSkillGem('Spell Echo Support', 38, 0, 63, 0, ["Spell", "Support"]);
      $this->createSkillGem('Storm Barrier Support', 4, 0, 0, 0, ["Lightning", "Support", "Channelling"]);
      $this->createSkillGem('Unbound Ailments Support', 8, 0, 0, 0, ["Support"]);

      /**
      * Skipping Vaal Gems until I implement isCorrupted into Item-model
      */

      # Vaal Gems goes here

      /**
      * Other Quest Items (in order of occurrence)
      */
      $this->createItem("Medium Life Flask", 3, 4, 1);
      $this->createItem("Medium Mana Flask", 3, 4, 1);
      $this->createItem("Quicksilver Flask", 4, 4, 1);

      $this->createItem("Book of Regrets +2", 0, 0, 0);

      $this->createItem("Book of Skill +1", 0, 0, 0);

      $this->createItem("Chain Belt", 2, 15, 3);
      $this->createItem("Heavy Belt", 10, 15, 3);
      $this->createItem("Leather Belt", 10, 15, 3);
      $this->createItem("Rustic Sash", 2, 15, 3);
      $this->createItem("Greater Life Flask", 12, 15, 2);
      $this->createItem("Greater Mana Flask", 12, 15, 2);
      $this->createItem("Quicksilver Flask", 4, 15, 2);

      $this->createItem("Survival Instincts", 0, 1, 4);
      $this->createItem("Survival Secrets", 0, 1, 4);
      $this->createItem("Survival Skills", 0, 1, 4);

      $this->createItem("The Apex", 0, 0, 0);
      $this->createItem("Sewer Keys", 0, 0, 0);
      $this->createItem("Book of Skill +2", 0, 0, 0);
      $this->createItem("Infernal Talc", 0, 0, 0);

      $this->createItem("Amber Amulet", 7, 28, 3);
      $this->createItem("Gold Amulet", 15, 28, 3);
      $this->createItem("Jade Amulet", 7, 28, 3);
      $this->createItem("Lapis Amulet", 7, 28, 3);

      $this->createItem("Coral Ring", 4, 30, 3);
      $this->createItem("Gold Ring", 20, 30, 3);
      $this->createItem("Paua Ring", 4, 30, 3);

      $this->createItem("Book of Skill +1/+2", 0, 0, 0);

      $this->createItem("Ruby Ring", 16, 41, 3);
      $this->createItem("Sapphire Ring", 8, 41, 3);
      $this->createItem("Topaz Ring", 12, 41, 3);
      $this->createItem("Two-Stone Ring (Ruby/Sapphire)", 20, 41, 3);
      $this->createItem("Two-Stone Ring (Sapphire/Topaz)", 20, 41, 3);
      $this->createItem("Two-Stone Ring (Ruby/Topaz)", 20, 41, 3);

      $this->createItem("Colossal Hybrid Flask", 40, 42, 2);
      $this->createItem("Hallowed Life Flask", 42, 42, 2);
      $this->createItem("Hallowed Mana Flask", 42, 42, 2);
      $this->createItem("Quicksilver Flask", 4, 42, 2);
      $this->createItem("Silver Flask", 22, 42, 2);
      $this->createItem("Stibnite Flask", 14, 42, 2);

      # Death to Purity (Act 5)
    }

    public function createSkillGem($name, $req_level, $req_str, $req_int, $req_dex, $str_tags){
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

    public function createItem($name, $req_level, $ilvl, $rarity){
      $existingItem = Item::where('name', 'like', $name)->where('req_level', $req_level)->where('ilvl', $ilvl)->where('rarity', $rarity)->first();
      if($existingItem == null){
        $item = new Item();
        $item->name = $name;
        $item->req_level = $req_level;
        $item->ilvl = $ilvl;
        $item->rarity = $rarity;
        $item->save();
        echo('Added Item #' . $item->id . " - " . $item->name . "\n");
      }
      else{
        echo('Already found ' . $name . ' in DB, skipping..' . "\n");
      }
    }
}
