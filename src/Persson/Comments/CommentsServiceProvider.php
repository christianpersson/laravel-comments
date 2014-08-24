<?php namespace Persson\Comments;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class CommentsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    public function boot(){
        $this->package('persson/comments');
        AliasLoader::getInstance()->alias('Comments', 'Persson\Comments\Comment');
        require(__DIR__.'/routes.php');

    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
