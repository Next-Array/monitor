<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Ryder Asking',
            'email' => 'test@test.test',
            'password' => Hash::make('test@test.test'),
            'email_verified_at' => Carbon::now()->timestamp,
            'plan_id' => 1,
        ]);
    }
}
