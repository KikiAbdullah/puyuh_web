<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandang extends Model
{
    protected $table = 'kandangs';
    protected $primaryKey = 'id';
    protected $fillable = ['jumlah_ternak'];
}
