<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = 'kategori';


     protected $fillable = [
        'name', 'kategori','user_id',
    ]; 
}