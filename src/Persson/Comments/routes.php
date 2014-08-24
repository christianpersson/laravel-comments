<?php
Route::resource('api/comments', 'Persson\Comments\CommentsController',
    array('except' => array('create', 'edit')));

