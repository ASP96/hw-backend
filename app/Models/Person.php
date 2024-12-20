<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "persons";
    protected $fillable = [
        'mother_id',
        'father_id',
        'lastname',
        'name',
        'middlename',
        'birthday',
        'gender'
    ];

    /**
     * Summary of children
     */
    public function children()
    {
        return []
        ;
        /*Person::where('mother_id', '=', $this->id)
            ->orWhere('father_id', '=', $this->id)
            ->get()
        ;*/
    }



    /**
     * Mother
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mother()
    {
        return $this->belongsTo(Person::class, 'mother_id', 'id');
    }

    /**
     * Father
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function father()
    {
        return $this->belongsTo(Person::class, 'father_id', 'id');
    }

    /**
     * Accessor for Age.
     */
    public function age()
    {
        return Carbon::parse($this->attributes['birthday'])->age;
    }
}
