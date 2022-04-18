<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sources')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for ($i=0; $i<10; $i++) {
            $data[] = [
                'title' => $faker->jobTitle(),
                'portalMedia' => 'ACTIVE',
                'freshNews' => $faker->dateTime(),
                'url' => $faker->imageUrl(),
            ];
        }

        return $data;
    }
}
