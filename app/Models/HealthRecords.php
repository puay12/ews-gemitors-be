<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HealthRecords extends Model
{
    use HasFactory;
    protected $table = 'health_records';
    protected $guarded = ['id'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function ews_score(): HasOne
    {
        return $this->hasOne(EWSScore::class, 'record_id');
    }
}
