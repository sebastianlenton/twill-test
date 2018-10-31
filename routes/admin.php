<?php

// Register Twill routes here (eg. Route::module('posts'))
Route::module('projects');

Route::module('projecttags');

Route::module('homepages');
Route::name('homepage')->get('homepage', 'HomepageController@homepage');