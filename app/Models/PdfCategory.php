<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PdfCategory extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
    ];

    public function pdfFinance(): HasMany
    {
        return $this->hasMany(PdfFile::class, 'id');
    }
}
