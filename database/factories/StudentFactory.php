<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{

    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'studentName' => $this->faker->name(20),
            'class' => Str::random(10),
            'roll' => Str::random(10),
            'year' => Str::random(10)
        ];
    }
}
