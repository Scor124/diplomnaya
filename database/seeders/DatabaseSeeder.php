<?php

namespace Database\Seeders;
use App\Models\Users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nette\Utils\Random;
use Ramsey\Uuid\Type\Integer;
use Faker;

use SleepingOwl\Admin\Traits\DatePicker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($t = 0;$t<40;$t++){
            \DB::table('Staff')->insert([
                'FIO' => $faker->lastName.' '.$faker->name.' '.$faker->firstName,
                'DateOfBirth' => date("d-m-Y", mt_rand(1, time())),
                'Phone' => Random::generate(11, '0-9'),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password')
            ]);
        }


        // \App\Models\Users::factory(10)->create();

        // \App\Models\Users::factory()->create([
        //     'name' => 'Test Users',
        //     'email' => 'test@example.com',
        // ]);
    }
}
