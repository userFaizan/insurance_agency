<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorLoginInfo extends Model
{
    use HasFactory;
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}

