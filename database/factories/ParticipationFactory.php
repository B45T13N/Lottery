<?php

namespace Database\Factories;

use App\Models\Enum\PrizeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participation>
 */
class ParticipationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lot = PrizeEnum::selectLot();

        return [
            'email' => $this->faker->unique()->safeEmail,
            'prize' => $lot,
        ];
    }

}
