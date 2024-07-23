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

        Type::truncate();

        $types = ['Front-End', 'Back-End', 'Full-Stack', 'PLC', 'AI', 'Games'];

        foreach ($types as $type) {
            $new_type = new Type();

            $new_type->name = $type;

            $new_type->save();
        }
    }
}
