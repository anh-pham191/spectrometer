<?php

use Illuminate\Database\Seeder;
use App\Models\AdminUserRole;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        /** @var \App\Repositories\AdminUserRepositoryInterface $adminUserRepository */
        $adminUserRepository = \App::make('App\Repositories\AdminUserRepositoryInterface');
        /** @var \App\Repositories\AdminUserRoleRepositoryInterface $adminUserRoleRepository */
        $adminUserRoleRepository = \App::make('App\Repositories\AdminUserRoleRepositoryInterface');

        /** @var \App\Models\AdminUser $adminUser */
        $adminUser = $adminUserRepository->create([
            'name' => 'TestUser',
            'email' => 'test@example.com',
            'password' => 'test',
        ]);

        $adminUserRoleRepository->create([
            'admin_user_id' => $adminUser->id,
            'role' => AdminUserRole::ROLE_SUPER_USER,
        ]);
        $spectrometer = \App\Spectrometer::create([
            'name' => 'SCio'
        ]);
        $kiwiFruit = \App\Kiwifruit::create([
            'name' => 'oscarGreen',
            'spectrometer_id' => $spectrometer->id
        ]);
        $kiwifruitScanSkin1 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'skin',
            'scan' => 1,
            'calories' => 50,
            'carbs' => 11,
            'water' => 87
        ]);
        $kiwifruitScanSkin2 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'skin',
            'scan' => 2,
            'calories' => 50,
            'carbs' => 11,
            'water' => 87
        ]);
        $kiwifruitScanSkin3 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'skin',
            'scan' => 3,
            'calories' => 55,
            'carbs' => 11,
            'water' => 86
        ]);

        $kiwifruitScanSideCut1 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'sidecut',
            'scan' => 1,
            'calories' => 50,
            'carbs' => 10,
            'water' => 87
        ]);
        $kiwifruitScanSideCut2 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'sidecut',
            'scan' => 2,
            'calories' => 60,
            'carbs' => 13,
            'water' => 85
        ]);
        $kiwifruitScanSideCut3 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'sidecut',
            'scan' => 3,
            'calories' => 55,
            'carbs' => 12,
            'water' => 85
        ]);

        $kiwifruitScanMidCut1 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'midcut',
            'scan' => 1,
            'calories' => 70,
            'carbs' => 15,
            'water' => 83
        ]);
        $kiwifruitScanMidCut2 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'midcut',
            'scan' => 2,
            'calories' => 60,
            'carbs' => 13,
            'water' => 84
        ]);
        $kiwifruitScanMidCut3 = \App\KiwifruitScanned::create([
            'kiwifruit_id' => $kiwiFruit->id,
            'sample' => 1,
            'area' => 'midcut',
            'scan' => 3,
            'calories' => 75,
            'carbs' => 16,
            'water' => 82
        ]);
    }
}
