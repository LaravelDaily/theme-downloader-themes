<?php

Route::get('/', "ClassimaxController@index")->name('welcome');

Route::get('/blog', "ClassimaxController@indexBlog")->name('blog');

Route::get('/category', "ClassimaxController@indexCategory")->name('category');

Route::get('/dashboard', "ClassimaxController@indexDashboard")->name('dashboard');

Route::get('/single-blog', "ClassimaxController@indexSingleBlog")->name('single-blog');

Route::get('/single-item', "ClassimaxController@indexSingleItem")->name('single-item');

Route::get('/user-profile', "ClassimaxController@indexUserProfile")->name('user-profile');