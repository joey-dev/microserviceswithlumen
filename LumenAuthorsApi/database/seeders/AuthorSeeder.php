<?php

namespace Database\Seeders;

use App\Models\Author;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      Author::factory()->count(50)->create();
    }
}
