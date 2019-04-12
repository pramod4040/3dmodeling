<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Service::truncate();
        $service = [
          ['title' => 'Service 1', 'slug'=>Str::slug('Service 1'), 'description'=>'This is demo description.'],
          ['title' => 'Service 2' , 'slug' => Str::slug('Service 2'), 'description'=> 'This is demo description.'],
          ['title' => 'Service 3' , 'slug' => Str::slug('Service 3'), 'description'=> 'This is demo description.'],
          ['title' => 'Service 4' , 'slug' => Str::slug('Service 4'), 'description'=> 'This is demo description.'],
          ['title' => 'Service 5' , 'slug' => Str::slug('Service 5'), 'description'=> 'This is demo description.'],
          ['title' => 'Service 6' , 'slug' => Str::slug('Service 6'), 'description'=> 'This is demo description.'],
        ];

        foreach($service as $ser){
          Service::create($ser);
        }
    }
}
