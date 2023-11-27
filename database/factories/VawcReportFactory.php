<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VawcReport>
 */
class VawcReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name('female'),
            'incident_type' => implode(
                ',',
                fake()->randomElements(
                    ['vawc', 'bcpc', 'trafficking', 'anti-rape-law', 'gender-fair-ordinance'], null
                )
            ),
            'incident_datetime' => fake()->dateTimeThisYear(),
            'report_entry_number' => fake()->numerify('#####'),
            'complaint_file_number' => fake()->numerify('###########')
        ];
    }
}
