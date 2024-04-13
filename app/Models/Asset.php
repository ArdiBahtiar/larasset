<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'assets';
    public $fillable = [
        'Name',
        'Serial_Number',
        'Status',
        'Checked_Out_to',
    ];
}
