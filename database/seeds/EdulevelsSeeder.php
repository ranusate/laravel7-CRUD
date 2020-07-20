<?php

use Illuminate\Database\Seeder;

class EdulevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevels')->insert([
            [
                'name' => 'SMK N1 Wewewa Barat',
                'desc' => 'SMK N1 Wewewa Barat Jurusan Otomotif',
                // 'password' => Hash::make('password'),
            ],
            [
                'name' => 'SMK N1 Wewewa Timur',
                'desc' => 'SMK N1 Wewewa Timur Jurusan Otomotif',
                // 'password' => Hash::make('password'),
            ]

        ]);
    }
}
