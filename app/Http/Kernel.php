protected $routeMiddleware = [
    // Other middleware
    'role' => \App\Http\Middleware\RedirectIfNotRole::class,
];