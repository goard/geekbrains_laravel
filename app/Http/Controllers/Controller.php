<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(?int $id = null): array
    {
        $faker = Factory::create();
        $statusList = ["DRAFT", "ACTIVE", "BLOCKED"];
        if($id) {
           return [
            'id'     => $id,
            'title'  => $faker->jobTitle(),
            'author' => $faker->userName(250, 170),
            'image'  => $faker->imageUrl(),
            'status' => $statusList[mt_rand(0,2)],
            'description' => "<strong>" . $faker->text(100) . "</strong>",
           ]; 
        }

        $data = [];
        for($i=0; $i < 10; $i++) {
            $id = $i + 1;
            $data[] =[
                'id'     => $id,
                'title'  => $faker->jobTitle(),
                'author' => $faker->userName(250, 170),
                'image'  => $faker->imageUrl(),
                'status' => $statusList[mt_rand(0,2)],
                'description' => "<strong>" . $faker->text(100) . "</strong>",
            ];
        }

        return $data;
    }

    public function getCategoryNews(?int $id = null): array
    {
        $faker = Factory::create();
        $data = [];
        if($id) {
            return [
                'id'   => $id,
                'name' => $faker->name(),
            ];
        }
        for ($i=0; $i<4; $i++) {
            $id = $i + 1; 
            $data[] = [
                'id'   => $id,
                'name' => $faker->name(),
            ];
        }
        return $data;
    }
}
