<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
            $data[] = [
                'name' => 'Admin',
                'email' => $objFaker->email,
                'password' => '$2y$10$z3u.NogLVdQVh0PnvTC3MuNnKDaXVgJx6dAvnsdSltJUjM2.Jck.q',
                'is_admin' => 1,
                'created_at' => $objFaker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08'),
                'updated_at' => $objFaker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08')
            ];
        return $data;
    }
}
