<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.RL3KZ3KG7Px4/6S17g.butwmCGg5cCsAHyZK.vWIOKeAaNPqIc72',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'photo' => NULL,
                'cb_roles_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36',
                'login_at' => '2020-02-16 14:40:36',
            ),
        ));
        
        
    }
}