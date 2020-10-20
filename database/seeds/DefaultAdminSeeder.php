<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Onesmas';
        $user->email = 'onesmas@nisccloud.com';
        $user->mobile = '0717601482';
        $user->password = 'Onesmas@100';

        $user->save();

        $user->attachRole(Role::where('name', 'administrator')->first()->id);
    }
}
