<?php

// 页面css，在view.layouts.app
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}