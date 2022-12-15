<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agencies';
    protected $guarded = [];
    public function agencyAccountingInfo()
    {
        return $this->hasOne(AgencyAccountingInfo::class);
    }
    public function agencyAdditionalLocation()
    {
        return $this->hasMany(AgencyAddtionalLocation::class);
    }
    public function agencyDbaAdd()
    {
        return $this->hasMany(AgencyDbaAdd::class);
    }
    public function agencyLicenseInfo()
    {
        return $this->hasOne(AgencyLicenseInfo::class);
    }
    public function agencyLoginInfo()
    {
        return $this->hasMany(AgencyLogInInfo::class);
    }
    public function agencyNonResidentialState()
    {
        return $this->hasMany(AgencyNonResidentialState::class);
    }
    public function agencyEandOInfo()
    {
        return $this->hasOne(EAndOInfo::class);
    }
}
