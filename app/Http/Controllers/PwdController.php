<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PwdPerson;

class PwdController extends Controller
{
    public function index() {
        $persons = PwdPerson::all();
        return response()->json($persons);
    }

    public function show(PwdPerson $person) {
        return response()->json($person);
    }

    public function destroy(PwdPerson $person) {
        $person->delete();

        return response()->json("PWD person record deleted.", 201);
    }

    public function store(Request $request) {
        if ($request->has('region') && $request->region == 'none') {
            $request->merge(['region' => null]);
        }

        if ($request->has('province') && $request->province == 'none') {
            $request->merge(['province' => null]);
        }

        if ($request->has('civil_status') && $request->civil_status == 'none') {
            $request->merge(['civil_status' => null]);
        }

        if ($request->has('educational_attainment') && $request->educational_attainment == 'none') {
            $request->merge(['educational_attainment' => null]);
        }

        if ($request->has('employment_status') && $request->employment_status == 'none') {
            $request->merge(['employment_status' => null]);
        }

        if ($request->has('nature_of_employer') && $request->nature_of_employer == 'none') {
            $request->merge(['nature_of_employer' => null]);
        }

        if ($request->has('type_of_employment') && $request->type_of_employment == 'none') {
            $request->merge(['type_of_employment' => null]);
        }

        if ($request->has('type_of_skill') && $request->type_of_skill == 'none') {
            $request->merge(['type_of_skill' => null]);
        }

        $request->validate([
            'registration_number' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'disability' => 'required',
            'house_street_village_sitio' => 'required',
            'barangay' => 'required',
            'municipality' => 'required',
            'region' => 'required',
            'province' => 'required',
            'telephone_number' => 'required',
            'mobile_number' => 'required',
            'email_address' => 'required',
            'birthdate' => ['required', 'date'],
            'gender' => 'required',
            'nationality' => 'required',
            'blood_type' => 'required',
            'civil_status' => 'required',
            'educational_attainment' => 'required',
            'employment_status' => 'required',
            'nature_of_employer' => 'required_unless:employment_status,unemployed',
            'type_of_employment' => 'required_unless:employment_status,unemployed',
            'type_of_skill' => 'required_unless:employment_status,unemployed',
            'sss_number' => 'nullable',
            'gsis_number' => 'nullable',
            'philhealth_number' => 'nullable',
            'philhealth_dependent' => ['nullable', 'boolean'],
            'organization_name' => 'nullable',
            'organization_contact_person' => ['nullable', 'required_with:organization_name'],
            'organization_address' => ['nullable', 'required_with:organization_name'],
            'organization_telephone_number' => ['nullable', 'required_with:organization_name'],
            'name' => 'required',
            'relation_to_pwd_person' => 'required',
            'age' => ['required', 'numeric'],
            'occupation' => 'required'
        ]);

        $pwd_person = PwdPerson::create([
            'registration_number' => $request->registration_number,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'disability' => $request->disability,
            'house_street_village_sitio' => $request->house_street_village_sitio,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'region' => $request->region,
            'province' => $request->province,
            'telephone_number' => $request->telephone_number,
            'mobile_number' => $request->mobile_number,
            'email_address' => $request->email_address,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'blood_type' => $request->blood_type,
            'civil_status' => $request->civil_status,
            'educational_attainment' => $request->educational_attainment,
            'employment_status' => $request->employment_status,
            'nature_of_employer' => $request->nature_of_employer,
            'type_of_employment' => $request->type_of_employment,
            'type_of_skill' => $request->type_of_skill,
            'sss_number' => $request->sss_number,
            'gsis_number' => $request->gsis_number,
            'philhealth_number' => $request->philhealth_number,
            'philhealth_dependent' => $request->philhealth_dependent,
            'organization_name' => $request->organization_name,
            'organization_contact_person' => $request->organization_contact_person,
            'organization_address' => $request->organization_address,
            'organization_telephone_number' => $request->organization_telephone_number
        ]);

        $pwd_person->familyMembers()->create([
            'name' => $request->name,
            'relation_to_pwd_person' => $request->relation_to_pwd_person,
            'age' => $request->age,
            'occupation' => $request->occupation
        ]);

        return response()->json("PWD person record added.", 201);
    }

