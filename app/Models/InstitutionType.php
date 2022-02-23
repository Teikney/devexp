<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function institution() {
        return $this->hasOne(Institution::class);
    }
}
