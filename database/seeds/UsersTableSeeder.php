<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '管理者用アカウント',
            'email' => 'EcoSpotSearch@kanrisya.com',
            'password' => bcrypt('ecospot1234'),
            'admin_flg' => '1',
            'blacklist_flg' => '0',
        ];

        DB::table('users')->insert($param);
    }
}
