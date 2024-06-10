<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RProblem extends Model
{
    use HasFactory;
    protected $table = 'r_problems';
    protected $fillable = [
        'type',
        'problems',
        'cause',
        'solved',
        'loc_jobs',
        'status',
        'pic',
        'updated_at',
        'date'
    ];
}
