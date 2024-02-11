<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use MongoDB\BSON\Int64;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array {
        return [
            'body' => fake()->name(),
            'commentable_id' => 1,
            'commentable_type' => 'App\Post',
            'user_id' => 1
        ];
    }



    protected static function getClass(): string {
        return Users::class;
    }

    /**
     * Indicate that the model's email address should be unverified.
     */

}
