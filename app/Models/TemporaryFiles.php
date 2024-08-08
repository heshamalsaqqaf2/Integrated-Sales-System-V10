<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryFiles extends Model
{
    use HasFactory;
    protected $table = "temporary_files";
    protected $fillable = [
        'folder_name', 'file_name', 'created_at'
    ];
}
