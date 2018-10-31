<?php

// Register Twill routes here (eg. Route::module('posts'))
Route::module('projects');

Route::module('projecttags');

Route::module('homepages');
Route::name('homepage')->get('homepage', 'HomepageController@homepage');

//redirect /homepages to /homepage in order to disallow people from editing/creating new homepages. "In the end, there can be only one."
Route::get('homepages', function() {
    return redirect('homepage');
});