<?php namespace new_project_shafin\Http\Middleware;

use Closure;

class AgeMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		return $next($request);
	}
/*
			1. Global middleware
			2. Routre middleware 

*/
}
