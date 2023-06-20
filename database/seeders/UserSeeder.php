<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

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
            ['name'     => 'test2',
            'email'    => 'test2@test.com',
            'password' => Hash::make('test'),
            ],
            ['name'     => 'test3',
            'email'    => 'test3@test.com',
            'password' => Hash::make('test'),
            ],
            ['name'     => 'test4',
            'email'    => 'test4@test.com',
            'password' => Hash::make('test'),
            ],
            ['name'     => 'test5',
            'email'    => 'test5@test.com',
            'password' => Hash::make('test'),
            ],
        ]);
    }
}
