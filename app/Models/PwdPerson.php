<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PwdPerson extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'firstname',
        'middlename',
        'lastname',
        'disability',
        'house_street_village_sitio',
        'barangay',
        'municipality',
        'region',
        'province',
        'telephone_number',
        'mobile_number',
        'email_address',
        'birthdate',
        'gender',
        'nationality',
        'blood_type',
        'civil_status',
        'educational_attainment',
        'employment_status',
        'nature_of_employer',
        'type_of_employment',
        'type_of_skill',
        'sss_number',
        'gsis_number',
        'philhealth_number',
        'philhealth_dependent',
        'organization_name',
        'organization_contact_person',
        'organization_address',
        'organization_telephone_number'
    ];

    public function familyMembers(): HasMany {
        return $this->hasMany(PwdFamilyComposition::class);
    }
}
