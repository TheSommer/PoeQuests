<?php

use Illuminate\Database\Seeder;
use App\Quest;

class QuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createQuest(1, 1, 'Enemy at the Gate');
        $this->createQuest(1, 2, 'Mercy Mission');
        $this->createQuest(1, 3, 'Breaking Some Eggs');
        $this->createQuest(1, 4, 'A Dirty Job');
        $this->createQuest(1, 5, 'The Dweller of the Deep');
        $this->createQuest(1, 6, 'The Caged Brute');
        $this->createQuest(1, 7, 'The Marooned Mariner');
        $this->createQuest(1, 8, 'The Siren\'s Cadence');
        $this->createQuest(1, 9, 'The Way Forward');

        $this->createQuest(2, 1, 'The Great White Beast');
        $this->createQuest(2, 2, 'Intruders in Black');
        $this->createQuest(2, 3, 'Through Sacred Ground');
        $this->createQuest(2, 4, 'Sharp and Cruel');
        $this->createQuest(2, 5, 'The Root of the Problem');
        $this->createQuest(2, 6, 'Deal with the Bandits');
        $this->createQuest(2, 7, 'The Bandit Lord Alira');
        $this->createQuest(2, 8, 'The Bandit Lord Kraitlyn');
        $this->createQuest(2, 9, 'The Bandit Lord Oak');
        $this->createQuest(2, 10, 'Shadow of the Vaal');

        $this->createQuest(3, 1, 'Lost in Love');
        $this->createQuest(3, 2, 'Victario\'s Secrets');
        $this->createQuest(3, 3, 'Sever the Right Hand');
        $this->createQuest(3, 4, 'Fiery Dust');
        $this->createQuest(3, 5, 'The Gemling Queen');
        $this->createQuest(3, 6, 'The Ribbon Spool');
        $this->createQuest(3, 7, 'A Swig of Hope');
        $this->createQuest(3, 8, 'A Fixture of Fate');
        $this->createQuest(3, 9, 'Piety\'s Pets');
        $this->createQuest(3, 10, 'Sceptre of God');

        $this->createQuest(4, 1, 'Breaking the Seal');
        $this->createQuest(4, 2, 'An Indomitable Spirit');
        $this->createQuest(4, 3, 'The King of Fury');
        $this->createQuest(4, 4, 'The King of Desire');
        $this->createQuest(4, 5, 'Corpus Malachus');
        $this->createQuest(4, 6, 'The Eternal Nightmare');

        $this->createQuest(5, 1, 'Return to Oriath');
        $this->createQuest(5, 2, 'The Key to Freedom');
        $this->createQuest(5, 3, 'In Service to Science');
        $this->createQuest(5, 4, 'Death to Purity');
        $this->createQuest(5, 5, 'The King\'s Feast');
        $this->createQuest(5, 6, 'Kitava\'s Torments');
        $this->createQuest(5, 7, 'The Ravenous God');

        $this->createQuest(6, 1, 'Fallen from Grace');
        $this->createQuest(6, 2, 'Bestel\'s Epic');
        $this->createQuest(6, 3, 'The Father of War');
        $this->createQuest(6, 4, 'Essence of Umbra');
        $this->createQuest(6, 5, 'The Cloven One');
        $this->createQuest(6, 6, 'The Puppet Mistress');
        $this->createQuest(6, 7, 'The Brine King');

        $this->createQuest(7, 1, 'The Silver Locket');
        $this->createQuest(7, 2, 'Essence of the Artist');
        $this->createQuest(7, 3, 'Web of Secrets');
        $this->createQuest(7, 4, 'The Master of a Million Faces');
        $this->createQuest(7, 5, 'In Memory of Greust');
        $this->createQuest(7, 6, 'Queen of Despair');
        $this->createQuest(7, 7, 'Kishara\'s Star');
        $this->createQuest(7, 8, 'Lighting the Way');
        $this->createQuest(7, 9, 'The Mother of Spiders');

        $this->createQuest(8, 1, 'Essence of the Hag');
        $this->createQuest(8, 2, 'Love is Dead');
        $this->createQuest(8, 3, 'The Gemling Legion');
        $this->createQuest(8, 4, 'Reflection of Terror');
        $this->createQuest(8, 5, 'The Wings of Vastiri');
        $this->createQuest(8, 6, 'Lunar Eclipse');
        $this->createQuest(8, 7, 'Solar Eclipse');

        $this->createQuest(9, 1, 'The Storm Blade');
        $this->createQuest(9, 2, 'Fastis Fortuna');
        $this->createQuest(9, 3, 'The Ruler of Highgate');
        $this->createQuest(9, 4, 'Queen of the Sands');
        $this->createQuest(9, 5, 'Recurring Nightmare');

        $this->createQuest(10, 1, 'Safe Passage');
        $this->createQuest(10, 2, 'Map to Tsoatha');
        $this->createQuest(10, 3, 'No Love for Old Ghosts');
        $this->createQuest(10, 4, 'Death and Rebirth');
        $this->createQuest(10, 5, 'An End to Hunger');
    }

    public function createQuest($act, $order, $title){
      $quest = new Quest();
      $quest->act = $act;
      $quest->order = $order;
      $quest->title = $title;
      $quest->save();
    }
}
