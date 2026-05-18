<?php

class Router
{
    private array $routes = [];

    public function get(string $path, string $controller): void
    {
        $normalizedPath = $this->normalizePath($path);
        $this->routes['GET'][$normalizedPath] = $controller;
    }

    public function route(string $uri, string $method): void
    {
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = $this->normalizePath($uri);

        foreach ($this->routes[$method] ?? [] as $routePath => $controller) {
            if ($routePath === $uri) {
                $this->requireController($controller);
                return;
            }

            $paramNames = [];
            $routePattern = $this->convertRouteToRegex($routePath, $paramNames);
            if (preg_match($routePattern, $uri, $matches)) {
                array_shift($matches);
                $params = count($paramNames) === count($matches) ? array_combine($paramNames, $matches) : [];
                foreach ($params as $key => $value) {
                    $_GET[$key] = $value;
                }
                $this->requireController($controller);
                return;
            }
        }

        http_response_code(404);
        echo 'Page not found';
    }

    private function normalizePath(string $path): string
    {
        if ($path === '/') {
            return '/';
        }

        return '/' . trim($path, '/');
    }

    private function convertRouteToRegex(string $route, array &$paramNames): string
    {
        $paramNames = [];
        $regex = preg_replace_callback('/\{([^}]+)\}/', function ($matches) use (&$paramNames) {
            $paramNames[] = $matches[1];
            return '([^/]+)';
        }, $route);

        return '#^' . $regex . '$#';
    }

    private function requireController(string $controller): void
    {
        $path = $controller;
        if (!str_ends_with($path, '.php')) {
            $path .= '.php';
        }

        require basePath($path);
    }
}
