<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @var string $name 
 * @var string $name_short
 * @var string $name_full
 */
class Profilactica extends Model
{
    /** @use HasFactory<\Database\Factories\ProfilacticaFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'profilactics';
    protected $fillable = [
        'name', 'name_short', 'name_full'
    ];


}
