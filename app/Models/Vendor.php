<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'vendors';
    protected $fillable = [
        'id', // TODO: comment this in production
        'head', 'country'
    ];

}
