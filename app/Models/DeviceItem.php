<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function type() {
        return $this->belongsTo(DeviceType::class, 'device_type_id');
    }

    public function device() {
        return $this->hasOne(Device::class);
    }

}
