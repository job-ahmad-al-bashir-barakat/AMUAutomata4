<?php

use Illuminate\Database\Seeder;

class BasicsModelHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('model_has_permissions')->delete();

        \DB::table('model_has_permissions')->insert(
            [
                [
                    'permission_id' => 1,
                    'model_type' => 'Modules\\Utilities\\Entities\\User',
                    'model_id' => 1,
                ],
                [
                    'permission_id' => 2,
                    'model_type' => 'Modules\\Utilities\\Entities\\User',
                    'model_id' => 2,
                ],
            ]
        );
    }
}