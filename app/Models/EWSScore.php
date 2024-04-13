<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EWSScore extends Model
{
    use HasFactory;
    protected $table = 'ews_score';
    protected $guarded = ['id'];

    public function healthRecords(): BelongsTo
    {
        return $this->belongsTo(HealthRecords::class, 'record_id');
    }
}
