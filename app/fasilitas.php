<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = 'tbfasilitas';
    protected $fillable =['nama', 'jumlah', 'posisi'];
}
