<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        $post = "<p style=\"font-family: &quot;Open Sans&quot;; font-size: 17px; line-height: 31px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">স্মার্টফোন ব্যবহারকারীদের কাছে জনপ্রিয় একটি অ্যাপস&nbsp;<strong style=\"font-weight: bold;\">‘ট্রুকলার’</strong>। বিশেষ করে অচেনা নম্বর থেকে ফোন আসলে আগে থেকেই কে ফোন করেছে সেটি জানার জন্য জনপ্রিয় এ অ্যাপটি ইতিমধ্যেই বিপুল সংখ্যক স্মার্টফোন ব্যবহারকারী ব্যবহার করছেন। কোন নম্বর মোবাইলে সংরক্ষিত না থাকলেও খুব সহজেই এ অ্যাপের মাধ্যমে ব্যবহারকারী জানতে পারেন কে ফোন করেছে এবং তার পরিচয় যা ছবিসহ অনেক সময়ই দেখা যায়। এছাড়া বিরক্তিকর কল ব্লক করা, এসএমএস ব্লক করার সুবিধা থাকায় প্রতিনিয়ত বাড়ছে&nbsp;<strong style=\"font-weight: bold;\">‘ট্রুকলার’</strong>র ব্যবহারকারীর সংখ্যা।</p><p style=\"font-family: &quot;Open Sans&quot;; font-size: 17px; line-height: 31px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">তবে সম্প্রতি ব্যবহারকারীদের গুরুত্বপূর্ণ এসএমএস পড়ার অভিযোগ পাওয়া গেছে ট্রুকলারের বিরুদ্ধে। বিশেষ করে যেসব ব্যবহারকারী অর্থ ঋণ সংক্রান্ত এসএমএস আদান-প্রদান করেন তাদের তথ্য চুরির অভিযোগও উঠেছে ট্রুকলারের বিরুদ্ধে। এর ফলে যেসব প্রতিষ্ঠান অর্থ ঋণ দেয় তারা উক্ত ব্যবহারকারীর সাথে যোগাযোগ সুযোগ পাচ্ছে ব্যবহারকারীর অজান্তেই।</p><p style=\"font-family: &quot;Open Sans&quot;; font-size: 17px; line-height: 31px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">সম্প্রতি ট্রুকলার অ্যাপের একটি কারিগরি সমস্যার কথা জানার পরেই এ ধরনের অভিযোগ উঠে। ‘নিমো’ নামের এক সফটওয়্যার ডেভলপার সুইডেন ভিত্তিক কলার এ কলার আইডি অ্যাপটির বিরুদ্ধে অভিযোগ এনেছেন। অভিযোগ অনুযায়ী, ট্রুকলার তৃতীয় পক্ষের সফটওয়্যার ডেভলপমেন্ট কিটস (এসডিকেএস) ব্যবহার করে ব্যবহারকারীদের ফোনে থাকা এসএমএস তথ্য ঋণ সংক্রান্ত প্রতিষ্ঠানকে হস্তান্তর করছে। বিশেষ করে এক্ষেত্রে ট্রুকলার ৩৫৬টি শব্দ বা এ সংক্রান্ত তথ্য থাকলে সেগুলো সংগ্রহ করছে। এর মধ্যে অন্যতম বেতন, ক্রেডিট, ডেবিট, বোনাস, চেক, প্রিমিয়াম, ইন্সুরেন্স, উবার, এয়ারবিএনবি ইত্যাদি। এ ধরনের তথ্যাদির প্রতি বেশি আগ্রহ তৃতীয় পক্ষের। এছাড়া ঋণ দাতা প্রতিষ্ঠানগুলো নিয়মিত ভাবে ইএমআই সংক্রান্ত যে ধরনের এসএমএস পাঠায় ব্যবহারকারীদের সেগুলোকে নজর তালিকায় রেখেছে ট্রুকলার।</p><p style=\"font-family: &quot;Open Sans&quot;; font-size: 17px; line-height: 31px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">পুরো বিষয়টি ব্যাখ্যা করিতে গিয়ে নিমো জানিয়েছেন, ট্রুকলারের ফ্রিকুয়েন্টলি অ্যান্সার্ড কোশ্নেয়নস (এফএকিএস) এ বলা আছে একজন ব্যবহারকারী চাইলে ট্রুকলারে থাকা ব্যাংকিং ট্যাব ব্যবহার করে উক্ত ব্যবহারকারীর আর্থিক তথ্যাদি বিশ্লেষন করতে পারে। তবে সেটা ব্যবহারকারীর অনুমতি সাপেক্ষে। এখন সেটি না করে ট্রুকলার সকল ব্যবহারকারীদেরই এ ধরনের তথ্য সংগ্রহ করছে।</p>";

        for ($i = 0; $i <= 50; $i++) {
            \App\Post::create([
                'post_headline' =>"চিনা অ্যাপ টিকটক আনইন্সটল করলেন সকলের প্রিয় “ভাবিজী” শুভাঙ্গী",
                'post_slug'=>"new-post",
                'post_featured_image' =>"1.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

            \App\Post::create([
                'post_headline' =>"কিভাবে বদলালেন নিজেকে?",
                'post_slug'=>"new-post",
                'post_featured_image' =>"2.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

            \App\Post::create([
                'post_headline' =>"পঙ্গপালের নাকি আবার রেসিপি! সোশ্যাল মিডিয়ায় ভাইরাল পঙ্গপালের রেসিপি ভিডিও",
                'post_slug'=>"new-post",
                'post_featured_image' =>"3.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

            \App\Post::create([
                'post_headline' =>"থাকবে না ইন্টারভিউ, লিখিত পরীক্ষায় প্রাপ্ত নম্বরের ভিত্তিতেই হবে শিক্ষক নিয়োগ",
                'post_slug'=>"new-post",
                'post_featured_image' =>"4.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

            \App\Post::create([
                'post_headline' =>"খালি চোখেই দেখা যাবে আজ রাতে ‘স্ট্রবেরি চন্দ্রগ্রহণ’, জেনে নিন ভারতে কখন দেখা যাবে",
                'post_slug'=>"new-post",
                'post_featured_image' =>"5.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

            \App\Post::create([
                'post_headline' =>"চিনা অ্যাপ টিকটক আনইন্সটল করলেন সকলের প্রিয় “ভাবিজী” শুভাঙ্গী",
                'post_slug'=>"new-post",
                'post_featured_image' =>"6.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

            \App\Post::create([
                'post_headline' =>"ফের ফুল ফর্মে মুকুল, মুকুল রায়ের প্ল্যানেই লড়বে বাংলার বিজেপি",
                'post_slug'=>"new-post",
                'post_featured_image' =>"7.jpg",
                'category_id' => json_encode(["1",rand(0, 19)]),
                'author_id' => "1",
                'pin_post' => rand(0, 1),
                'post_tags' => "সংস্কৃতি",
                'post_details' => $post]);

        }
    }
}
