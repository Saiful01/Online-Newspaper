<?php

use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Advertisement::create([
            'ad_image'=>"add.gif",
            'ad_place_value'=>"1",
            'website'=>'gmail.com'
        ]);

        \App\Advertisement::create([
            'ad_image'=>"add.gif",
            'ad_place_value'=>"2",
            'website'=>'gmail.com'
        ]);

        \App\Advertisement::create([
            'ad_image'=>"add.gif",
            'ad_place_value'=>"3",
            'website'=>'gmail.com'
        ]);


        //Third Row Set
        \App\Advertisement::create([
            'ad_image'=>"small_ad1.png",
            'ad_place_value'=>"4",
            'website'=>'gmail.com'
        ]);
        \App\Advertisement::create([
            'ad_image'=>"small_ad1.png",
            'ad_place_value'=>"5",
            'website'=>'gmail.com'
        ]);
        \App\Advertisement::create([
            'ad_image'=>"small_ad1.png",
            'ad_place_value'=>"6",
            'website'=>'gmail.com'
        ]);

        //Third Row Set
        \App\Advertisement::create([
            'ad_image'=>"small_ad1.png",
            'ad_place_value'=>"7",
            'website'=>'gmail.com'
        ]);
        \App\Advertisement::create([
            'ad_image'=>"small_ad1.png",
            'ad_place_value'=>"8",
            'website'=>'gmail.com'
        ]);
        \App\Advertisement::create([
            'ad_image'=>"small_ad1.png",
            'ad_place_value'=>"9",
            'website'=>'gmail.com'
        ]);

        //
        \App\Advertisement::create([
            'ad_image'=>"add.gif",
            'ad_place_value'=>"10",
            'website'=>'gmail.com'
        ]);

        //Details Page

        \App\Advertisement::create([
            'ad_image'=>"add.gif",
            'ad_place_value'=>"11",
            'website'=>'gmail.com'
        ]);
        \App\Advertisement::create([
            'ad_image'=>"grid_ad.gif",
            'ad_place_value'=>"12",
            'website'=>'gmail.com'
        ]);
    }
}
