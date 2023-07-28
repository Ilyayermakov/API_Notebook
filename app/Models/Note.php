<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dateOfBirth',
        'photo',
    ];

    public function lists()
    {
        return $this->hasMany(Noteslist::class);
    }

    protected static function boot()
{
    parent::boot();

    static::deleting(function (Note $note) {
        $note->lists()->delete();
    });
}
}
