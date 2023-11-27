<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PwdFamilyComposition>
 */
class PwdFamilyCompositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['male', 'female']);
        $relation = '';

        if ($gender == 'male') {
            $relation = fake()->randomElement([
                'child', 'brother', 'nephew', 'uncle'
            ]);
        }
        else {
            $relation = fake()->randomElement([
                'child', 'sister', 'niece', 'aunt'
            ]);
        }

        return [
            'name' => fake()->name($gender),
            'relation_to_pwd_person' => $relation,
            'age' => fake()->numerify('##'),
            'occupation' => fake()->randomElement([
                'employed',
                'unemployed',
                'retired',
                'resigned',
                'displaced',
                'returning_ofw'
            ])
        ];
    }
}
