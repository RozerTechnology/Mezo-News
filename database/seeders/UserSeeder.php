<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@app.com',
            'password' => bcrypt('123321'),
        ]);

        $user->attachRole('superadmin');

    }// End of run

}// End of seeder
