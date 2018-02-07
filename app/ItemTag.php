<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class ItemTag extends Model
{
    public function getTag(){
      $tag = Tag::where('id', $this->tag_id)->first();
      return $tag;
    }
}
