<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class TalkList extends Model
{
  //
  protected $fillable = ['content'];

  public function reviews() {
      return $this->hasMany(Review, 'talkList_id', 'id');
  }
}
