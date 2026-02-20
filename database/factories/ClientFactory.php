<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        $name = fake()->company();
        $slug = Str::slug($name);

        $imagePath = null;
        if (class_exists(ProjectFactory::class) && method_exists(ProjectFactory::class, 'storePlaceholderImage')) {
            $imagePath = ProjectFactory::storePlaceholderImage('clients', 'client');
        }

        return [
            'name'  => $name,
            'slug'  => $slug,
            'image' => $imagePath,
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Client $client) {
            $base = $client->slug;
            $count = 0;
            while (Client::where('slug', $client->slug)->exists()) {
                $count++;
                $client->slug = $base . '-' . $count;
            }
        });
    }
}
