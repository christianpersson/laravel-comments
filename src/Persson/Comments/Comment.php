<?php namespace Persson\Comments;

/**
 * Comment
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $author
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $commentable_id
 * @property string $commentable_type
 * @method static \Illuminate\Database\Query\Builder|\Comment whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereText($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereAuthor($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereUserId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereUpdatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereCommentableId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Comment whereCommentableType($value) 
 */
class Comment extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'title', 'author', 'text', 'commentable_type', 'commentable_id'];

}