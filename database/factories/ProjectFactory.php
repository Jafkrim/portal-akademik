<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'judul' => fake()->sentence(4),
            'deskripsi' => fake()->paragraph(),
            'tema_agent' => fake()->randomElement(['Ollama', 'Security Scanner', 'Network Port Analyzer']),
            'api_key_secure' => fake()->uuid(),
        ];
    }
}