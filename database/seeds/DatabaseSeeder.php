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
        $this->call(IconsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(AttributeNameLangsTableSeeder::class);
        $this->call(ModuleNameLangsTableSeeder::class);
        $this->call(ModuleAttributeTableSeeder::class);
        $this->call(MenuTablesTableSeeder::class);
        $this->call(MenuTableNameLangsTableSeeder::class);
        $this->call(SiteMenusTableSeeder::class);
        $this->call(SiteMenuNameLangsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PageNameLangsTableSeeder::class);
        $this->call(CustomModulesTableSeeder::class);
        $this->call(CustomModuleNameLangsTableSeeder::class);
        $this->call(CustomModuleAttributeValuesTableSeeder::class);
        $this->call(CustomModuleAttributeValueMultiLangsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(GenderNameLangsTableSeeder::class);
        $this->call(SocialNetworksTableSeeder::class);
        $this->call(SocialNetworkNameLangsTableSeeder::class);
    }
}
