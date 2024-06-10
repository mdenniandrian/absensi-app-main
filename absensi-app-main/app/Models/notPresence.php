<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Presence extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function presences()
    {
        return $this->belongsTo(Presence::class);
    }
    public function permisson(): BelongsTo
    {
        return $this->belongsTo(Permission::class, 'user_id', 'user_id');
    }
}
