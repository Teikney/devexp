<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Workspace extends Model
{
    use HasFactory, Sortable;

    //database table associated with the Workspace model
    public $table = 'workspaces';

    //disables timestamps on 'workspaces' table ['created_at','updated_at']
    public $timestamps = false;

    // the guarded attributes is used to prevent specific variables on mass assignments
    protected $guarded = [];

    //the 'with' attribute allows search filters on the relationship tables
    protected $with = ['institution','unit'];

    protected $sortable = ['name','institution_id','unit_id'];

    public function scopeFilter($query, array $filters) {
        $query->when( $filters['search'] ?? false, fn($query, $search) =>
            $query->where('name', 'like', '%' . $search . '%' )
                  ->orWhere('code', 'like', '%' . $search . '%' )
        );
    }

    public function unit() {
        return $this->belongsTo(Unit::class,'unit_id','id');
    }

    public function institution() {
        return $this->belongsTo(Institution::class,'institution_id','id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
