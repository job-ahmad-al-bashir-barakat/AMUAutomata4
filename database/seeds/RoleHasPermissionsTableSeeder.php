<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_has_permissions')->delete();
        
        \DB::table('role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 2,
            ),
            4 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            8 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 9,
                'role_id' => 2,
            ),
            12 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            15 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 12,
                'role_id' => 2,
            ),
            17 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 13,
                'role_id' => 2,
            ),
            19 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            21 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            23 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            25 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            27 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            29 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
        ));
        
        
    }
}