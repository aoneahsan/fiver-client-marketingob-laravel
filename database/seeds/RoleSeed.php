<?php

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superAdmin = new Role();
        $role_superAdmin->name = "Super Admin";
        $role_superAdmin->description = "Super Admin User";
        $role_superAdmin->save();

        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->description = "Admin User";
        $role_admin->save();

        $role_rider = new Role();
        $role_rider->name = "Rider";
        $role_rider->description = "Rider User";
        $role_rider->save();

        $role_customer = new Role();
        $role_customer->name = "Customer";
        $role_customer->description = "Customer User";
        $role_customer->save();

        $role_service_provider = new Role();
        $role_service_provider->name = "Service Provider";
        $role_service_provider->description = "Service Provider User";
        $role_service_provider->save();
    }
}
