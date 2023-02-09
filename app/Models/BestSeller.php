<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSeller extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'siteid',
        'dataset',
        'type',
        'code',
        'label',
        'url',
        'config',
        'start',
        'end',
        'scale',
        'rating',
        'ratings',
        'instock',
        'target',
        'status',
        'mtime',
        'ctime',
        'editor'
    ];
    protected $primaryKey = 'id';
    protected $table = 'mshop_product';
}
