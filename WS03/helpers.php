<?php

/**
 * Get the path
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load view
 * @param string $name
 * @return void
 */

function loadView($name, $data = [])
{
    $viewPath =  basePath("view/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View {$name} not found";
    }
}

/**
 * Load partials
 * @param string $name/$partials
 * @return string
 */

function loadPartials($name): string
{
    $partialPath = basePath("view/partials/{$name}.php");

    if (file_exists($partialPath)) {
        ob_start();
        require $partialPath;
        return ob_get_clean();
    }

    return "Partial {$name} not found";
}

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}
