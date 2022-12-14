<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    public function vendorLoginInfo()
    {
        return $this->hasOne(VendorLoginInfo::class);
    }
    public function vendorPointOfContact()
    {
        return $this->hasMany(VendorPointOfContact::class);
    }
}
