<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Protocol extends Model
{
    use HasFactory;
    protected $table = 'protocols';
    protected $guarded = ['id'];

    public function scoreThres(): BelongsTo
    {
        return $this->belongsTo(ScoreThreshold::class, 'score_thres_id');
    }

    public function riskLevel(): BelongsTo
    {
        return $this->belongsTo(RiskLevel::class, 'risk_level_id');
    }

    public function protocolCategory(): BelongsTo
    {
        return $this->belongsTo(ProtocolCategory::class, 'category_id');
    }

    public function monitoringFreq(): BelongsTo
    {
        return $this->belongsTo(MonitoringFrequency::class, 'monitor_freq_id');
    }
}
