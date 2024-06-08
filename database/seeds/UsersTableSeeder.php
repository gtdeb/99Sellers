<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Return access_level_id for a given access_level
     * @param void
     * @return integer
     */
    protected function getAccessLevelId()
    {
        try {
            $result = DB::table('user_access_control_list')
                ->where('access_level', 'admin')
                ->get('access_level_id');
            #printf($result);
            if ($result)
                return $result;
            else
                return null;
        } catch (\Exception $e){
            return null;
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_registered_info')->insert([
            'usertype' => 'admin',
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => now(),
            'access_level_id' => self::getAccessLevelId()[0]->{'access_level_id'},
            'password' => Hash::make('12345678'),
            'subscription_date' => now(),
            'updated_at' => now(),
            'subscription_duration' => '0'
        ]);
        /*DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@material.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
    }
}
