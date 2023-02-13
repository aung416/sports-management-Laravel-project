<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class registrationForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'Team_Name',
        'Player_Name',
        'Player_ID',
        'Player_Age',
        'Session',
        'Player_Address',
        'Email',
        'Contract_Number',
        'Blood_Group',
        'Medical_History',
        'Sports_Category',
        'Position',
    ];
}
