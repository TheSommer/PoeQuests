<?php

use Illuminate\Database\Seeder;
use App\Character;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCharacter("Marauder");
        $this->createCharacter("Templar");
        $this->createCharacter("Witch");
        $this->createCharacter("Shadow");
        $this->createCharacter("Ranger");
        $this->createCharacter("Duelist");
        $this->createCharacter("Scion");
    }
    private function createCharacter($name) {
        $character = new Character();
        $character->name = $name;
        $character->save();
    }
}
