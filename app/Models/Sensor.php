<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    public $table = 'sensor';
    public $timestamps = true;
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_alat',
        'suhu',
        'hum',
        'co2',
    ];
}
