<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'start-date',
        'finish-date',
        'description',
        'problem',
        'solution',
        'implementations',
        'benefits'
    ];
}
