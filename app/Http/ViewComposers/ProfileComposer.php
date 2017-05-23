<?php
namespace App\HTTP\ViewComposers;
use Illuminate\View\View;


class ProfileComposer
{
	public function compose(View $view)
	{
		 $view->with( 'married' , random_int(0,9) );

		 //
		 $view->with( 'test' , 'say test');
	}

	//View::creator  BE AWARE!!!
	public function create(View $view)
	{
       
       $view->with( 'married' , random_int(0,9) );

		 //
		 $view->with( 'test' , 'say test');
	}
}