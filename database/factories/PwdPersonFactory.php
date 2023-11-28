<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PwdPerson>
 */
class PwdPersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['male', 'female']);

        return [
            'registration_number' => fake()->numerify('######'),
            'firstname' => fake()->firstName($gender),
            'middlename' => fake()->lastName($gender),
            'lastname' => fake()->lastName($gender),
            'disability' => fake()->randomElement(
                [
                    'psychological',
                    'mental',
                    'hearing',
                    'chronic',
                    'visual',
                    'speech',
                    'learning',
                    'orthopedic',
                    'multiple'
                ]
            ),
            'house_street_village_sitio' => fake()->numerify('##') . ' Holy Spirit Drive',
            'barangay' => fake()->barangay(),
            'municipality' => fake()->municipality(),
            'region' => 'ncr',
            'province' => 'metro_manila',
            'telephone_number' => fake()->numerify('########'),
            'mobile_number' => fake()->mobileNumber(),
            'email_address' => fake()->freeEmail(),
            'birthdate' => fake()->date(),
            'gender' => $gender,
            'nationality' => 'Filipino',
            'blood_type' => fake()->randomElement([
                'A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'
            ]),
            'civil_status' => fake()->randomElement([
                'single',
                'married',
                'widow',
                'separated',
                'co-habitation'
            ]),
            'educational_attainment' => fake()->randomElement([
                'elementary_level',
                'elementary_graduate',
                'high_school_level',
                'high_school_graduate',
                'college_level',
                'college_graduate',
                'post_graduate'
            ]),
            'employment_status' => fake()->randomElement([
                'employed',
                'unemployed',
                'retired',
                'resigned',
                'displaced',
                'returning_ofw'
            ]),
            'nature_of_employer' => fake()->randomElement([
                'government', 'private'
            ]),
            'type_of_employment' => fake()->randomElement([
                'permanent',
                'contractual',
                'self_employed',
                'seasonal'
            ]),
            'type_of_skill' => fake()->randomElement([
                'officials',
                'professionals',
                'technicians',
                'clerks'
            ])
        ];
    }
}
