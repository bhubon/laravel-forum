<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'thread_id' => Thread::inRandomOrder()->first()->id,
            'reply_id' => Reply::inRandomOrder()->first()->id ?? null,
            'comment' => fake()->paragraph(4),
        ];
    }
}
