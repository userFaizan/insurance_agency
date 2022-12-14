<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function physicalAddress()
    {
        return $this->hasMany(ClientPhysicalAddress::class);
    }
    public function married()
    {
        return $this->hasOne(ClientMarried::class);
    }

    public function history()
    {
        return $this->hasOne(ClientHistory::class);
    }
    public function companyAddress()
    {
        return $this->hasMany(ClientCompanyAddress::class);
    }
    public function businessInformation()
    {
        return $this->hasOne(ClientBusinessInformation::class);
    }
    public function additionPointOfContact()
    {
        return $this->hasOne(ClientAdditionalPointOfContact::class);
    }
}
