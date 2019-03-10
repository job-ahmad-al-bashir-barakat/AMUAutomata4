<?php

use Illuminate\Database\Seeder;

class BasicsRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_has_permissions')->delete();
        
        \DB::table('role_has_permissions')->insert([
            0 => 
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            1 => 
            [
                'permission_id' => 2,
                'role_id' => 2,
            ],
            2 => 
            [
                'permission_id' => 3,
                'role_id' => 1,
            ],
            3 => 
            [
                'permission_id' => 3,
                'role_id' => 2,
            ],
            7 => 
            [
                'permission_id' => 4,
                'role_id' => 1,
            ],
            8 => 
            [
                'permission_id' => 5,
                'role_id' => 1,
            ],
            9 => 
            [
                'permission_id' => 6,
                'role_id' => 1,
            ],
            10 => 
            [
                'permission_id' => 6,
                'role_id' => 2,
            ],
            11 => 
            [
                'permission_id' => 7,
                'role_id' => 1,
            ],
            12 => 
            [
                'permission_id' => 8,
                'role_id' => 1,
            ],
            14 => 
            [
                'permission_id' => 9,
                'role_id' => 1,
            ],
            15 => 
            [
                'permission_id' => 9,
                'role_id' => 2,
            ],
            17 => 
            [
                'permission_id' => 10,
                'role_id' => 1,
            ],
            18 => 
            [
                'permission_id' => 11,
                'role_id' => 1,
            ],
            19 => 
            [
                'permission_id' => 11,
                'role_id' => 2,
            ],
            20 => 
            [
                'permission_id' => 12,
                'role_id' => 1,
            ],
            21 => 
            [
                'permission_id' => 12,
                'role_id' => 2,
            ],
            22 => 
            [
                'permission_id' => 13,
                'role_id' => 1,
            ],
            23 => 
            [
                'permission_id' => 13,
                'role_id' => 2,
            ],
            25 => 
            [
                'permission_id' => 14,
                'role_id' => 1,
            ],
            26 => 
            [
                'permission_id' => 14,
                'role_id' => 2,
            ],
            27 => 
            [
                'permission_id' => 15,
                'role_id' => 1,
            ],
            28 => 
            [
                'permission_id' => 15,
                'role_id' => 2,
            ],
            29 => 
            [
                'permission_id' => 16,
                'role_id' => 1,
            ],
            30 => 
            [
                'permission_id' => 16,
                'role_id' => 2,
            ],
            31 => 
            [
                'permission_id' => 17,
                'role_id' => 1,
            ],
            32 => 
            [
                'permission_id' => 17,
                'role_id' => 2,
            ],
            33 => 
            [
                'permission_id' => 18,
                'role_id' => 1,
            ],
            34 => 
            [
                'permission_id' => 18,
                'role_id' => 2,
            ],
            36 => 
            [
                'permission_id' => 19,
                'role_id' => 1,
            ],
            37 => 
            [
                'permission_id' => 19,
                'role_id' => 2,
            ],
            38 => 
            [
                'permission_id' => 20,
                'role_id' => 1,
            ],
            39 => 
            [
                'permission_id' => 20,
                'role_id' => 2,
            ],
            40 => 
            [
                'permission_id' => 21,
                'role_id' => 1,
            ],
            41 => 
            [
                'permission_id' => 22,
                'role_id' => 1,
            ],
            42 => 
            [
                'permission_id' => 22,
                'role_id' => 2,
            ],
            43 => 
            [
                'permission_id' => 23,
                'role_id' => 1,
            ],
            44 => 
            [
                'permission_id' => 23,
                'role_id' => 2,
            ],
            45 => 
            [
                'permission_id' => 24,
                'role_id' => 1,
            ],
            46 => 
            [
                'permission_id' => 24,
                'role_id' => 2,
            ],
            47 => 
            [
                'permission_id' => 25,
                'role_id' => 1,
            ],
            48 => 
            [
                'permission_id' => 25,
                'role_id' => 2,
            ],
            49 => 
            [
                'permission_id' => 26,
                'role_id' => 1,
            ],
            50 => 
            [
                'permission_id' => 26,
                'role_id' => 2,
            ],
            51 => 
            [
                'permission_id' => 27,
                'role_id' => 1,
            ],
            52 => 
            [
                'permission_id' => 27,
                'role_id' => 2,
            ],
            53 => 
            [
                'permission_id' => 28,
                'role_id' => 1,
            ],
            54 => 
            [
                'permission_id' => 28,
                'role_id' => 2,
            ],
            55 => 
            [
                'permission_id' => 29,
                'role_id' => 1,
            ],
            56 => 
            [
                'permission_id' => 29,
                'role_id' => 2,
            ],
            57 => 
            [
                'permission_id' => 30,
                'role_id' => 1,
            ],
            58 => 
            [
                'permission_id' => 30,
                'role_id' => 2,
            ],
            59 => 
            [
                'permission_id' => 31,
                'role_id' => 1,
            ],
            60 => 
            [
                'permission_id' => 31,
                'role_id' => 2,
            ],
            61 => 
            [
                'permission_id' => 32,
                'role_id' => 1,
            ],
            62 => 
            [
                'permission_id' => 32,
                'role_id' => 2,
            ],
            63 => 
            [
                'permission_id' => 33,
                'role_id' => 1,
            ],
            64 => 
            [
                'permission_id' => 33,
                'role_id' => 2,
            ],
            67 => 
            [
                'permission_id' => 34,
                'role_id' => 1,
            ],
            68 => 
            [
                'permission_id' => 34,
                'role_id' => 2,
            ],
            71 => 
            [
                'permission_id' => 35,
                'role_id' => 1,
            ],
            72 => 
            [
                'permission_id' => 35,
                'role_id' => 2,
            ],
            74 => 
            [
                'permission_id' => 36,
                'role_id' => 1,
            ],
            75 => 
            [
                'permission_id' => 36,
                'role_id' => 2,
            ],
            78 => 
            [
                'permission_id' => 37,
                'role_id' => 2,
            ],
            79 => 
            [
                'permission_id' => 38,
                'role_id' => 1,
            ],
            80 => 
            [
                'permission_id' => 38,
                'role_id' => 2,
            ],
            81 => 
            [
                'permission_id' => 39,
                'role_id' => 1,
            ],
            82 => 
            [
                'permission_id' => 39,
                'role_id' => 2,
            ],
            83 => 
            [
                'permission_id' => 40,
                'role_id' => 1,
            ],
            84 => 
            [
                'permission_id' => 40,
                'role_id' => 2,
            ],
            85 => 
            [
                'permission_id' => 41,
                'role_id' => 1,
            ],
            86 => 
            [
                'permission_id' => 42,
                'role_id' => 1,
            ],
            87 => 
            [
                'permission_id' => 42,
                'role_id' => 2,
            ],
            88 => 
            [
                'permission_id' => 43,
                'role_id' => 1,
            ],
            89 => 
            [
                'permission_id' => 43,
                'role_id' => 2,
            ],
            90 => 
            [
                'permission_id' => 44,
                'role_id' => 1,
            ],
            91 => 
            [
                'permission_id' => 44,
                'role_id' => 2,
            ],
            92 => 
            [
                'permission_id' => 45,
                'role_id' => 1,
            ],
            93 => 
            [
                'permission_id' => 45,
                'role_id' => 2,
            ],
            95 => 
            [
                'permission_id' => 46,
                'role_id' => 1,
            ],
            96 => 
            [
                'permission_id' => 46,
                'role_id' => 2,
            ],
            97 => 
            [
                'permission_id' => 47,
                'role_id' => 1,
            ],
            98 => 
            [
                'permission_id' => 47,
                'role_id' => 2,
            ],
            99 => 
            [
                'permission_id' => 48,
                'role_id' => 1,
            ],
            100 => 
            [
                'permission_id' => 48,
                'role_id' => 2,
            ],
            101 => 
            [
                'permission_id' => 49,
                'role_id' => 1,
            ],
            102 => 
            [
                'permission_id' => 49,
                'role_id' => 2,
            ],
            103 => 
            [
                'permission_id' => 50,
                'role_id' => 1,
            ],
            104 => 
            [
                'permission_id' => 50,
                'role_id' => 2,
            ],
            105 => 
            [
                'permission_id' => 51,
                'role_id' => 1,
            ],
            106 => 
            [
                'permission_id' => 51,
                'role_id' => 2,
            ],
        ]);
        
        
    }
}