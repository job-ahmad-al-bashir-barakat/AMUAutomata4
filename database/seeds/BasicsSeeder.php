<?php

use Illuminate\Database\Seeder;

class BasicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LangsTableSeeder::class);
        $this->call(BasicsUsersTableSeeder::class);
        $this->call(BasicsUserNameLangsTableSeeder::class);
        $this->call(BasicsUserSummaryLangsTableSeeder::class);

        $this->call(BasicsRolesTableSeeder::class);
        $this->call(BasicsRoleNameLangsTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionNameLangsTableSeeder::class);

        $this->call(BasicsRoleHasPermissionsTableSeeder::class);
        $this->call(BasicsModelHasRolesTableSeeder::class);
        $this->call(BasicsModelHasPermissionsTableSeeder::class);

        $this->call(ControlMenusTableSeeder::class);
        $this->call(ControlPagesTableSeeder::class);
        $this->call(DegreesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SettingNameLangsTableSeeder::class);
        $this->call(IconsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(AttributeNameLangsTableSeeder::class);
        $this->call(ModuleNameLangsTableSeeder::class);
        $this->call(ModuleAttributeTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PageNameLangsTableSeeder::class);

        //basics custom module
        $this->call(BasicsCustomModulesTableSeeder::class);
        $this->call(BasicsCustomModuleNameLangsTableSeeder::class);
        $this->call(BasicsCustomModuleAttributeValuesTableSeeder::class);
        $this->call(BasicsCustomModuleAttributeValueMultiLangsTableSeeder::class);

        $this->call(GendersTableSeeder::class);
        $this->call(GenderNameLangsTableSeeder::class);
        $this->call(SocialNetworksTableSeeder::class);
        $this->call(SocialNetworkNameLangsTableSeeder::class);

        $this->call(TablesTableSeeder::class);
        $this->call(TableNameLangsTableSeeder::class);
        $this->call(LanguageTablesTableSeeder::class);

        $this->call(StatusesTableSeeder::class);
        $this->call(StatusNameLangsTableSeeder::class);
    }
}
