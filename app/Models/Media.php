<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'siteid',
        'type',
        'fsname',
        'langid',
        'domain',
        'label',
        'link',
        'preview',
        'mimetype',
        'status',
        'mtime',
        'ctime',
        'editor'
    ];
    protected $primaryKey = 'id';
    protected $table = 'mshop_media';
}
