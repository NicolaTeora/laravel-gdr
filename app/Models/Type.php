<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  use HasFactory;

  public function characters()
  {
    return $this->hasMany(Character::class);
  }

  public function getAbstract($value, $n_chars)
  {
    return (strlen($value) > $n_chars) ? subst($value, 0, $n_chars) . '...' : $value;
  }
}
