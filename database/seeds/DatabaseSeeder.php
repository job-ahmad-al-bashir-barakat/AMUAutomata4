<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ControlMenusTableSeeder::class);
        $this->call(ControlPagesTableSeeder::class);
        $this->call(LangsTableSeeder::class);
        $this->call(DegreesTableSeeder::class);
        $this->call(DegreeNameLangsTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(FacultyNameLangsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(DepartmentNameLangsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SettingNameLangsTableSeeder::class);
    }
}
