<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Vendor;

/**
 * @var int $vendor_id ID-производителя
 * @var string $head Название модели
 * @var boolean $end_of_life Окончание срока производства. Больше не производится
 */
class VendorModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'vendor_models';

    protected $fillable = [
        'vendor_id',
        'name',
        'end_of_life'
    ];

    protected $casts = [
        'end_of_life'=> 'boolean'
    ];



    /**
     * Summary of parent
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor(){
        return $this->belongsTo(Vendor::class, 'id', 'vendor_id');;
    }
    
}
