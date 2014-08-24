<?php
Route::resource('api/comments', 'Persson\Comments\CommentsController',
    array('except' => array('create', 'edit')));

Route::get('comments', function () {
    JavaScript::put(['comment' => ['user_id' => Auth::id(), 'commentable_type' => 'Course', 'commentable_id' => 1]]);
    return View::make('angular.commentsTest');
});