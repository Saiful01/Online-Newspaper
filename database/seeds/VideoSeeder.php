<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Video::create([
            'video_title' => "Om Mani Padme Hum Original Extended Version x9",
            'video_url' => "https://www.youtube.com/watch?v=R-ZO7bsA2pA",
            'video_description' => "Su excelencia,amo este mantra fué el primero que abrió la puerta que nada ni nadie puede cerrar. Me enseñaste el camino con esa bella armonía, aún recuerdo cada ritmo dentro de mi llevándome al lugar en el que hoy me encuentro. Yo soy amor,yo soy mil gracias un abrazo de luz,shalom. Chely﻿",
            'author_id' => "1"]);

    }
}
