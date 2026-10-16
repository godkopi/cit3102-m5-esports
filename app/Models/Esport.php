<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Esport extends Model
{
   protected $fillable = [
    'game_title',
    'team_name',
    'roster',
    'wins',
   ];
}
