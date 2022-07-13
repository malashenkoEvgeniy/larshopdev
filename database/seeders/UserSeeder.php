<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@i.ua',
            'password' => Hash::make('111'),
        ]);
        for ($i=0; $i<30; $i++) {
            $name = Str::random(10);
            DB::table('users')->insert([
                'name' => $name,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('111'),
            ]);
        }
    }
}
