<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function current_route()
{
    return Route::currentRouteName();
}