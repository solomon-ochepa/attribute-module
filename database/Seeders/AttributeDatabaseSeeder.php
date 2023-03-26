<?php

namespace Modules\Attribute\database\Seeders;

use Illuminate\Database\Seeder;

class AttributeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AttributeSeeder::class,
            AttributeOptionSeeder::class,
            AttributableSeeder::class
        ]);
    }
}
