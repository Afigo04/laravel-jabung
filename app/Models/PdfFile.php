<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PdfFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'pdf_category_id'
    ];

    public function pdfCategory(): BelongsTo
    {
        return $this->belongsTo(PdfCategory::class, 'pdf_category_id');
    }
}
