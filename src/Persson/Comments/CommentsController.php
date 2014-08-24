<?php namespace Persson\Comments;
use \Auth;
use \Input;
use \Response;

class CommentsController extends \Controller
{

    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Comment::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $comment = Comment::create(array(
            'author' => Auth::user()->username,
            'text' => Input::get('text'),
            'title' => Input::get('title') ?: '',
            'user_id' => Auth::id(),
            'commentable_type' => Input::get('commentable_type'),
            'commentable_id' => Input::get('commentable_id'),
        ));

        return Response::json(array('success' => true, 'comment' =>
            $comment));
    }

    public function update()
    {
        $id = Input::get('id');
        $comment = Comment::findOrFail($id);
        if ($id == null)
            return Response::json(array('success' => false));
        $comment->update(array(
            'author' => Auth::user()->username,
            'text' => Input::get('text'),
            'title' => Input::get('title') ?: '',
            'user_id' => Auth::id(),
        ));


        return Response::json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);

        return Response::json(array('success' => true));
    }

}