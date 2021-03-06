<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function item() {
        return $this->belongsTo(DeviceItem::class,'device_item_id');
    }

}
