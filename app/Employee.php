<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'avatar',
        'email',
        'phone',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Scopes?

    public function scopeCompaneros($query, $company_id, $employee_id)
    {
        return $query->where('company_id', $company_id)->get()->except($employee_id);
    }
}
