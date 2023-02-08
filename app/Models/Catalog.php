<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'siteid',
        'parentid',
        'level',
        'code',
        'label',
        'url',
        'config',
        'nleft',
        'nright',
        'target',
        'status',
        'editor',
        'mtime',
        'ctime'
    ];
    protected $primaryKey = 'id';
    protected $table = 'mshop_catalog';
}
