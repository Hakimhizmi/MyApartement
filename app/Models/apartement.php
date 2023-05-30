<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class apartement extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'apartements';
    public function options()
    {
        return $this->belongsToMany(option::class, 'apartement_options', 'idA', 'idO');
    }
    public function mail()
    {
        return $this->belongsToMany(mail::class,'idA');
    }
}
