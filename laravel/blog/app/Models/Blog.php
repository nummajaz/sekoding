<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    // protected $table = 'nama_table'; jika nama table tidak plurar dengan model
    //public $timestamps = false; jika tidak ada

    protected $fillable = ['title', 'description'];//whitelist


}
