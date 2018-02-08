<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemTag;

class Item extends Model
{
    public function getTags(){
      $itemtags = ItemTag::where('item_id', $this->id)->get();
      $tags = [];
      foreach($itemtags as $itemtag){
        array_push($tags, $itemtag->getTag());
      }
      return $tags;
    }
}
