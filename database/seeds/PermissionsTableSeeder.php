<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '17',
                'title'      => 'master_data_access',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '18',
                'title'      => 'site_configuration_access',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '19',
                'title'      => 'site_configuration_create',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '20',
                'title'      => 'site_configuration_edit',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '21',
                'title'      => 'site_configuration_show',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '22',
                'title'      => 'site_configuration_delete',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '23',
                'title'      => 'item_category_access',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
            [
                'id'         => '24',
                'title'      => 'item_category_create',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],              
            [
                'id'         => '25',
                'title'      => 'item_category_edit',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],              
            [
                'id'         => '26',
                'title'      => 'item_category_show',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],              
            [
                'id'         => '27',
                'title'      => 'item_category_delete',
                'created_at' => '2023-05-23 11:37:00',
                'updated_at' => '2023-05-23 11:37:00',
            ],
        ];

        Permission::insert($permissions);
    }
}
