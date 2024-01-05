<?php

namespace Database\Seeders;

use App\Constants\Role;
use App\Constants\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    private function makeSlug($string)
    {
        return strtolower(str_replace(' ', '-', $string));
    }

    public function run()
    {
        User::create([
            'name' => 'Junayed Rahman Faiaz',
            'slug' => 'Junayed Rahman Faiaz',
            'email' => 'njfaiaz@gmail.com',
            'phone' => '01533434652',
            'blood_group' => 'AB+ (AB Positive)',
            'gender' => 'Male',
            'district_id' => '40',
            'thana_id' => '411',
            'blood_give' => '5',
            'plat_give' => '0',
            'last_time' => '20.12.2023',
            'status' => Status::ACTIVE,
            'role' => Role::ADMIN,
            'password' => Hash::make('ifty@#89000'),
        ]);

        $names = ['Faiaz Rahman', 'Sajal Ahmed', 'Joy Islam', 'Bappy', 'Sabbir', 'Sujon', 'Sojib', 'Rasel', 'Omi', 'Sajjad', 'Milion', 'Atik', 'Hiro alom', 'Suny', 'Tasfin', 'Murad', 'Arafat'];
        $blood = ['AB+ (AB Positive)', 'AB- (AB Negative)', 'A+ (A+ Positive)', 'A- (A- Negative)', 'B+ (B+ Positive)', 'B- (B- Negative)', 'O+ (O+ Positive)', 'O- (O- Negative)'];

        foreach ($names as $name) {
            User::create([
                'name' => strtolower($name),
                'slug' => $this->makeSlug($name),
                'email' => strtolower($name) . '@gmail.com',
                'phone' => fake()->phoneNumber(),
                'blood_group' => $blood[array_rand($blood)],
                'gender' => 'Male',
                'district_id' => rand(1, 64),
                'thana_id' => rand(1, 600),
                'blood_give' => rand(0, 10),
                'plat_give' => rand(0, 10),
                'last_time' => '20.12.2023',
                'status' => Status::ACTIVE,
                'role' => Role::USER,
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
