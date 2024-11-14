<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Enums\ThreadStatusEnums;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $users = User::pluck('id');
        $categories = Category::pluck('id');

        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(4),
            'category_id' => $categories->random(),
            'user_id' => $users->random(),
            'status' => fake()->randomElement(ThreadStatusEnums::cases())->value,
        ];
    }
}
