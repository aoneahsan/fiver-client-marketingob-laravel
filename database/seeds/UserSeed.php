<?php

use Illuminate\Database\Seeder;

use App\User;

use App\Models\Role;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = Role::where('name', 'Super Admin')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_rider = Role::where('name', 'Rider')->first();
        $role_customer = Role::where('name', 'Customer')->first();
        $role_service_provider = Role::where('name', 'Service Provider')->first();
        
        $super_admin = new User();
        $super_admin->name = "Super Admin User";
        $super_admin->email = "superadmin@project.com";
        $super_admin->password = Hash::make('123456');
        $super_admin->save();
        $SA_U_D = new UserDetails();
        $SA_U_D->user_id = $super_admin->id;
        $SA_U_D->first_name = "Super Admin";
        $SA_U_D->profile_image = 'user.png';
        $SA_U_D->city = 'Lahore';
        $SA_U_D->save();
        $super_admin->roles()->attach($role_super_admin);

        $admin = new User();
        $admin->name = "Admin User";
        $admin->email = "admin@project.com";
        $admin->password = Hash::make('123456');
        $admin->save();
        $A_U_D = new UserDetails();
        $A_U_D->user_id = $admin->id;
        $A_U_D->first_name = "Admin";
        $A_U_D->profile_image = 'user.png';
        $A_U_D->city = 'city';
        $A_U_D->save();
        $admin->roles()->attach($role_admin);

        $user_buyer = new User();
        $user_buyer->name = "Rider User";
        $user_buyer->email = "rider@project.com";
        $user_buyer->password = Hash::make('123456');
        $user_buyer->save();        
        $B_U_D = new UserDetails();
        $B_U_D->user_id = $user_buyer->id;
        $B_U_D->first_name = "Rider";
        $B_U_D->profile_image = 'user.png';
        $B_U_D->city = 'city';
        $B_U_D->save();
        $user_buyer->roles()->attach($role_rider);

        $user_seller = new User();
        $user_seller->name = "Customer User";
        $user_seller->email = "customer@project.com";
        $user_seller->password = Hash::make('123456');
        $user_seller->save();
        $S_U_D = new UserDetails();
        $S_U_D->user_id = $user_seller->id;
        $S_U_D->first_name = "Customer";
        $S_U_D->profile_image = 'user.png';
        $S_U_D->city = 'city';
        $S_U_D->save();
        $user_seller->roles()->attach($role_customer);

        $user_seller2 = new User();
        $user_seller2->name = "Service Provider User";
        $user_seller2->email = "serviceprovider@project.com";
        $user_seller2->password = Hash::make('123456');
        $user_seller2->save();
        $S_U_D2 = new UserDetails();
        $S_U_D2->user_id = $user_seller->id;
        $S_U_D2->first_name = "Service Provider";
        $S_U_D2->profile_image = 'user.png';
        $S_U_D2->city = 'city';
        $S_U_D2->save();
        $user_seller2->roles()->attach($role_service_provider);

    }
}
