<?php

if (!function_exists('current_section')) {
    function current_section()
    {
        if (Request::is('backend*') || Request::is('admin*')) {
            $link_type = 'backend';
            $theme = !is_null(env('THEME_BACKEND')) ? env('THEME_BACKEND') : 'default';
        } else {
            $link_type = 'frontend';
            $theme = !is_null(env('THEME_FRONTEND')) ? env('THEME_FRONTEND') : 'default';
        }
        return array($link_type, $theme);
    }
}