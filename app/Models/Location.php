<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *  Location
 */
class Location extends Model
{
    use SoftDeletes;
    
    protected $table = 'locations';
    
    /** @use HasFactory<\Database\Factories\LocationFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'parent_id',
        'name'
    ];

    /**
     * Summary of children
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id','id');
    }

    /**
     * Summary of parent
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent(){
        return $this->belongsTo(Location::class, 'parent_id', 'id');
    }

}
