<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    protected $table = 'tbfasilitas';
    protected $fillable =['nama', 'jumlah'];
}
