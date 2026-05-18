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

function loadView($name)
{
    $viewPath =  basePath("view/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View {$name} not found";
    }
}

/**
 * Load partials
 * @param string $name/$partials
 * @return void
 */

function loadPartials($name)
{
    $partialPath = basePath("view/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} not found";
    }
}
