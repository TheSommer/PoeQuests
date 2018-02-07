<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createItem('Animate Weapon', 4, 0, 0, 0);
        $this->createItem('Animate Weapon', 4, 0, 0, 0);
    }

    public function createItem($name, $req_level, $req_str, $req_int, $req_dex){
      $existingItem = Item::where('name', 'like', $name)->first();
      if($existingItem == null){
        $item = new Item();
        $item->name = $name;
        $item->req_level = $req_level;
        $item->req_str = $req_str;
        $item->req_int = $req_int;
        $item->req_dex = $req_dex;
        $item->save();
      }
      else{
        print('Already found ' . $name . ' in DB, skipping..');
      }
    }
}
