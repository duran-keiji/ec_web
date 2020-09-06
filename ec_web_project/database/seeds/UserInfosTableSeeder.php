<?php

use Illuminate\Database\Seeder;
use App\models\UserInfo;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 9; $i++) {
             UserInfo::create([
                 'last_name' => '田中' . $i,
                 'first_name' => '太郎' . $i,
                 'mail' => 'mail' . $i . '@gmail.com',
                 'password' => $i . $i . $i . $i,

             ]);
        }
    }
}

