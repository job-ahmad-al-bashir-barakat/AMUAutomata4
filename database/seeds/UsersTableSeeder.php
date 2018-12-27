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
                'name' => 'AUT405',
                'email' => 'AUT405@automata4.com',
                'password' => '$2y$10$LfiA2E6QTwPMD1s06qIMjuFQgArVYP5xojXdRnXoelbTxogdWbV8S',
                'image_id' => NULL,
                'remember_token' => 'OFbLpCDiar4uc1Am44eVT30IEFiFMDL5dlf3nzkY1WsZEKWbll0k5hDqnr4c',
                'created_at' => '2017-11-10 13:22:23',
                'updated_at' => '2018-03-14 06:54:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'sham',
                'email' => 'admin@alsham.com',
                'password' => '$2y$10$T7z8pnFi.Je8Ser/LEgwOe9xstN3w5SVuegLnyG.alhVpsa7ls7d.',
                'image_id' => 65,
                'remember_token' => 'YKTXj7pev2xCvRVC98d9FYS3JBoo0ry0UeNsM3hFChGQWxifjDhjW892wZpT',
                'created_at' => '2018-03-15 02:44:24',
                'updated_at' => '2018-11-19 06:30:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'moayd',
                'email' => 'moayd@aspu.sy',
                'password' => '$2y$10$EZnXSUDnOc91x.XnY08xiOl0tC8JXZ.PZg56LrooWqAla0kbakXJC',
                'image_id' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-10-04 02:15:37',
                'updated_at' => '2018-10-10 04:29:59',
                'deleted_at' => '2018-10-10 04:29:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'janda',
                'email' => 'janda.kahil@gmail.com',
                'password' => '$2y$10$uo48xv71zOm/z1jVi4adrO4WjPPSMJ/q6gtayR0UamcUYcNodikTC',
                'image_id' => NULL,
                'remember_token' => 'axsBM9UPXq8NmuqZJlJ8ekjxLVrzd3H7qKv84pDjOBrJFk8JZNmFQwb8XFqo',
                'created_at' => '2018-10-06 03:24:15',
                'updated_at' => '2018-10-09 06:19:12',
                'deleted_at' => '2018-10-09 06:19:12',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ريما جبور',
                'email' => 'r.j.US@aspu.edu.sy',
                'password' => '$2y$10$ApsAnPgjOCEqhL4z9DvCZe7CJAkMyGKpq0dtbPqUShp7z1XWa/xh6',
                'image_id' => NULL,
                'remember_token' => '5ZrS9yGbrUuAw513lpbud0EIEDmJPXOiKnYPvVFyXbj3I5wKHOL3mBtho71t',
                'created_at' => '2018-10-07 05:28:49',
                'updated_at' => '2018-10-23 05:27:07',
                'deleted_at' => '2018-10-23 05:27:07',
            ),
            5 => 
            array (
                'id' => 13,
                'name' => 'sawsan',
                'email' => 'sawsan@gmail.com',
                'password' => '$2y$10$fXF.d0Lh2jc2t.0IBj15Me.zkCBSvn7iyWNDpPtRy8iR61SV6EpuG',
                'image_id' => NULL,
                'remember_token' => 'rWEVM3t4qgFXXVTpnoyxEMyMZPATArRBsg2WDVpHxDJBhvCfkhZwbtUHUsCh',
                'created_at' => '2018-10-10 06:44:17',
                'updated_at' => '2018-11-25 08:40:18',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'ali',
                'email' => 'sozvin.93@hotmail.com',
                'password' => '$2y$10$RJ9..R308SuTfvOypYZnoOxgwdq2nmFFr4lkTtIqYxiWIVEGaec1y',
                'image_id' => NULL,
                'remember_token' => 'XuLtub9Phhj31tRBHeKjVsTfmcB54YfSsWn8ogFSW9TzM7eVqrE7Aa9NioiV',
                'created_at' => '2018-10-14 08:51:39',
                'updated_at' => '2018-10-23 05:27:16',
                'deleted_at' => '2018-10-23 05:27:16',
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'مستحدم',
                'email' => 'a@gmail.com',
                'password' => '$2y$10$E4qxb/gLi.vMfvu2SAAJI.FlHgRkUgNhM0zEx0R8MB30CG6W6f.he',
                'image_id' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-10-14 09:09:28',
                'updated_at' => '2018-10-14 09:09:32',
                'deleted_at' => '2018-10-14 09:09:32',
            ),
            8 => 
            array (
                'id' => 17,
                'name' => 'AT1995',
                'email' => 'ah_touma@automata4.com',
                'password' => '$2y$10$AVPSzJLKzOV8QmPdeh8.C.w0FhMbTt9MwNBZGBPVxmPVehQnONhvC',
                'image_id' => NULL,
                'remember_token' => 'FNJ6iFrBSllu5sxyGmPcZkAiKQkWUzXuLEVmQXbgH6lQuQy0i2suIlE6BV9A',
                'created_at' => '2018-10-15 05:59:30',
                'updated_at' => '2018-12-08 16:29:12',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 18,
                'name' => 'mouhannad',
                'email' => 'a.mohand@gmail.com',
                'password' => '$2y$10$D3Qls5r6cDI8aw7HCjFnUuuphvuBiNrsQMNpJ9BHUHZ/SK6fTCHLq',
                'image_id' => NULL,
                'remember_token' => 'AfyD5ViRmnVSvcisdo3d0olvNBw7XNDNsH2x3KGvREVuefQ9pLVbifpg0wJY',
                'created_at' => '2018-10-31 07:47:38',
                'updated_at' => '2018-11-18 08:36:38',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 19,
                'name' => 'gan',
                'email' => 'g@gmail.com',
                'password' => '$2y$10$NZNwoUlKCqMs4Jn1zSV/iOquYI.SMNXz.fg58yvRc1HvsOrsN0GJe',
                'image_id' => NULL,
                'remember_token' => 'EImQh9TDCAhN0u3oqOVHfcA5eLveMfxBgCmL0hIK2AKmM0tyqgSDBp1JRijO',
                'created_at' => '2018-12-03 09:31:19',
                'updated_at' => '2018-12-09 08:02:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}