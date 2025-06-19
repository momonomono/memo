# middlewareとは
リクエストの前後で処理する機能


# authで使うmiddleware
app/Http/Kernel.php

    protected $routeMiddleware = [
        <!-- この中の使うmiddlewareがある -->
    ];

# middilewareのroute変更

app/Providers/RouteServiceProvider

    class RouteServiceProvider extends ServiceProvider{

        <!-- ここを変更 -->
        public const HOME = '/login';
    }

# usernameの変更


# middleware guestについて
app/Http/Kernel.php
'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,

app/Http/Middleware/Authenticate



protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        return route('login');
    }
}



