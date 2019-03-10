<?php

use Illuminate\Database\Seeder;

class BasicsModelHasRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_roles')->delete();

        \DB::table('model_has_roles')->insert(
            [
                [
                    'role_id' => 1,
                    'model_type' => 'Modules\\Utilities\\Entities\\User',
                    'model_id' => 1,
                ],
                [
                    'role_id' => 2,
                    'model_type' => 'Modules\\Utilities\\Entities\\User',
                    'model_id' => 2,
                ],
            ]
        );
    }
}