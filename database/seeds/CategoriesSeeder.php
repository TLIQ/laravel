<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
        for($i=0; $i<5; $i++) {
            $data[] = [
                'name' => $objFaker->sentence(mt_rand(1,2)),
                'description' => $objFaker->realText(mt_rand(100,200)),
                'created_at' => $objFaker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08'),
                'updated_at' => $objFaker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08')
            ];
        }
        return $data;
    }
}
