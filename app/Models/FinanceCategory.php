<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class FinanceCategory extends Model
{
    use HasFactory;

    public function VillageIncomes(): HasMany
    {
        return $this->hasMany(Finance::class);
    }

    protected $fillable = [
        'name'
    ];
}
