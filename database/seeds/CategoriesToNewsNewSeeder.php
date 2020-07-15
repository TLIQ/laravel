<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesToNewsNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_to_categories')->insert($this->getData());
    }

    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
        for($i=0; $i<50; $i++) {
            $data[] = [
                'category_id' => rand(1, 5),
                'news_id' => rand(1, 40)
            ];
        }
        return $data;
    }
}
