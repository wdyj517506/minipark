<?php
use think\facade\Route;

Route::rule('/login', 'login/index');
Route::rule('/login', 'login/index');
Route::rule('/demo', 'index/demo');
Route::get('captcha/[:config]','\\think\\captcha\\CaptchaController@index');