<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parm = [
            'name' => 'jony',
            'email' => 'zyxu9876@example.com',
            'password' => 'a1d2c3d4'
        ];
    }
}
