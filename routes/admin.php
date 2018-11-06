<?php

/*
Homepage routes
 */
//Route::module('designpages');

Route::group(['prefix' => 'designpages'], function () {
    Route::module('designpages');
    Route::module('projects');
    Route::module('projecttags');
    Route::module('newsitems');
    Route::module('experiments');
});


/*
Info page routes
 */
Route::group(['prefix' => 'infopages'], function () {
    Route::module('infopages');
    Route::module('staffmembers');
    Route::module('newslinks');
    Route::module('jobs');
});



//redirect /homepages to /homepage in order to disallow people from editing/creating new homepages. "In the end, there can be only one."
Route::get('homepages', function() {
    return redirect('homepage');
});


/*
Design page (homepage) - this is to stop people from being able to see a homepage listing.
On hold for the moment...
 */

//Route::module('designPages');
//Route::name('design')->get('design', 'DesignPageController@homepage');
//
//Route::get('designPages', function() {
//    return redirect('design');
//});




//to be deleted ///////
Route::module('homepages');
Route::name('homepage')->get('homepage', 'HomepageController@homepage');