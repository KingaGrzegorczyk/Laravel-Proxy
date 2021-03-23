<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipAddress extends Model
{
    use HasFactory;
    protected $table = 'ipaddresses';
    public $timestamps = true;
    protected $fillable = ['id', 'ipaddress', 'created_at', 'updated_at'];
}
