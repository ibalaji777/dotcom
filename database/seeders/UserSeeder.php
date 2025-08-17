<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::updateOrCreate(
            ['email' => 'testmain@gmail.com'],
            [
                'name' => 'Test Admin',
                'email' => 'testmain@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
