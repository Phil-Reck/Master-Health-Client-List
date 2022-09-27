<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mfl_code',
        'county',
        'sub_county',
        'ward',
        'facility_type',
        'services',
        'operational_status',
        'date_established',
        'date_operational',
        'no_of_doctors',
        'no_of_nurses',
    ];
}
