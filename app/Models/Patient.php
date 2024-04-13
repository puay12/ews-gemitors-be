<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patient';
    protected $guarded = ['id'];

    public function healthRecords(): HasMany
    {
        return $this->hasMany(HealthRecords::class, 'patient_id');
    }
}
