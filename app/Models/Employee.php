<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function paymentHistory()
    {
        return $this->hasMany(PaymentHistory::class);
    }
    public function familyInformation()
    {
        return $this->hasMany(FamilyInformation::class);
    }
    public function educationHistory()
    {
        return $this->hasMany(EducationHistory::class);
    }
    public function workHistory()
    {
        return $this->hasMany(WorkHistory::class);
    }
    public function jobDetail()
    {
        return $this->hasMany(JobDetail::class);
    }
}
