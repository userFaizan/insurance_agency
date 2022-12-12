<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyAccountingInfo extends Model
{
    use HasFactory;
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agency_accounting_info';
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
