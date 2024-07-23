<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Front-End', 'Back-End', 'Full-Stack', 'PLC', 'AI', 'Games'];

        foreach ($types as $type) {
            Type::create(['name' => $type]);
        }
    }
}
