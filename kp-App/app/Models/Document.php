<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['no_document', 'name_document', 'document_type', 'location', 'effective_date', 'expired_date', 'reminder_days', 'departement', 'jenis_data']; 
}
