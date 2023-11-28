<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PwdFamilyComposition extends Model
{
    use HasFactory;

    public $table = 'pwd_family_composition';
    protected $fillable = [
        'name',
        'relation_to_pwd_person',
        'age',
        'occupation'
    ];
}
