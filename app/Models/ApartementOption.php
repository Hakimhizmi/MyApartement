<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartementOption extends Model
{
    use HasFactory;
    public $table = 'apartement_options';
    protected $fillable = ['idA', 'idO'];

   

    

}
