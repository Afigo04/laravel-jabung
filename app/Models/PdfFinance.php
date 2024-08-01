<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PdfFinance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path'
    ];

    public function pdfCategory(): BelongsTo
    {
        return $this->belongsTo(PdfCategory::class, 'id');
    }
}
