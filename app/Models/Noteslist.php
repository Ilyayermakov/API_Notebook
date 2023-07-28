<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noteslist extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'note_id',
        'company',
        'telephone',
        'email',
    ];
}
