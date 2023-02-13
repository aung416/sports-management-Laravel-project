<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchCreateForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name1',
        'team_name2',
        'date_time',
       
    ];
}
