<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }
    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
        for($i=0; $i<40; $i++) {
           $data[] = [
               'cat_id' => rand(1, 5),
               'title' => $objFaker->sentence(mt_rand(3,10)),
                'text' => $objFaker->realText(mt_rand(100,200)),
               'created_at' => $objFaker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08'),
               'updated_at' => $objFaker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08')
           ];
        }
        return $data;
    }
}
