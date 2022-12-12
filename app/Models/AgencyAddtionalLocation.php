<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyAddtionalLocation extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agency_addtional_location';
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
