<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
    ];
    public $table = 'options';
    public function appartements()
    {
        return $this->belongsToMany(apartement::class, 'apartement_options', 'idO', 'idA');
    }
}
