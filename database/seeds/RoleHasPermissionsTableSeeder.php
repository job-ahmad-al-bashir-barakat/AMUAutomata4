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
            8 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            15 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 9,
                'role_id' => 2,
            ),
            24 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            27 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 12,
                'role_id' => 2,
            ),
            29 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 13,
                'role_id' => 2,
            ),
            33 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            36 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            39 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            42 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            45 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            49 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
            52 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 20,
                'role_id' => 2,
            ),
            55 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            60 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            63 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 24,
                'role_id' => 2,
            ),
            66 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 25,
                'role_id' => 2,
            ),
            68 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 26,
                'role_id' => 2,
            ),
            71 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 27,
                'role_id' => 2,
            ),
            74 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 28,
                'role_id' => 2,
            ),
            77 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 29,
                'role_id' => 2,
            ),
            80 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 30,
                'role_id' => 2,
            ),
            83 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            84 => 
            array (
                'permission_id' => 31,
                'role_id' => 2,
            ),
            86 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 32,
                'role_id' => 2,
            ),
            89 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            90 => 
            array (
                'permission_id' => 33,
                'role_id' => 2,
            ),
            94 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 34,
                'role_id' => 2,
            ),
            99 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 35,
                'role_id' => 2,
            ),
            103 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 36,
                'role_id' => 2,
            ),
            107 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            108 => 
            array (
                'permission_id' => 37,
                'role_id' => 2,
            ),
            110 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            111 => 
            array (
                'permission_id' => 38,
                'role_id' => 2,
            ),
            113 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            114 => 
            array (
                'permission_id' => 39,
                'role_id' => 2,
            ),
            116 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            117 => 
            array (
                'permission_id' => 40,
                'role_id' => 2,
            ),
            118 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            120 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 42,
                'role_id' => 2,
            ),
            123 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 43,
                'role_id' => 2,
            ),
            126 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 44,
                'role_id' => 2,
            ),
            129 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 45,
                'role_id' => 2,
            ),
            133 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 46,
                'role_id' => 2,
            ),
            136 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            137 => 
            array (
                'permission_id' => 47,
                'role_id' => 2,
            ),
            139 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 48,
                'role_id' => 2,
            ),
            142 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            143 => 
            array (
                'permission_id' => 49,
                'role_id' => 2,
            ),
            145 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            146 => 
            array (
                'permission_id' => 50,
                'role_id' => 2,
            ),
            149 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 51,
                'role_id' => 2,
            ),
            151 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            152 => 
            array (
                'permission_id' => 52,
                'role_id' => 2,
            ),
            153 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 53,
                'role_id' => 2,
            ),
            155 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            156 => 
            array (
                'permission_id' => 54,
                'role_id' => 2,
            ),
            157 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            158 => 
            array (
                'permission_id' => 55,
                'role_id' => 2,
            ),
            159 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            160 => 
            array (
                'permission_id' => 56,
                'role_id' => 2,
            ),
            161 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            162 => 
            array (
                'permission_id' => 57,
                'role_id' => 2,
            ),
            163 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            164 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
        ));
    }
}