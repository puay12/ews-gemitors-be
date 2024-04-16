<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProtocolCategory extends Model
{
    use HasFactory;
    protected $table = 'protocol_categories';
    protected $guarded = ['id'];

    public function protocol(): HasMany
    {
        return $this->hasMany(Protocol::class, 'category_id');
    }
}
