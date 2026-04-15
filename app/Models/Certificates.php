<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    /** @use HasFactory<\Database\Factories\CertificatesFactory> */
    use HasFactory;

    protected $fillable = [
        'status',
        'request_date',
        'approval_date',
        'certificate_url',
        'users_id',
        'skills_id',
    ];
}
