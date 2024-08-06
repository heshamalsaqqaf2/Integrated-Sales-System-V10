<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
	/**
	 * @param Request $request
	 * @return string|void|null
	 */
	protected function redirectTo(Request $request)
	{
//		return $request->expectsJson() ? null : route('login');
		if ($request->expectsJson())
			if ($request->is('admin') || $request->is('admin/*'))
				return route('admin.login');
			else
				return route('admin.login');
	}
}
