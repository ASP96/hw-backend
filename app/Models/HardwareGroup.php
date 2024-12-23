<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HardwareGroup extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'hardware_groups';

    protected $fillable = [
        'parent_id', 'name'
    ];

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo(HardwareGroup::class, 'parent_id', 'id');
    }

    /**
     * Summary of children
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children() {
        return $this->hasMany(HardwareGroup::class, 'parent_id', 'id');
    }
}
