<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'id';
    protected $date = ['ngayDang'];
    protected $fillable = [
        'tieuDe',
        'tomTat',
        'urlHinh',
        'ngayDang',
        'noiDung',
        'idLT',
        'xem',
        'noiBat',
        'anHien',
        'tags',
        'lang'
    ];
}
