<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transactions_id' => $this->faker->uuid,
            'user_id' => User::inRandomOrder()->first()->id,
            'order_id' => $this->faker->uuid,
            'snapToken' => $this->faker->uuid,
            'total' => $this->faker->randomFloat(2, 0, 1000),
            'statusBayar' => $this->faker->randomElement(['PAID', 'UNPAID', 'CANCEL', 'EXPIRED']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
