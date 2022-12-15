<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyLogInInfo extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'log_in_info';
    protected $guarded = [];
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
