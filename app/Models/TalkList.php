<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class TalkList extends Model
{
  //
  protected $fillable = ['content'];
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';
  public function reviews() {
      return $this->hasMany(Review, 'talkList_id', 'id');
  }
}
