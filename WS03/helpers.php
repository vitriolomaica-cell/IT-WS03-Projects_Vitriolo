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
    $viewPath =  basePath("App/view/{$name}.view.php");

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
 * @return void
 */

function loadPartials($name)
{
    $partialPath = basePath("App/view/partials/{$name}.php");

    if (file_exists($partialPath)) {
        ob_start();
        require $partialPath;
        $content = ob_get_clean();
        echo $content;
        return $content;
    }

    $msg = "Partial {$name} not found";
    echo $msg;
    return $msg;
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
