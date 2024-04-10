<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Character extends Model
{
    use HasFactory;
    protected $fillable = ['name',
    'description',
    'attack',
    'defense',
    'speed',
    'life' ];

    public function items()
    {

        return $this->belongsToMany(Item::class);

    }

    public function type() {
        return $this->belongsTo(Type::class);
      }

      public function getUrl(){
        return $this->type->Image;
      }
}
