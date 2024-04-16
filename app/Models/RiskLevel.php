<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RiskLevel extends Model
{
    use HasFactory;
    protected $table = 'risk_levels';
    protected $guarded = ['id'];

    public function protocol(): HasMany
    {
        return $this->hasMany(Protocol::class, 'risk_level_id');
    }
}
