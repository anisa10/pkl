<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Anisa";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('anisa123');
        $user->save();
    }
}
