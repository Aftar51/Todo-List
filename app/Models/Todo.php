<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'deadline',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

}
