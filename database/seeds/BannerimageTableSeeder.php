<?php

use Illuminate\Database\Seeder;
use App\Models\Bannerimage;

class BannerimageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = ['contact_us_banner' => null, 'about_us_banner' => null];
        Bannerimage::create($banner);
    }
}
