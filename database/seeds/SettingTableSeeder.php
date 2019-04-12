<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = ['title' => 'This is Demo title', 'about_us' => 'Information about organization.'];
        Setting::create($setting);
    }
}
