<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MonitoringFrequency extends Model
{
    use HasFactory;
    protected $table = 'monitoring_frequency';
    protected $guarded = ['id'];

    public function protocol(): HasMany
    {
        return $this->hasMany(Protocol::class, 'monitor_freq_id');
    }
}
