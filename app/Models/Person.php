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
        'birthday',
        'gender'
    ];

    /**
     * Summary of children
     */
    public function children()
    {
        return collect([
            $this->hasMany(Person::class, 'mother_id','id'),
            $this->hasMany(Person::class, 'father_id','id')
        ]);
    }


    /**
     * Mother
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mother(){
        return $this->belongsTo(Person::class, 'mother_id','id');
    }

    /**
     * Father
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function father(){
        return $this->belongsTo(Person::class, 'father_id','id');
    }
}
