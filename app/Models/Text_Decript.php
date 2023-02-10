<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text_Decript extends Model
{
    protected $fillable = [
        'siteid',
        'type',
        'langid',
        'domain',
        'label',
        'content',
        'status',
        'mtime',
        'ctime',
        'editor',
    ];
    protected $primaryKey = 'id';
    protected $table = 'mshop_text';
}