<?php

/*
Homepage routes
 */

//temp
//Route::module('projects');
//Route::module('experiments');
Route::module('indexpages');



//this was added to satisfy an error re tags browser field... but why? See notes page 22.
Route::module('projecttags');

//again had to add this to satisfy error re projects browser field (block for design page)
//Route::module('designpages.projectPreview');


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
//Route::module('homepages');
//Route::name('homepage')->get('homepage', 'HomepageController@homepage');

//redirect /homepages to /homepage in order to disallow people from editing/creating new homepages. "In the end, there can be only one."

/*Route::get('homepages', function() {
    return redirect('homepage');
});*/