<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function type() {
        return $this->belongsTo(InstitutionType::class,'institution_type_id');
    }

    public function county() {
        return $this->belongsTo(County::class);
    }
}
