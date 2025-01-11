<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'converser_1',
        'converser_2',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function converser1()
    {
        return $this->belongsTo(User::class, 'converser_1', 'id');
    }

    public function converser2()
    {
        return $this->belongsTo(User::class, 'converser_2', 'id');
    }
}
