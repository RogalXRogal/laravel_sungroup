<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_db extends Model
{
    protected $table = 'form_db';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'number',
        'message'
    ];
}