    public function update(Request $request, PwdPerson $person) {
        if ($request->has('region') && $request->region == 'none') {
            $request->merge(['region' => null]);
        }

        if ($request->has('province') && $request->province == 'none') {
            $request->merge(['province' => null]);
        }

        if ($request->has('civil_status') && $request->civil_status == 'none') {
            $request->merge(['civil_status' => null]);
        }

        if ($request->has('educational_attainment') && $request->educational_attainment == 'none') {
            $request->merge(['educational_attainment' => null]);
        }

        if ($request->has('employment_status') && $request->employment_status == 'none') {
            $request->merge(['employment_status' => null]);
        }

        if ($request->has('nature_of_employer') && $request->nature_of_employer == 'none') {
            $request->merge(['nature_of_employer' => null]);
        }

        if ($request->has('type_of_employment') && $request->type_of_employment == 'none') {
            $request->merge(['type_of_employment' => null]);
        }

        if ($request->has('type_of_skill') && $request->type_of_skill == 'none') {
            $request->merge(['type_of_skill' => null]);
        }

        $request->validate([
            'registration_number' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'disability' => 'required',
            'house_street_village_sitio' => 'required',
            'barangay' => 'required',
            'municipality' => 'required',
            'region' => 'required',
            'province' => 'required',
            'telephone_number' => 'required',
            'mobile_number' => 'required',
            'email_address' => 'required',
            'birthdate' => ['required', 'date'],
            'gender' => 'required',
            'nationality' => 'required',
            'blood_type' => 'required',
            'civil_status' => 'required',
            'educational_attainment' => 'required',
            'employment_status' => 'required',
            'nature_of_employer' => 'required_unless:employment_status,unemployed',
            'type_of_employment' => 'required_unless:employment_status,unemployed',
            'type_of_skill' => 'required_unless:employment_status,unemployed',
            'sss_number' => 'nullable',
            'gsis_number' => 'nullable',
            'philhealth_number' => 'nullable',
            'philhealth_dependent' => ['nullable', 'boolean'],
            'organization_name' => 'nullable',
            'organization_contact_person' => ['nullable', 'required_with:organization_name'],
            'organization_address' => ['nullable', 'required_with:organization_name'],
            'organization_telephone_number' => ['nullable', 'required_with:organization_name'],
            'name' => 'required',
            'relation_to_pwd_person' => 'required',
            'age' => ['required', 'numeric'],
            'occupation' => 'required'
        ]);

        $report->update([
            'registration_number' => $request->registration_number,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'disability' => $request->disability,
            'house_street_village_sitio' => $request->house_street_village_sitio,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'region' => $request->region,
            'province' => $request->province,
            'telephone_number' => $request->telephone_number,
            'mobile_number' => $request->mobile_number,
            'email_address' => $request->email_address,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'blood_type' => $request->blood_type,
            'civil_status' => $request->civil_status,
            'educational_attainment' => $request->educational_attainment,
            'employment_status' => $request->employment_status,
            'nature_of_employer' => $request->nature_of_employer,
            'type_of_employment' => $request->type_of_employment,
            'type_of_skill' => $request->type_of_skill,
            'sss_number' => $request->sss_number,
            'gsis_number' => $request->gsis_number,
            'philhealth_number' => $request->philhealth_number,
            'philhealth_dependent' => $request->philhealth_dependent,
            'organization_name' => $request->organization_name,
            'organization_contact_person' => $request->organization_contact_person,
            'organization_address' => $request->organization_address,
            'organization_telephone_number' => $request->organization_telephone_number
        ]);

        $report->familyMembers()->update([
            'name' => $request->name,
            'relation_to_pwd_person' => $request->relation_to_pwd_person,
            'age' => $request->age,
            'occupation' => $request->occupation
        ]);

        return response()->json("PWD person record updated.", 201);
    }
}
