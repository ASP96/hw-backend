<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\VendorModel;

class Vendor extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'vendors';
    protected $fillable = [
        'id', // TODO: comment this in production
        'head', 'country'
    ];

    /**
     * Models of this Vendor
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function models() {
        return $this->hasMany(VendorModel::class, 'vendor_id', 'id');
    }
    
}
