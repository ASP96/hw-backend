<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Vendor;

class HardwareModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'hardware_models';

    protected $fillable = [
        'vendor_id', 'head'
    ];


    /**
     * Summary of parent
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor(){
        return $this->belongsTo(Vendor::class, 'id', 'vendor_id');;
    }
    
}
