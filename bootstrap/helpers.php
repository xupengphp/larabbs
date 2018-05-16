<?php

 /*
    |--------------------------------------------------------------------------
    | 定义根据请求地址生成动态样式名称
    |--------------------------------------------------------------------------
    |
    */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}