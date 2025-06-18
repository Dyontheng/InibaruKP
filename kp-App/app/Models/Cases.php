<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = ['no_cases', 'name_cases', 'date_cases','site_cases', 'status_cases', 'info_cases', 'doc_cases', 'jenis_cases', 'departement'];
}
