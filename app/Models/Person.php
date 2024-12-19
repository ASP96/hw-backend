<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "persons";
    protected $fillable = [
        'mother_id', 'father_id',
        'lastname', 'name', 'middlename',
        'bithdate',
        'gender'
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
     * Summary of mother
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mother(){
        return $this->belongsTo(Location::class, 'parent_id','mother_id');
    }

    /**
     * Summary of father
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function father(){
        return $this->belongsTo(Location::class, 'parent_id','father_id');
    }
}
