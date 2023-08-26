<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Robbin',
                'email' => 'robbin@example.com',
                'phonenumber' => '+1234567890',
                'password' => Hash::make('Robbin@110'),
                'password_encrypted' => 'Robbin@110',
            ],
            [
                'name' => 'Dhilip',
                'email' => 'dhilip@example.com',
                'phonenumber' => '+9876543210',
                'password' => Hash::make('Dhilip@110'),
                'password_encrypted' => 'Dhilip@110',
            ],
            
        ]);
    }

    }



