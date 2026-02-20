<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Seed 50 fake client records.
     */
    public function run(): void
    {
        Client::factory()->count(50)->create();
    }
}
