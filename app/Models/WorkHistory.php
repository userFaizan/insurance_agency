<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    use HasFactory;
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_history';
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
