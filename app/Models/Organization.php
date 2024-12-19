<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = "organizations";

    protected $fillable = [
        'id', // TODO: comment this in production
        'name', 'name_full'
    ];
}
