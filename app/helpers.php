<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

function getLogoutRoute() {
    if(Str::startsWith(Route::currentRouteName(), 'admin')) {
        return 'admin.logout';
    }
    return 'user.logout';
}

function notLoginPage() {
    return !Str::endsWith(Route::currentRouteName(), 'login');
}
