<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballscoreFrom extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name1',
        'football_score',
        'team_name2',
       
    ];
}
