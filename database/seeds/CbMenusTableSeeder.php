<?php

use Illuminate\Database\Seeder;

class CbMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cb_menus')->delete();
        
        \DB::table('cb_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Users',
                'icon' => 'fa fa-user-o',
                'path' => NULL,
                'type' => 'module',
                'sort_number' => 0,
                'cb_modules_id' => 1,
                'parent_cb_menus_id' => NULL,
            ),
        ));
        
        
    }
}