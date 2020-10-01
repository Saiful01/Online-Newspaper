<?php

use Carbon\Carbon;

function dateFormat($date)
{

    $createdAt = Carbon::parse($date);
    return $createdAt->format('d M, Y g:i A');
}

function randomCategory()
{
    $array = [
        'sports',
        'entertainment',
        'world',
        'health',
        'technology',
        'politics',
    ];

    return $array[rand(0, 5)];
}
function getTitleToUrl($blog_title)
{
    return str_replace(" ","-",$blog_title);
}
function getCategoryNameFromId($id)
{
    return $result= \App\Category::where('category_id', $id)->first()->category_en;
}
function getPostView($id)
{
    return $result=\App\PostView::where('post_id', $id)->first()->views;
}
function getNavbar($id)
{
    return $result=\App\Category::where('parent_category', $id)->get();
}
/*function gettingCategoryIdtoValue($id)
{

    return   \App\Category::where('category_id', $id)->first()->en_name;

}*/

//https://stackoverflow.com/questions/28290332/best-practices-for-custom-helpers-in-laravel-5
?>