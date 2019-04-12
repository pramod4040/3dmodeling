<?php

use Illuminate\Database\Seeder;
use App\Models\Pages;
use Illuminate\Support\Str;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Pages::truncate();
        $pages = [
            ['title' => 'About Us', 'slug' => Str::slug('About Us'), 'description' => 'This is description.'],
            ['title' => 'Terms And Conditions', 'slug' => Str::slug('Terms And Conditions'), 'description' => 'This is description.'],
            ['title' => 'Privacy And Policy', 'slug' => Str::slug('Privacy And Policy'), 'description' => 'This is description.'],
          ];

          foreach($pages as $pag){
            Pages::create($pag);
          }
    }
}
