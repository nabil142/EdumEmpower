<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganMagang extends Model
{

    use HasFactory;

    protected $fillable = [
        'LogoImage',
        'CompanyName',
        'DatePublish',
        'JobCategory',
        'JobLocation',
        'Salary',
        'MinimumQualification',
        'PreferredQualification',
        'AbouttheJob',
       'LocationImage',
       'LocationSelect',

    ];
}
