<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Category::create([
            'category_en' => "Gossip",
            'category_bn' => "গসিপ",
            'parent_category' => 2
        ]);

        \App\Category::create([
            'category_en' => "Social Media Pick",
            'category_bn' => "সোশ্যাল মিডিয়া পিক",
            'parent_category' => 4
        ]);

        \App\Category::create([
            'category_en' => "Top Ten",
            'category_bn' => "টপ টেন",
            'parent_category' => 5
        ]);


        \App\Category::create([
            'category_en' => "Natok",
            'category_bn' => "নাটক",
            'parent_category' => 1
        ]);


        \App\Category::create([
            'category_en' => "Movies",
            'category_bn' => "সিনেমা",
            'parent_category' => 1
        ]);
        \App\Category::create([
            'category_en' => "Music",
            'category_bn' => "সঙ্গীত",
            'parent_category' => 1
        ]);
        \App\Category::create([
            'category_en' => "Modeling",
            'category_bn' => "মডেলিং",
            'parent_category' => 1
        ]);
        \App\Category::create([
            'category_en' => "Bollywood",
            'category_bn' => "বলিউড",
            'parent_category' => 1
        ]);
        \App\Category::create([
            'category_en' => "Hollywood",
            'category_bn' => "হলিউড",
            'parent_category' => 1
        ]);
        \App\Category::create([
            'category_en' => "Celebrity Biography",
            'category_bn' => "সেলিব্রিটি জীবনী",
            'parent_category' => 1
        ]);


        \App\Category::create([
            'category_en' => "Fashion",
            'category_bn' => "ফ্যাশন",
            'parent_category' => 3
        ]);
        \App\Category::create([
            'category_en' => "Travel",
            'category_bn' => "ভ্রমণ",
            'parent_category' => 3
        ]);
        \App\Category::create([
            'category_en' => "Food",
            'category_bn' => "ফুড",
            'parent_category' => 3
        ]);
        \App\Category::create([
            'category_en' => "Fitness",
            'category_bn' => "ফিটনেস",
            'parent_category' => 3
        ]);


        \App\Category::create([
            'category_en' => "Cricket",
            'category_bn' => "ক্রিকেট",
            'parent_category' => 6
        ]);
        \App\Category::create([
            'category_en' => "Football",
            'category_bn' => "ফুটবল",
            'parent_category' => 6
        ]);
        \App\Category::create([
            'category_en' => "Others",
            'category_bn' => "অন্যান্য",
            'parent_category' => 6
        ]);

        \App\Category::create([
            'category_en' => "Happening",
            'category_bn' => "হ্যাপেনিং",
            'parent_category' => 7
        ]);

        \App\Category::create([
            'category_en' => "Horoscope",
            'category_bn' => "হরোস্কোপ",
            'parent_category' => 7
        ]);


        \App\Menu::create([
            'category_id' => "1",
        ]);

    }
}
