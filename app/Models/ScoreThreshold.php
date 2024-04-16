<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScoreThreshold extends Model
{
    use HasFactory;
    protected $table = 'score_threshold';
    protected $guarded = ['id'];

    public function protocol(): HasMany
    {
        return $this->hasMany(Protocol::class, 'score_thres_id');
    }
}
