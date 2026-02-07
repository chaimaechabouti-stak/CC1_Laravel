<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'date_debut',
        'date_fin',
        'lieu',
        'expert_id'
    ];

    // Relation One To Many (inverse) avec Expert
    public function expert(): BelongsTo
    {
        return $this->belongsTo(Expert::class);
    }

    // Relation One To Many avec Atelier
    public function ateliers(): HasMany
    {
        return $this->hasMany(Atelier::class);
    }
}